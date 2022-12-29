<html>
<head>
<title>Rotate</title>
<style>
h1 {  font-family: Helvetica, Arial, sans-serif;  text-align: center; font-size:46px; margin-top:20px; color:#000000;
	  text-shadow: 2px 2px 0px rgba(255,255,255,.7), 5px 7px 0px rgba(0, 0, 0, 0.1); 
}
.border{width:640px; height:auto; margin:auto}
.autorotate{
	width:96.5%;
	display:block;
	padding:5px;
	background-color:LightPink;
	color:#fafafa;
	text-decoration:none;
	text-transform:uppercase;
	text-align:center;
}
p{
	text-align:center;
	font-size:18px;
	color:#fafafa;
}
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="rotate.js"></script>
</head>
<body style="background-color: AntiqueWhite;">
<h1>Sneakers</h1>
<div class="border">	
		<script language="javascript">
		$(window).load(function(){
		$("#view360").rotate({imageDir:'360',imageCount:34,imageExt:'gif',canvasID:'mycar',canvasWidth:640,canvasHeight:480,autoRotate:false});
		});
		</script>
        <div id="view360">
		<a href="#" class="autorotate">Auto rotate</a>
		</div>
		
</div>		
</body>
</html>