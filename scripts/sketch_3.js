var textMap, canvas, ctx; 
var images = [];
var hhheight = 0; 
var offset; 
var mouseMotion = false;
var logo; 
var logoWidth = 0;
var logoHeight = 0;
var mX, defaultX;

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

	defaultX = random(margin,width-margin);

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

	mX = mouseX; 
	if(mX<margin || mX>width-margin) mX = defaultX; 
	// if(mX>width-margin) mX = width-margin-10; 

	var blockLeft = textMap.get(0, 0, mX, height);
	var block = textMap.get(mX-5, 0, 10, height);
	var blockRight = textMap.get(mX, 0, width-mX, height);

	image(blockLeft, 0, 0, blockLeft.width-95, height);
	image(blockRight, mX+95, 0, blockRight.width-100, height);
	image(block, mX-100, 0, 200, height);

};

