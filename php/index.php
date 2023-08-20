<!DOCTYPE html>
<html>
<head>
	<title>
		PHP Include File
	</title>
	
<style type="text/css">
.blink_text {
-webkit-animation-name: blinker;
-webkit-animation-duration: 1s;
-webkit-animation-timing-function: linear;
-webkit-animation-iteration-count: infinite;

-moz-animation-name: blinker;
-moz-animation-duration: 1s;
-moz-animation-timing-function: linear;
-moz-animation-iteration-count: infinite;

 animation-name: blinker;
 animation-duration: 1s;
 animation-timing-function: linear;
 animation-iteration-count: infinite;

 color:black;
}

@-moz-keyframes blinker {  
 0% { opacity: 1.0; }
 50% { opacity: 0.0; }
 100% { opacity: 1.0; }
 }

@-webkit-keyframes blinker {  
 0% { opacity: 1.0; }
 50% { opacity: 0.0; }
 100% { opacity: 1.0; }
 }

@keyframes blinker {  
 0% { opacity: 1.0; }
 50% { opacity: 0.0; }
 100% { opacity: 1.0; }
 }
</style>
</head>

<body>
<center>
	<h1>
		Welcome!!! 
		<a href="http://www.sourcecodester.com/" style="text-decoration:none;">
			<b class="blink_text" style="color:blue;">
				To Sourcecodester.com
			</b>
		</a>
	</h1>
	<p style="color:black; font-size:18px;">
		Do you have source code, articles, tutorials, web links, <br />
		and books to share? You can write your own content here. <br />
		You can even have your own blog. 
	</p>
</center>

<?php include('footer.php'); ?>

</body>

</html>