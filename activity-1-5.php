
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
	<title>Activity 1-5 - CSS Tips & Tricks Practice</title>	
	<link rel="shortcut icon" href="https://cdn.shopify.com/s/files/1/1061/1924/products/Nail_Polish_Emoji_Icon_ios10_large.png?v=1542436027">
	<meta name="description" content="More about CSS">
	<meta name="author" content="M'name Andy">	
	
	<!-- styles - internal (not linked) -->
	<style>
		body {
			padding: 20px 20px 20px 20px;
			color: #333333;  /* font color */
			font-family: Calibri;
			/* css backgrounds...http://lea.verou.me/css3patterns/ */
			background-color: gray;
			background-image: linear-gradient(90deg, transparent 50%, rgba(255,255,255,.5) 50%);
			background-size: 50px 50px;
		}	
		a.teacher-button:link, a.teacher-button:visited , a.teacher-button:active {
			position: relative;
			display: inline-block;
			padding: 1%;
			margin: 2%; /* 2px around the outside of the link */
			background-image: linear-gradient(to top right, #f06d06, #ffffff);
			color: #333333;	
			font-size: 2.1em; /* 210% of normal size */
			text-decoration: none;  /* underline or none */
			font-family: Calibri;
			border-radius: 0 0.2em 0 0.2em; /*Top/Right/Botton/Left */
			-moz-border-radius: 0.3em 0.3em 0.3em 0.3em; 
			-webkit-border-radius: 0.3em 0.3em 0.3em 0.3em; 			
		}
		a.teacher-button:hover {
			background: #ffffff;
			color: #f06d06;
			box-shadow: 5px 5px 5px #222222;
			-webkit-box-shadow: 5px 5px 5px #222222;
			-moz-box-shadow: 5px 5px 5px #222222;
		}
		
		/* style the paragraph */
		p.norm {
			position: relative;
			display: inline-block;
			padding: 5px;
			background: #00d2d3;
			color: #ffffff;
		}
		h1.stink {
			position: relative;
			display: inline-block;
			padding: 30px;
			border-radius: 20px;
			background: #f368e0;
			color: #ffffff;
		}
		
		/* your button styles */
		a.my-button1:link, a.my-button1:visited , a.my-button1:active {
		background: #34d97b;
  		background-image: -webkit-linear-gradient(top, #34d97b, #2980b9);
  		background-image: -moz-linear-gradient(top, #34d97b, #2980b9);
  		background-image: -ms-linear-gradient(top, #34d97b, #2980b9);
  		background-image: -o-linear-gradient(top, #34d97b, #2980b9);
  		background-image: linear-gradient(to bottom, #34d97b, #2980b9);
  		-webkit-border-radius: 28;
  		-moz-border-radius: 28;
  		border-radius: 28px;
  		text-shadow: 1px 1px 3px #666666;
  		font-family: Futura;
  		color: #ceccff;
  		font-size: 24px;
  		padding: 20px 20px 20px 20px;
  		text-decoration: none;
		}
		a.my-button1:hover {
		background: #fcfc3c;
  		background-image: -webkit-linear-gradient(top, #fcfc3c, #3498db);
  		background-image: -moz-linear-gradient(top, #fcfc3c, #3498db);
  		background-image: -ms-linear-gradient(top, #fcfc3c, #3498db);
  		background-image: -o-linear-gradient(top, #fcfc3c, #3498db);
  		background-image: linear-gradient(to bottom, #fcfc3c, #3498db);
  		text-decoration: none;
		}
		a.my-button2:link, a.my-button2:visited , a.my-button2:active {
		background: #e8d73f;
  		background-image: -webkit-linear-gradient(top, #e8d73f, #f0af0c);
  		background-image: -moz-linear-gradient(top, #e8d73f, #f0af0c);
  		background-image: -ms-linear-gradient(top, #e8d73f, #f0af0c);
  		background-image: -o-linear-gradient(top, #e8d73f, #f0af0c);
  		background-image: linear-gradient(to bottom, #e8d73f, #f0af0c);
  		-webkit-border-radius: 7;
  		-moz-border-radius: 7;
  		border-radius: 7px;
  		text-shadow: 1px 1px 3px #b0aaa2;
  		font-family: Geneva;
  		color: #fafafa;
  		font-size: 20px;
  		padding: 10px 30px 10px 30px;
  		border: solid #f7f7f7 1px;
  		text-decoration: none;
		}
		a.my-button2:hover {
		background: #195c85;
  		background-image: -webkit-linear-gradient(top, #195c85, #7ea2ba);
  		background-image: -moz-linear-gradient(top, #195c85, #7ea2ba);
  		background-image: -ms-linear-gradient(top, #195c85, #7ea2ba);
  		background-image: -o-linear-gradient(top, #195c85, #7ea2ba);
  		background-image: linear-gradient(to bottom, #195c85, #7ea2ba);
  		text-decoration: none;
		}		
		a.my-button3:link, a.my-button3:visited , a.my-button3:active {
		background: #0b5a8f;
  		background-image: -webkit-linear-gradient(top, #0b5a8f, #4596c9);
  		background-image: -moz-linear-gradient(top, #0b5a8f, #4596c9);
  		background-image: -ms-linear-gradient(top, #0b5a8f, #4596c9);
  		background-image: -o-linear-gradient(top, #0b5a8f, #4596c9);
  		background-image: linear-gradient(to bottom, #0b5a8f, #4596c9);
 	 	-webkit-border-radius: 60;
 	 	-moz-border-radius: 60;
  		border-radius: 60px;
  		text-shadow: 1px 1px 3px #666666;
  		font-family: Trebuchet MS;
  		color: #ffffff;
  		font-size: 20px;
  		padding: 10px 20px 10px 20px;
  		border: solid #00314f 2px;
  		text-decoration: none;
		}
		a.my-button3:hover {
		background: #3494cf;
  		background-image: -webkit-linear-gradient(top, #3494cf, #3498db);
  		background-image: -moz-linear-gradient(top, #3494cf, #3498db);
  		background-image: -ms-linear-gradient(top, #3494cf, #3498db);
  		background-image: -o-linear-gradient(top, #3494cf, #3498db);
  		background-image: linear-gradient(to bottom, #3494cf, #3498db);
  		text-decoration: none;
		}		
	</style>
</head>
<body>
	<!-- main content -->
	<h1 class="stink">Styling Links &amp; Other Cool Stuff</h1>
	<p class="norm">In this activity you will create at least one other link style with a defined class.  From this point forward all of your links on your activities must be styled.  You may want to research other css properties to further understand the cool styles you can add.</p>
	<h2>Teacher's Link</h2>
	<a href="https://www.google.ca/maps" class="teacher-button">TEACHER'S LINK</a><br />
	
	<h2>My Links</h2>
	<a href="https://www.minecraft.net/en-us/" class="my-button1">Link 1</a>
	<br><br><br>
	<a href="https://en.wikipedia.org/wiki/Patella" class="my-button2">Link 2</a> 
	<br><br><br>
	<a href="https://icsprogramming.ca/2019-2020/zhen4d333/" class="my-button3">Return to Index Page</a> 
	<!-- /main content -->
	
	<!-- load jquery -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</body>
</html>
