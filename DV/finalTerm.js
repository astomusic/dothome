var DV = {
	//전역 변수 설정
	dataSet : [],
	width : 700,
	height : 1500,
	//자료를 읽어오고, y축을 그려준다. 각각의 버튼에 대한 이벤트를 등록한다.
	init : function() {
		this.svg = d3.select("body")
					.append("svg")
					.attr("width", this.width)
					.attr("height", this.height);


		d3.csv("korea.csv", function(data) { 
			this.dataSet.year = [];
			this.dataSet.gdp = [];
			this.dataSet.murder = [];
			this.dataSet.suicide = [];
			this.dataSet.unemployment = [];
			this.dataSet.workinghours = [];
			for(var i = 0 ; i < data.length ; i++) {
				this.dataSet.year.push(data[i]['Year']*1);
				this.dataSet.gdp.push(data[i]['GDP']*1);
				this.dataSet.murder.push(data[i]['Murder']*1);
				this.dataSet.suicide.push(data[i]['Suicide']*1);
				this.dataSet.unemployment.push(data[i]['Unemployment']*1);
				this.dataSet.workinghours.push(data[i]['WorkingHours']*1);
			}
			this.drawAxis();

			$('input').on('click', function(e) {
				console.log(e.target.id);
				if($(e.target).is(":checked")) {
				    this.draw(this.dataSet[e.target.id], e.target.id);
				    this.scrollTobottom();
				} else {
					this.remove(e.target.id);
				} 
   			}.bind(this));
			console.log(this.dataSet);
		}.bind(this));
	},
	//스크롤을 하단까지 내리는 함수 
	scrollTobottom :  function() {
		$("html, body").animate({ scrollTop: $(document).height() }, 4000);
	},
	//스크롤을 상단으로 올리는 함수 
	scrollToTop : function() {
		$('body').scrollTop(0);
	},
	//축을 그려주는 함수 
	drawAxis : function() {
		var y = d3.scale.linear()
			.domain([0, DV.dataSet.year.length])
			.range([100, this.height]);

		var yAxis = d3.svg.axis()
			.scale(y)
			.orient("left")
			.ticks(DV.dataSet.year.length)
			.tickFormat(function(d) { return DV.dataSet.year[d]; });

		this.svg.append("g")
	        .attr("class", "axis")
	        .attr("transform", "translate(" + 50 + ",0)")
	        .call(yAxis);
	},
	//선택된 데이터를 그려주는 함수 
	draw : function(data, id) {
		var xScale = d3.scale.linear()
							.domain([0, d3.max(data)])
							.range([0, this.width]);
		var y = d3.scale.linear()
			.domain([0, data.length])
			.range([100, this.height]);
		var x = d3.scale.linear()
  			.domain([d3.min(data), d3.max(data)])
			.range([100, this.width]);

		var line = d3.svg.line()
		    .x(function(d,i) { return x(d); })
		    .y(function(d,i) { return y(i); });

		this.svg.append("path")
			.attr("id", id+"path")
			.attr("d", line(data));
	},
	// 선택된 데이터를 화면에서 삭제하는 함수 
	remove : function(id) {
		$("#"+id+"path").remove();
	}
}

document.addEventListener("DOMContentLoaded",DV.init.bind(DV));