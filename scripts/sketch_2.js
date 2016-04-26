var textMap, canvas, ctx; 
var images = [];
var hhheight = 0; 
var offset; 
var mouseMotion = false;
var logo; 
var logoWidth = 0;
var logoHeight = 0;


var rep = 5; 
var cellSize = 50; 

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
	image(textMap, 0, 0);
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
	image(textMap, 0, 0);
	
	var x = int(mouseX/cellSize)*cellSize; 
	var y = int(mouseY/cellSize)*cellSize; 

	ctx.clearRect(x, y, cellSize, cellSize);

	var block = textMap.get(x, y, cellSize, cellSize);
	push();
	translate(x, y);
	rotate( radians(90) );
	image(block, 0, -cellSize);
	pop();

	for(var count=0; count<random(2); count++){
		x = int(random(0,width)/cellSize)*cellSize; 
		y = int(random(0,height)/cellSize)*cellSize; 

		block = textMap.get(x, y, cellSize, cellSize);
		push();
		translate(x, y);
		rotate( radians(90) );
		image(block, 0, -cellSize);
		pop();

	}

	textMap = get(0, 0, windowWidth, windowHeight);
};

