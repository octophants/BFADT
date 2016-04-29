var count = 10;
var rep = 5; 

var textMap, canvas, ctx, logo; 
// var logo;
var images = [];
var logoWidth = 0;
var logoHeight = 0;
var margin = 0; 

var preload = function(){
	logo = loadImage("scripts/assets/supertranspositions_3.svg");
};

console.log("sketch_0");

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

	for(var i=0; i<rep; i++){
		var temp = makeImageData( i*logoHeight+offset );
		images.push( imageData );
	}
};

var renderMap = function(){
	var g = createGraphics(width, logoHeight+3);
	g.background(0);
	g.image(logo, margin, 0, logoWidth, logoHeight);

	var fullG = createGraphics(width, height);
	for(var i=0; i<rep; i++){
		fullG.image(g, 0, i*logoHeight+offset, width, logoHeight);	
	}

	return fullG;
};


var draw = function(){
	clear();
	var offset = height/2-((logoHeight*rep)/2);
	image(textMap, 0, 0);
	for(var i=0; i<rep; i++){
		for(var j=0; j<count; j++){
			var mappedW = round( map(mouseX, 0, width, -images[i][j].w, images[i][j].w) );
			if(mappedW<0){
				ctx.clearRect(images[i][j].x, i*logoHeight+offset, mappedW, logoHeight);
				image( images[i][j].left, images[i][j].x, i*logoHeight+offset, mappedW, logoHeight);
			}else{
				ctx.clearRect(images[i][j].x, i*logoHeight+offset, mappedW, logoHeight);
				image( images[i][j].right, images[i][j].x, i*logoHeight+offset, mappedW, logoHeight);
			}
		}
	}
};

var windowResized = function(){
  resizeCanvas(windowWidth, windowHeight);
};

var makeImageData = function(y){
	var imageData = []; 
	for(var i=0; i<count; i++){	
		var xx = random(margin, width-margin);
		var ww = random(width*0.05, width*0.08);
		var tempData = {
			x: xx,
			w: ww,
			left: textMap.get(xx-ww, y, ww, logoHeight), 
			right: textMap.get(xx, y, ww, logoHeight) 
		};
		imageData.push( tempData );
	}
	return imageData;
};

