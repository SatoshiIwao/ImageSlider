<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<style>

#container {
	-webkit-perspective: 800px;
	-ms-perspective: 800px;
	-moz-perspective: 800px;
	-o-perspective: 800px;
	
	
	-webkit-perspective-origin: 0 0;
	-ms-perspective-origin: 0 0;
	-moz-perspective-origin: 0 0;
	-o-perspective-origin: 0 0;
	
	
	width: 750px;
	height: 500px;
	box-shadow: 0px 0px 40px rgba(0,0,0,1);
}

.cells {
	-webkit-transform-style: preserve-3d;
	-moz-transform-style: preserve-3d;
	-o-transform-style: preserve-3d;
	-ms-transform-style: preserve-3d;
	
	-webkit-transform-origin: 50% 50%;
	-moz-transform-origin: 50% 50%;
	-o-transform-origin: 50% 50%;
	-ms-transform-origin: 50% 50%;
	
	-webkit-backface-visibility: hidden;
	-moz-backface-visibility: hidden;
	-o-backface-visibility: hidden;
	-ms-backface-visibility: hidden;
	
	width: 50px;
	height: 50px;
	position: absolute;
	top: 0px;
	left: 0px;
	
}

.back {
	-webkit-transform: rotateY(180deg);
	-moz-transform: rotateY(180deg);
	-o-transform: rotateY(180deg);
	-ms-transform: rotateY(180deg);
}

#c0 {
	background-image: url("src/bg4.jpg");
	background-position: -0px -0px;
	background-size: 750px 500px;
}

#b0 {
	background-image: url("src/bg4.jpg");
	background-position: -0px -0px;
	background-size: 750px 500px;
}

#subcontainer {
	height: 200px;
}

.list {
	height: inherit;
	width: 300px;
	position: absolute;
	box-shadow: 0px 0px 40px rgba(0,0,0,1);
	cursor: pointer;
	border-radius: 5%;
}

.mostout {
	height: 50px;
	width: 75px;
	top: 75px;
}

.out {
	height: 100px;
	width: 150px;
	top: 50px;
}

.zero {
	height: 1px;
	width: 1px;
	top: 100px;	
}

.subbtn {
	width: 60px;
	height: 60px;
	border-radius: 50%;
	
	background: -webkit-radial-gradient(15% 15%, rgba(198, 198, 198, 0.0), rgba(198, 198, 198, 0.5), rgba(198, 198, 198, 1));
	background: -moz-radial-gradient(15% 15%, rgba(198, 198, 198, 0.0), rgba(198, 198, 198, 0.5), rgba(198, 198, 198, 1));
	background: -o-radial-gradient(15% 15%, rgba(198, 198, 198, 0.0), rgba(198, 198, 198, 0.5), rgba(198, 198, 198, 1));
	background: -ms-radial-gradient(15% 15%, rgba(198, 198, 198, 0.0), rgba(198, 198, 198, 0.5), rgba(198, 198, 198, 1));
	
	font-size: 40px;
	color: rgba(0,0,0,0.8);
	cursor: pointer;
}

#rightsubbtn {
	position: relative;
	top: 70px;
	float: right;
}

#leftsubbtn {
	position: relative;
	top: 70px;
	float:left;
}

@-webkit-keyframes move {
	100% {
		-webkit-transform: translate(100px, 0px) scale(2,2);
	}
}

@-ms-keyframes move {
	100% {
		-ms-transform: translate(100px, 0px) scale(2,2);
	}
}

@-moz-keyframes move {
	100% {
		-moz-transform: translate(100px, 0px) scale(2,2);
	}
}

@-o-keyframes move {
	100% {
		-o-transform: translate(100px, 0px) scale(2,2);
	}
}

#img1 {
	-webkit-transition: -webkit-transform 1s;
	-moz-transition: -moz-transform 1s;
	-o-transition: -o-transform 1s;
	-ms-transition: -ms-transform 1s;
	
}

#img2 {
	-webkit-transition: -webkit-transform 1s;
	-moz-transition: -moz-transform 1s;
	-o-transition: -o-transform 1s;
	-ms-transition: -ms-transform 1s;
}

#img3 {
	-webkit-transition: -webkit-transform 1s;
	-moz-transition: -moz-transform 1s;
	-o-transition: -o-transform 1s;
	-ms-transition: -ms-transform 1s;
}

