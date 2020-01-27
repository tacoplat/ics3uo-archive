
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">	
	<title>Activity 1-6 - Learning how to use Animate.css</title>	
	<meta name="description" content="Learning how to use animate.css">
	<meta name="author" content="Andy">	
	<link rel="shortcut icon" href="https://www.sccpre.cat/mypng/detail/39-391459_joy-android-crying-laughing-emoji.png">
	<link rel="stylesheet" href="animate.css">
	<style>
	body {
		background: url("http://wallpapercave.com/wp/rlyvfvI.jpg");
		background-size: cover;
	}
	.myPara {
		position: relative;
		display: inline-block;
		padding: 20px;
		background: rgba(255,255,255,0.8);
		border-radius: 0.5em;
		font-size: 1.2em;
		color: #333333;
	}
	h1 {
		color: #ff9966;
	}
	h2 {
		color: #999999;
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
  		position: relative;
  		display: inline-block;
		}
		a.my-button3:hover {
		background: #3494cf;
  		background-image: -webkit-linear-gradient(top, #3494cf, #3498db);
  		background-image: -moz-linear-gradient(top, #3494cf, #3498db);
  		background-image: -ms-linear-gradient(top, #3494cf, #3498db);
  		background-image: -o-linear-gradient(top, #3494cf, #3498db);
  		background-image: linear-gradient(to bottom, #3494cf, #3498db);
  		text-decoration: none;
  		position: relative;
  		display: inline-block;
		}		
	</style>
</head>
<body>
	<!-- main content -->

	<h1 class="animated zoomInUp">Using Animate.css</h1>
	<h2 class="animated bounceInRight">Lorem ipsum dolor</h2>
	<p class="myPara animated heartBeat">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac blandit ex. Donec vitae massa libero. Curabitur ac mi rhoncus, mattis urna ut, pretium arcu. Donec consequat elit magna, nec pellentesque leo consequat sed. Sed consequat a libero vitae gravida. Suspendisse ut blandit massa, sed faucibus arcu. Pellentesque enim ligula, interdum efficitur nulla sed, vulputate volutpat tellus. Vestibulum non purus risus.</p>
	<p class="myPara animated jello">That feeling when the saints go marching in</p>
	<br>
	<a href="https://icsprogramming.ca/2019-2020/zhen4d333/activity-1-6.php" class="myPara animated bounceIn">Refresh</a>
	<br>
	<br>
	<br>
	<a href="https://icsprogramming.ca/2019-2020/zhen4d333/" class="my-button3 animated rubberBand">Return to Index Page</a> 

	<!-- end main content -->	
	<!-- load jquery -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</body>
</html>
