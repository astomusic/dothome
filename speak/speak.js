var el = {
	text : "",
	button : ""
}

var speak = {
	init : function() {
		el.text = document.getElementById("textForSpeak");
		el.button = document.getElementById("submitButton");
		el.button.addEventListener("click", this.getContent.bind(this));

		this.speech("환영합니다. 내용을 입력하고, speak버튼을 눌러주세요");
	},

	getContent : function(e) {
		e.preventDefault();
		var content = el.text.value?el.text.value:"내용을 입력해주세요";
		this.speech(content);

	},

	speech : function(content) {
		var u = new SpeechSynthesisUtterance();
		console.log(window.speechSynthesis.getVoices());
		u.lang = 'ko-KR';
		u.text = content;
		u.pitch = 1;
		u.rate = 1;
		speechSynthesis.speak(u);	
	}
}

document.addEventListener("DOMContentLoaded", speak.init.bind(speak));