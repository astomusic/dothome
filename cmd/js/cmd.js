var slide = {
	init :  function() {
		console.log("slide");
		this.setCarousel();
		$("#warpper").on('touchstart touchend', $.proxy(this.touchstart, this));
		$(".detail").on('click', this.showdetail);

	},

	touchstart : function(e) {
		console.log(e.type);
		if(e.type == 'touchstart') {
			this.start = e.originalEvent.touches[0].screenX;
		}
		if(e.type == 'touchend') {
			this.end = e.originalEvent.changedTouches[0].screenX;
			if(this.end - this.start < -50) $('.carousel').carousel('next');
			if(this.end - this.start > 50) $('.carousel').carousel('prev');
		}
	},

	touchend : function(e) {
		console.log(e);
		
	},

	setCarousel : function() {
		$('.carousel').carousel({
		  interval: 5000
		})
	},

	showdetail : function() {
		console.log("showdetail");
		window.location.href = "detail.html";
	}
}

var speak = {
	init : function() {
		$(".speak").on("click", $.proxy(this.speakContenct,this));
		console.log("speak");
	},

	speakContenct : function(e) {
		e.preventDefault();
		$(".speak").addClass('disabled');
		var content = $("p", ".item.active")[0].textContent;
		this.speech(content);
	},

	speech : function(content) {
		var u = new SpeechSynthesisUtterance();
		u.lang = 'ko-KR';
		u.text = content;
		u.pitch = 1;
		u.rate = 1;
		u.onend = function() {
			$(".speak").removeClass('disabled');
		};
		speechSynthesis.speak(u);
	}
}

$(document).ready(function() {
	slide.init();
	speak.init();
});
