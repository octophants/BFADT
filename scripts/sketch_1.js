var textMap, canvas, ctx; 
var images = [];
var logoHeight = 0; 
var offset; 

var rep = 5; 
var columnSize = 10;
var columns = [];
var logoWidth = 0;
var logoHeight = 0;
var margin = 0; 

var preload = function(){
	logo = loadImage("scripts/assets/supertranspositions_3.svg");
};

var setup = function(){
	var c = createCanvas(windowWidth, windowHeight);
	c.parent('canvasIdentity');
	canvas = document.getElementById("defaultCanvas0");
	ctx = canvas.getContext("2d");
	pixelDensity(1); 


	logoWidth = width*0.9;
	logoHeight = (width*0.9)*0.073529412;
	margin = (width-logoWidth)/2;


	rep = floor(height/logoHeight)-1; 
	offset = (height/2)-(logoHeight*rep)/2;

	textMap = renderMap();

	columnCount = width / columnSize;
	for (var i = 0; i < columnCount + 1; i++) {
		columns[i] = {
			x: i * columnSize,
			y: height*0.5
		};
		var tempImage = textMap.get(i * columnSize, 0, columnSize, height);
		images.push(tempImage);
	}
};

var renderMap = function(){
	
	var g = createGraphics(width, logoHeight+3);
	g.background(0);
	g.image(logo, margin, 0, logoWidth, logoHeight);

	var fullG = createGraphics(width, height);
	for(var i=0; i<rep; i++){
		console.log("image"+i, i*logoHeight+offset);
		fullG.image(g, 0, i*logoHeight+offset, width, logoHeight);	
	}
	return fullG;
};

var draw = function(){
	clear();

	var c, next;

	var mouseC = int(mouseX/columnSize);
	columns[mouseC].y = lerp(columns[mouseC].y, mouseY, 0.3);

	var i; 
	for (i=0; i<columns.length-1; i++) {
		// find this column and the next
		c = columns[i];
		next = columns[i+1];
		// move the squares towards each other
		c.y = lerp(c.y, next.y, 0.15);
		next.y = lerp(next.y, c.y, 0.15);
	}

	//why -2? because it works!
	for (i=0; i<columns.length-2; i++) {
		c = columns[i];
		image( images[i], c.x, int(c.y/columnSize)*columnSize+columnSize - windowHeight/2);
	}

};

function windowResized() {
  resizeCanvas(windowWidth, windowHeight);
};