#img4 {
	-webkit-transition: -webkit-transform 1s;
	-moz-transition: -moz-transform 1s;
	-o-transition: -o-transform 1s;
	-ms-transition: -ms-transform 1s;
}

#img5 {
	-webkit-transition: -webkit-transform 1s;
	-moz-transition: -moz-transform 1s;
	-o-transition: -o-transform 1s;
	-ms-transition: -ms-transform 1s;
}

#pop {
	width: 0px;
	height: 0px;
	position: absolute;
	background-color: rgba(0,0,0,0.8);
}

.popup {
	display:none; 
	position: absolute;
}

#expandbtn {
	background-image: url("src/eb.png");
	background-size: 100% 100%;
	position: absolute;
	left: 0px;
	top: 0px;
	border-style: none;
}

#popcontainer {
	position: absolute;
	left: 100px;
	top: 0px;
}

#epimg {
	height: inherit;
	width: inherit;
}

#closebtn {
	border-style: none;
	background: rgba(0,0,0,0);
}

</style>
</head>
<body>
<div id="container">
	<div class="cells back" id="b0"></div>
	<div class="cells front" id="c0"></div>	
	<input class="subbtn" id="expandbtn" type="button"/>
</div>
<div id="subcontainer">
	<button class="subbtn" id="leftsubbtn">&#10096</button>
	<button class="subbtn" id="rightsubbtn">&#10097</button>
	<img class="imgcols list zero" id="img0" src="src/bg1.jpg"></img>
	<img class="imgcols list mostout" id="img1" src="src/bg2.jpg"></img>
	<img class="imgcols list out" id="img2" src="src/bg3.jpg"></img>
	<img class="imgcols list middle" id="img3" src="src/bg4.jpg"></img>
	<img class="imgcols list out" id="img4" src="src/bg5.jpg"></img>
	<img class="imgcols list mostout" id="img5" src="src/bg6.jpg"></img>
	<img class="imgcols list zero" id="img6" src="src/bg7.jpg"></img>
</div>

<div id="pop">
	<div class="popup" id="popcontainer">
		<img class="popup" id="epimg" src="src/bg10.jpg"></img>	
		<button class="subbtn popup" id="closebtn">X</button>
	</div>
