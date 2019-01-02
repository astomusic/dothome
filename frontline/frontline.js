var dataSet = [
  ['0-1',40,'00:50',  0,    0, 145,  174,145,  174,  0,0,1,1,0,0,0],
  ['0-2',45,'03:00',550,183.3,   0,    0,  0,    0,350,116.6,0,0,1,0,0],
  ['0-3',45,'12:00',900,   75, 900,   75,900,   75,250,20.8,1,0,0,1,0],
  ['0-4',50,'24:00',  0,    0,1200,   50,800, 33.3,750,31,0,0,0,0,1],
  ['1-1',01,'00:15', 10,   40,  30,  120, 15,   60,  0,0,0,0,0,0,0],
  ['1-2',03,'00:30',  0,    0,  40,   80, 60,  120,  0,0,0,0,0,0,0],
  ['1-3',05,'01:00', 30,   30,   0,    0, 30,   30, 10,10,1,0,0,0,0],
  ['1-4',06,'02:00',160,   80, 160,   80,  0,    0,  0,0,0,0,1,0,0],
  ['2-1',05,'00:40',100,  150,   0,    0,  0,    0, 30,45,0,0,0,0,0],
  ['2-2',08,'01:30', 60,   40, 200,133.3, 80, 53.3,  0,0,1,0,0,0,0],
  ['2-3',10,'04:00', 10,  2.5,  10,  2.5, 10,  2.5,230,57.5,1,1,0,0,0],
  ['2-4',15,'06:00',  0,    0, 250,   42,600,  100, 60,10,0,0,1,0,0],
  ['3-1',12,'00:20', 50,  150,   0,    0, 75,  225,  0,0,0,0,0,0,0],
  ['3-2',20,'00:45',  0,    0, 120,  160, 70, 93.3, 30,40,0,0,0,0,0],
  ['3-3',15,'01:30',  0,    0, 300,  200,  0,    0,  0,0,1,1,0,0,0],
  ['3-4',25,'05:00',  0,    0,   0,    0,300,   60,300,60,0,0,1,1,0],
  ['4-1',30,'01:00',  0,    0, 185,  185,185,  185,  0,0,0,0,0,1,0],
  ['4-2',35,'02:00',  0,    0,   0,    0,  0,    0,210,105,0,1,0,0,0],
  ['4-3',40,'06:00',800,133.3, 550,    0,  0,    0,  0,0,1,0,1,0,0],
  ['4-4',40,'08:00',400,   50, 400,   50,400,   50,150,18.7,0,1,0,0,0],
  ['5-1',30,'00:30',  0,    0,   0,    0,100,  200, 45,90,0,0,0,0,0],
  ['5-2',35,'02:30',  0,    0, 600,  240,300,  120,  0,0,1,0,0,0,0],
  ['5-3',40,'04:00',800,  200, 400,  100,400,  100,  0,0,0,0,0,1,0],
  ['5-4',40,'07:00',100, 14.2,   0,    0,  0,    0,700,100,0,0,1,0,0],
  ['6-1',35,'02:00',300,  150, 300,  150,  0,    0,100,50,0,0,0,0,0],
  ['6-2',40,'03:00',  0,    0, 200, 66.6,550,183.3,100,33.3,1,1,0,0,0],
  ['6-3',45,'05:00',  0,    0,   0,    0,200,   40,500,100,0,0,0,1,0],
  ['6-4',45,'12:00',800, 66.6, 800, 66.6,800, 66.6,  0,0,0,0,0,0,1]
];

var frontLine = {
	init : function() {
    $('#support').DataTable({
        data: dataSet,
        paging: false,
        columns: [
            { title: "지역" },
            { title: "요구Lv" },
            { title: "시간" },
            { title: "인력" },
            { title: "인력/h" },
            { title: "탄약" },
            { title: "탄약/h" },
            { title: "식량" },
            { title: "식량/h" },
            { title: "부품" },
            { title: "부품/h" },
            { title: "쾌속수복" },
            { title: "쾌속제조" },
            { title: "인형제조" },
            { title: "장비제조" },
            { title: "토큰" }
        ]
    });
    this.addEvent();
	},
  addEvent : function() {
    $(".support-btn").on('click', function() {
      console.log("hihi");
      $(".support-display").toggle();
    });
  }
}

document.addEventListener("DOMContentLoaded", frontLine.init.bind(frontLine));