function set_button() {
	for(var i=0 ; i<10 ; i++) {
		draw_rect(i, 11, "#0b5c04");
		var restart = ["<","R","E","S","T","A","R","T","!",">"];
		draw_count(restart[i], i, 11);
	}
}