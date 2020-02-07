var netflix = {
  today: {},
  init: function() {
    var url =
      "http://www.smbs.biz/Flash/TodayExRate_flash.jsp?tr_date=2017-07-07";

    var today = new Date();

    this.today.year = today.getFullYear();
    this.today.month = today.getMonth();
    this.today.date = today.getDate();

    this.invoice = 11.99;

    this.setInvoiceInfo();
    this.getCurrencyRate();
  },

  setFlowChart: function(dataSet) {
    var ctx = document.getElementById("flow-chart").getContext("2d");
    var myChart = new Chart(ctx, {
      type: "line",
      data: {
        labels: [
          "5 month ago",
          "4 month ago",
          "3 month ago",
          "2 month ago",
          "A month ago",
          "This Month"
        ],
        datasets: [
          {
            label: "flow of invoice(₩)",
            data: dataSet,
            borderWidth: 1
          }
        ]
      },
      options: {
        layout: {
          padding: {
            left: 0,
            right: 0,
            top: 0,
            bottom: 250
          }
        }
      }
    });
  },

  setInvoiceChart: function(dataSet) {
    var ctx = document.getElementById("invoice-chart").getContext("2d");
    var myChart = new Chart(ctx, {
      type: "horizontalBar",
      data: {
        labels: ["YH Kang", "KW Park", "JS Park", "SJ Choi", "Total"],
        datasets: [
          {
            label: "amount of invoice(₩)",
            data: dataSet,
            backgroundColor: [
              "rgba(255, 99, 132, 0.2)",
              "rgba(255, 99, 132, 0.2)",
              "rgba(255, 99, 132, 0.2)",
              "rgba(255, 99, 132, 0.2)",
              "rgba(153, 102, 255, 0.2)"
            ],
            borderColor: [
              "rgba(255, 99, 132, 1)",
              "rgba(255, 99, 132, 1)",
              "rgba(255, 99, 132, 1)",
              "rgba(255, 99, 132, 1)",
              "rgba(153, 102, 255, 1)"
            ],
            borderWidth: 1
          }
        ]
      },
      options: {
        scales: {
          xAxes: [{ stacked: true }],
          yAxes: [{ stacked: true }]
        },
        layout: {
          padding: {
            left: 0,
            right: 0,
            top: 0,
            bottom: 250
          }
        }
      }
    });
  },

  setInvoiceInfo: function() {
    var schedule =
      "This is a statement of accounts for Netflix fee from <b>7 " +
      this.getMonthName(this.today.month) +
      "</b> to <b>6 " +
      this.getMonthName(this.today.month + 1) +
      "</b>";
    var accounts =
      "<b>ShinHan Bank(01048077749) / kakaoBank(3333-01-4021489) / KakaoPay & Toss is availalbe</b>";
    $(".schedule-info").append(schedule);
    $(".accounts-info").append(accounts);
  },

  getMonthName: function(target) {
    var monthNames = [
      "January",
      "February",
      "March",
      "April",
      "May",
      "June",
      "July",
      "August",
      "September",
      "October",
      "November",
      "December"
    ];

    return monthNames[target % monthNames.length];
  },

  getCurrencyRate: function() {
    //https://fixer.io/documentation
    var thisMonth = this.today.month + 1;
    if (this.today.date < 7) {
      alert("매달 7일 이후에 정확한 환율로 반영됩니다.");
    }
    var date = "" + this.today.year + "-" + this.digit(thisMonth, 2) + "-07";
    var oldDates = [];
    var requestUrlforToday =
      "http://data.fixer.io/api/" +
      date +
      "?access_key=3c8ef267a2f1e746fafd9ec80b116d80";
    var result;

    for (var i = 0; i < 6; i++) {
      var oldDate =
        "" + this.today.year + "-" + this.digit(thisMonth, 2) + "-07";
      var requestUrl =
        "http://data.fixer.io/api/" +
        oldDate +
        "?access_key=3c8ef267a2f1e746fafd9ec80b116d80";
      oldDates.push(requestUrl);
      thisMonth--;
      if (thisMonth <= 0) {
        this.today.year = this.today.year - 1;
        thisMonth = thisMonth + 12;
      }
    }

    $.ajax({
      type: "GET",
      url: requestUrlforToday,
      success: $.proxy(function(res) {
        if (res.rates && res.rates.KRW) {
          this.currencyRate = res.rates.KRW / res.rates.USD;
          var amount =
            "Total amount : <u>$11.99</u>, currency rate : <u>$1 = ₩" +
            this.currencyRate +
            "</u> (" +
            date +
            ")";
          $(".amount-info").append(amount);
          this.calculatePayment();
        } else {
          var update =
            "Total amount : <u>$11.99</u>, currency rate : will be update";
          $(".amount-info").append(update);
        }
      }, this)
    });

    var promise = [];
    for (var i = 0; i < oldDates.length; i++) {
      promise[i] = new Promise(function(resolve, reject) {
        $.ajax({
          type: "GET",
          url: oldDates[i],
          success: $.proxy(function(res) {
            if (res.rates && res.rates.KRW) {
              resolve(res.rates.KRW / res.rates.USD);
            } else {
              resolve(0);
            }
          }, this)
        });
      });
    }

    Promise.all(promise).then(
      $.proxy(function(values) {
        console.log("모두 완료됨", values);
        values.reverse();
        var payment = values.map(function(num) {
          return (num * (11.99 / 4)).toFixed(2);
        });
        this.setFlowChart(payment);
      }, this)
    );
  },

  digit: function(num, digit) {
    num = num + "";
    return num.length >= digit
      ? num
      : new Array(digit - num.length + 1).join("0") + num;
  },

  calculatePayment: function() {
    var payment = (this.currencyRate * this.invoice) / 4;
    var paymentTotal = this.currencyRate * this.invoice;
    var dataSet = [payment, payment, payment, payment, paymentTotal];
    $(".payment").append(
      "₩" + this.numberWithCommas(payment.toFixed(0)) + "($2.99)"
    );
    $(".total").append("₩" + this.numberWithCommas(payment.toFixed(0)));
    $(".payment-total").append(
      "₩" + this.numberWithCommas(paymentTotal.toFixed(0)) + "($11.99)"
    );
    $(".total-all").append(
      "₩" + this.numberWithCommas(paymentTotal.toFixed(0))
    );

    var paymentTerm =
      "The Term of Validity : 6 " +
      this.getMonthName(this.today.month + 1) +
      " " +
      this.today.year;
    $(".term").append(paymentTerm);
    this.setInvoiceChart(dataSet);
  },

  numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
  }
};

document.addEventListener("DOMContentLoaded", netflix.init.bind(netflix));
