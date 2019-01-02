var army2048 = {
	context: "",
	wrap : "",
	grid : [[0,0,0,0], [0,0,0,0], [0,0,0,0], [0,0,0,0]],
	gap : 10,
	squarSize : 57.5,
	cornerRadius : 10,
	start : function() {
		this.wrap = document.getElementById('wrap');
		var mainGrid = document.getElementById('main-grid');
		this.context = mainGrid.getContext('2d');
		document.onkeydown = this.keyEvent.handler.bind(this); 
		this.initGrid();
		this.setBlock(0,0);
		console.log(this.grid);
	},
	initGrid : function(){
		this.drawRoundedRact(0,0,280,280,"#000000");
		var startX = this.gap;
		var startY = this.gap;
		var gap = this.gap;
		var size = this.squarSize;
		
		for(var i = 0 ; i < 4 ; i++) {
			for(var j = 0 ; j < 4 ;j++) {
				this.drawRoundedRact(startX,startY,size,size,"#ff0000");
				startX = startX + size + gap;
			}
			startX = this.gap;
			startY = startY + size + gap;
		}
	},
	keyEvent : {
		handler : function(e) {
			console.log(e.keyCode);
			if(e.keyCode==37) {
				console.log("left");
				this.keyEvent.actionLeft();
			}
		},
		actionLeft : function() {
			console.log(this);
		}
	},
	setBlock : function(x,y) {
		var startX = this.gap;
		var startY = this.gap;
		var gap = this.gap;
		var size = this.squarSize;
		
		this.grid[x][y] = 1;
		
		startX = startX + (gap+size)*x;
		startY = startY + (gap+size)*y;
		
		this.drawRoundedRact(startX,startY,size,size,"#ff00ff");
		
	},
	drawRoundedRact : function(x,y,width,height,color) {
		this.context.fillStyle = color;
		this.context.strokeStyle = color;
		this.context.lineJoin = "round";
		this.context.lineWidth = this.cornerRadius;
		
		var rectX = x+(this.cornerRadius/2);
		var rectY = y+(this.cornerRadius/2);
		var rectWidth = width-this.cornerRadius;
		var rectHeight = height-this.cornerRadius;

		this.context.strokeRect(rectX, rectY, rectWidth, rectHeight);
		this.context.fillRect(rectX, rectY, rectWidth, rectHeight);
	}
}

/*
function keyHandler(e) {
	alert(e.keyCode);
}

document.onkeydown = keyHandler;
*/

window.onload = army2048.start();