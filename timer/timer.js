var timer = function() {
	var hands = [];
	hands.push(document.querySelector('#secondhand > *'));
	hands.push(document.querySelector('#minutehand > *'));
	hands.push(document.querySelector('#hourhand > *'));

	var cx = 100;
	var cy = 100;

	function shifter(val) {
	  return [val, cx, cy].join(' ');
	}

	var date = new Date();
	var hoursAngle = 360 * date.getHours() / 12 + date.getMinutes() / 2;
	var minuteAngle = 360 * date.getMinutes() / 60;
	var secAngle = 360 * date.getSeconds() / 60;

	hands[0].setAttribute('from', shifter(secAngle));
	hands[0].setAttribute('to', shifter(secAngle + 360));
	hands[1].setAttribute('from', shifter(minuteAngle));
	hands[1].setAttribute('to', shifter(minuteAngle + 360));
	hands[2].setAttribute('from', shifter(hoursAngle));
	hands[2].setAttribute('to', shifter(hoursAngle + 360));

	for(var i = 1; i <= 12; i++) {
	  var el = document.createElementNS('http://www.w3.org/2000/svg', 'line');
	  el.setAttribute('x1', '100');
	  el.setAttribute('y1', '30');
	  el.setAttribute('x2', '100');
	  el.setAttribute('y2', '40');
	  el.setAttribute('transform', 'rotate(' + (i*360/12) + ' 100 100)');
	  el.setAttribute('style', 'stroke: #ffffff;');
	  document.querySelector('svg').appendChild(el);
	}

	$("#button").on("click", function(e) {	
		var target = e.currentTarget;

		if(target.className == 'stop') {
			$("#button").attr('class', 'play');
		} else if(target.className == 'play') {
			$("#button").attr('class', 'pause');
		} else {
			$("#button").attr('class', 'stop');
		}
	});

	$("#submit").on("click", function(e) {
		var target = e.currentTarget;

		var hour = $("input[name='hour']")[0].value;
		var min = $("input[name='min']")[0].value;
		var sec = $("input[name='sec']")[0].value;

		var total = min + sec;

		console.log(total);

		if(target.innerText == 'START') {
			target.innerText = 'STOP';
			$("input").prop('disabled', true);
		} else {
			target.innerText = 'START';
			$("input").prop('disabled', false);
		}
	});
}



document.addEventListener("DOMContentLoaded",timer);