</div>
<script>
	$(document).ready(function(){
		
		var centerWidth = (window.innerWidth/2) - 375;
		var bottomHeight = (window.innerHeight) - 250;
		var centerleft = window.innerWidth/2.0;
		var centertop = window.innerHeight/2.0;
		var innerWidth = window.innerWidth;
		var innerHeight = window.innerHeight;
		var expandwidth = innerWidth -200;
		var expandheight = innerHeight;
		
		var imgs = ["src/bg1.jpg", "src/bg2.jpg", "src/bg3.jpg", "src/bg4.jpg", "src/bg5.jpg", "src/bg6.jpg", "src/bg7.jpg", "src/bg8.jpg", "src/bg9.jpg", "src/bg10.jpg"];
		var index = 0;
		var revisedOrderArray = [0,1,2,3,4,5,6];
		var clickNum = 0;
		var cellNum = 150;
		var iniTop = 0;
		var iniLeft = 0;
		var res = order(10, 15);
		var begin = new Array(res.length);
		var degree = new Array(res.length);
		var eachDeg = 5;
		var imgurl = imgs[revisedOrderArray[3]];
		
		var slide3left = window.innerWidth/2.0 - 150;
		var slide2left = slide3left -160;
		var slide4left = slide3left + 310;
		var slide1left = slide2left - 85;
		var slide5left = slide4left + 160;
		var slide0left = slide1left -50;
		var slide6left = slide5left +100;
		
		var slide0top = 100;
		var slide1top = 75;
		var slide2top = 50;
		var slide3top = 0;
		var slide4top = 50;
		var slide5top = 75;
		var slide6top = 100;
		
		var orgSlide0width = 1;
		var orgSlide1width = 75;
		var orgSlide2width = 150;
		var orgSlide3width = 300;
		var orgSlide4width = 150;
		var orgSlide5width = 75;
		var orgSlide6width = 0;
		
		var orgSlide0height = 1;
		var orgSlide1height = 50;
		var orgSlide2height = 100;
		var orgSlide3height = 200;
		var orgSlide4height = 100;
		var orgSlide5height = 50;
		var orgSlide6height = 0;
		
		// css 
		
		$("#container").css({"position": "absolute", "left": centerWidth});
		$("#subcontainer").css({"position":"absolute", "top":bottomHeight, "width": (window.innerWidth-17)});
		$("#pop").css({"left":centerleft+'px', "top": centertop+"px"});
		$("#popcontainer").css({"width": expandwidth, "height": expandheight});
		
		$("#img0").css({"left":slide0left});
		$("#img3").css({"left":slide3left});
		$("#img2").css({"left":slide2left});
		$("#img4").css({"left":slide4left});
		$("#img1").css({"left":slide1left});
		$("#img5").css({"left":slide5left});
		$("#img6").css({"left":slide6left});
		
		// initial 
		
		for (var i = 0;i<res.length;i++) {
			degree[i] = 0;
		}
	
		for (var i = 1;i<cellNum;i++) {
					
			var id = i-1;
									
			var eachTop = iniTop + (50*(Math.floor(i/15)));
			var eachLeft = iniLeft + (50*(i%15));
			
			var imgTop = (50*(Math.floor(i/15)));
			var imgLeft = (50*(i%15));
			
			$("#c"+id).after("<div class='cells' id='c"+(i)+"'></div>");
			$("#c"+i).css({"top": eachTop, "left": eachLeft, "background-image": "url('src/bg4.jpg')", "background-size": "750px 500px", "background-position": "-"+imgLeft+"px -"+imgTop+"px"});	
			
			$("#b"+id).after("<div class='cells' id='b"+(i)+"'></div>");
			$("#b"+i).css({"top": eachTop, "left": eachLeft, "background-image": "url('src/bg4.jpg')", "background-position": "-"+imgLeft+"px -"+imgTop+"px", "-webkit-transform": "rotateY(180deg)", "-moz-transform": "rotateY(180deg)", "-o-transform": "rotateY(180deg)", "-ms-transform": "rotateY(180deg)"});	
		}
		
		// event handler
		
		$("#expandbtn").click(function(){
			
			$("#epimg").prop({"src": imgurl});
			
			$("#pop").animate({
				left:"0px",
				top: "0px",
				width: innerWidth+"px",
				height: innerHeight+"px"},500, function(){
					$(".popup").css({"display":"inline"});
					
				});
		});
		
		$("#closebtn").click(function(){
			
			$(".popup").css({"display":"none"});
			
			$("#pop").animate({
				left: centerleft+"px",
				top: centertop+"px",
				width: "0px",
				height: "0px"},500, function(){});
		});
		
		$("#rightsubbtn").click(function(){
			
			if (index==(imgs.length-1)) {
				index = 0;	
			}else {
				index++;
			}
			
			revisedOrderArray = moveImages();
			
			moveSliderLeft();
		});
		
		$("#leftsubbtn").click(function(){
			
			if (index==0) {
				index = imgs.length -1;	
			}else {
				index--;
			}
			
			revisedOrderArray = moveImages();
			
			moveSliderRight();
		
		});
		
		$(".list").click(function(){
			
			var clickedid = this.id;
			var idNumber = clickedid.substr(clickedid.length-1,1);
			
			//window.alert($("#img"+idNumber).prop('src'));
			
			imgurl = $("#img"+idNumber).prop('src');
			
			clickNum++;
			
			if (clickNum%2==0){
				for (var m = 0;m<res.length;m++) {
					for (var n = 0;n<res[m].length;n++){
						$("#c"+res[m][n]).css({"background-image": "url('"+imgurl+"')", "background-size": "750px 500px"});								
					}
				}
			}else if (clickNum%2==1){
				for (var m = 0;m<res.length;m++) {
					for (var n = 0;n<res[m].length;n++){
						$("#b"+res[m][n]).css({"background-image": "url('"+imgurl+"')", "background-size": "750px 500px"});		
					}
				}
			}
			
			var counter = 0;
			begin[counter] = setInterval(function(){rotation(counter);}, 10);
		});
				
		//===============function==========================================================
		
		function moveImages(num) {
			var indices = [index, index+1, index+2, index+3, index+4, index+5, index+6];
						
			if (index >= (imgs.length - (indices.length-1))) {
				for (var i = 0;i<indices.length;i++) {
					if (indices[i]== imgs.length) {
						
						var c = 0;
						
						for (var j =i;j<indices.length;j++) {					
							indices[j] = c;
							c++;
						}
						break;
					}
				}
			}
			return indices;
		}
		
		function moveSliderLeft() {
			
			$("#img0").attr({"src": imgs[revisedOrderArray[0]]});
			
			$("#img1").css({"position":"absolute"});
			$("#img1").animate({
				height: ($("#img1").height()*0),
				width: ($("#img1").width()*0),
				left: slide0left +'px',
				top: slide0top+"px"
			}, 500, function(){
				$("#img1").attr({"src": imgs[revisedOrderArray[1]]});
				$("#img1").css({"left":slide1left+"px", "top": slide1top+"px", "width": orgSlide1width+"px", "height": orgSlide1height+"px" });	
			});
			
			$("#img2").css({"position":"absolute"});
			$("#img2").animate({
				height: ($("#img2").height()*0.5),
				width: ($("#img2").width()*0.5),
				left: slide1left +'px',
				top: slide1top+"px"
			}, 500, function(){
				$("#img2").attr({"src": imgs[revisedOrderArray[2]]});
				$("#img2").css({"left":slide2left+"px", "top": slide2top+"px", "width": orgSlide2width+"px", "height": orgSlide2height+"px" });	
			});
			
			$("#img3").css({"position":"absolute"});
			$("#img3").animate({
				height: ($("#img3").height()*1/2),
				width: ($("#img3").width()*1/2),
				left: slide2left +'px',
				top: slide2top+"px"
			}, 500, function(){
				$("#img3").attr({"src": imgs[revisedOrderArray[3]]});
				$("#img3").css({"left":slide3left+"px", "top": slide3top+"px", "width": orgSlide3width+"px", "height": orgSlide3height+"px" });	
			});
			
			$("#img4").css({"position":"absolute"});
			$("#img4").animate({
				height: ($("#img4").height()*2),
				width: ($("#img4").width()*2),
				left: slide3left +'px',
				top: slide3top+"px"
			}, 500, function(){
				$("#img4").attr({"src": imgs[revisedOrderArray[4]]});
				$("#img4").css({"left":slide4left+"px", "top": slide4top+"px", "width": orgSlide4width+"px", "height": orgSlide4height+"px" });
			});
			
			$("#img5").css({"position":"absolute"});
			$("#img5").animate({
				height: ($("#img5").height()*2),
				width: ($("#img5").width()*2),
				left: slide4left+'px',
				top: slide4top+"px"
			}, 500, function(){
				$("#img5").attr({"src": imgs[revisedOrderArray[5]]});
				$("#img5").css({"left":slide5left+"px", "top": slide5top+"px", "width": orgSlide5width+"px", "height": orgSlide5height+"px" });
			});
			
			$("#img6").css({"position":"absolute"});
			$("#img6").animate({
				height: "50px",
				width: "75px",
				left: slide5left+'px',
				top: slide5top+"px"
			}, 500, function(){
				$("#img6").attr({"src": imgs[revisedOrderArray[6]]});
				$("#img6").css({"left":slide6left+"px", "top": slide6top+"px", "width": orgSlide6width+"px", "height": orgSlide6height+"px" });
			});
		}
		
		function moveSliderRight() {
			$("#img0").css({"position":"absolute"});
			$("#img0").animate({
				height: ($("#img0").height()*50),
				width: ($("#img0").width()*75),
				left: slide1left +'px',
				top: slide1top+"px"
			}, 500, function(){
				$("#img0").attr({"src": imgs[revisedOrderArray[0]]});
					$("#img0").css({"left":slide0left+"px", "top": slide0top+"px", "width": orgSlide0width+"px", "height": orgSlide0height+"px"});	
			});
			
			$("#img1").css({"position":"absolute"});
			$("#img1").animate({
				height: ($("#img1").height()*2),
				width: ($("#img1").width()*2),
				left: slide2left +'px',
				top: slide2top+"px"
			}, 500, function(){
				$("#img1").attr({"src": imgs[revisedOrderArray[1]]});
				$("#img1").css({"left":slide1left+"px", "top": slide1top+"px", "width": orgSlide1width+"px", "height": orgSlide1height+"px" });	
			});
			
			$("#img2").css({"position":"absolute"});
			$("#img2").animate({
				height: ($("#img2").height()*2),
				width: ($("#img2").width()*2),
				left: slide3left +'px',
				top: slide3top+"px"
			}, 500, function(){
				$("#img2").attr({"src": imgs[revisedOrderArray[2]]});
					$("#img2").css({"left":slide2left+"px", "top": slide2top+"px", "width": orgSlide2width+"px", "height": orgSlide2height+"px" });	
			});
			
			$("#img3").css({"position":"absolute"});
			$("#img3").animate({
				height: ($("#img3").height()*1/2),
				width: ($("#img3").width()*1/2),
				left: slide4left +'px',
				top: slide4top+"px"
			}, 500, function(){
				$("#img3").attr({"src": imgs[revisedOrderArray[3]]}); 
				$("#img3").css({"left":slide3left+"px", "top": slide3top+"px", "width": orgSlide3width+"px", "height": orgSlide3height+"px" });		
			});
			
			$("#img4").css({"position":"absolute"});
			$("#img4").animate({
				height: ($("#img4").height()*1/2),
				width: ($("#img4").width()*1/2),
				left: slide5left +'px',
				top: slide5top+"px"
			}, 500, function(){
				$("#img4").attr({"src": imgs[revisedOrderArray[4]]});
				$("#img4").css({"left":slide4left+"px", "top": slide4top+"px", "width": orgSlide4width+"px", "height": orgSlide4height+"px" });
			});
			
			$("#img5").css({"position":"absolute"});
			$("#img5").animate({
				height: "0px",
				width: "0px",
				left: slide6left+'px',
				top: slide6top+"px"
			}, 500, function(){
				$("#img5").attr({"src": imgs[revisedOrderArray[5]]});				
				$("#img5").css({"left":slide5left+"px", "top": slide5top+"px", "width": orgSlide5width+"px", "height": orgSlide5height+"px" });	
			});
			
			$("#img6").attr({"src": imgs[revisedOrderArray[6]]});
		}
		
		function order(row, column) {
			
			var initialval=0;
			var array = new Array();
			
			for (var i = 0;i<(row+column-1);i++) {
				array[i] = new Array();
				
				if (i!=0) {
					initialval = i;
				}
				
				if (i>=column) {
					for (var k = 0;k<(array[i-1].length-1);k++) {
						array[i][k] = array[i-1][k+1]+1;
					}	
				}else {
					for (var j = 0;j<(i+1);j++) {
						
						array[i][j] = initialval;
						if ((initialval+14)<(row*column)){
							initialval+=14;		
						}else {
							break;
						}
					}					
				}
			}
			return array;
		}
		
		function rotation(cnt) {
			
			if (degree[cnt]%180==20) {
				
				var counter = cnt +1;
				
				if (counter < res.length){
					begin[counter] = setInterval(function(){rotation(counter);},10);			
				}
			}
			
			if (((degree[cnt]+eachDeg)%360==0) || ((degree[cnt]+eachDeg)%360==180)) {
				
				degree[cnt]+=eachDeg;
				
				for (var i = 0;i<res[cnt].length; i++) {
					$("#c"+res[cnt][i]).css({"-webkit-transform": "rotateY("+(degree[cnt])+"deg)", "-moz-transform": "rotateY("+(degree[cnt])+"deg)", "-o-transform": "rotateY("+(degree[cnt])+"deg)", "-ms-transform": "rotateY("+(degree[cnt])+"deg)"});
					$("#b"+res[cnt][i]).css({"-webkit-transform": "rotateY("+(degree[cnt]+180)+"deg)", "-moz-transform": "rotateY("+(degree[cnt]+180)+"deg)", "-o-transform": "rotateY("+(degree[cnt]+180)+"deg)", "-ms-transform": "rotateY("+(degree[cnt]+180)+"deg)"});
				}
				
				clearInterval(begin[cnt]);

			}else {
				for (var i = 0;i<res[cnt].length; i++) {
					$("#c"+res[cnt][i]).css({"-webkit-transform": "rotateY("+(degree[cnt])+"deg)", "-moz-transform": "rotateY("+(degree[cnt])+"deg)", "-o-transform": "rotateY("+(degree[cnt])+"deg)", "-ms-transform": "rotateY("+(degree[cnt])+"deg)"});
					$("#b"+res[cnt][i]).css({"-webkit-transform": "rotateY("+(degree[cnt]+180)+"deg)", "-moz-transform": "rotateY("+(degree[cnt]+180)+"deg)", "-o-transform": "rotateY("+(degree[cnt]+180)+"deg)", "-ms-transform": "rotateY("+(degree[cnt]+180)+"deg)"});
				}		
			}
			degree[cnt]+=eachDeg;
		}
	});
</script>
</body>
</html>