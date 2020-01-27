<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Crazy Cats - Lesson Evaluation</title>
		<meta name="author" content="Andy Zhen">
		<meta name="description" content="Some cool crazy cats.">
		<link rel="shortcut icon" href="https://cdn.shopify.com/s/files/1/1061/1924/products/Smiling_Cat_Emoji_Icon_d84dab9b-e144-4e75-a859-5442a109e95b_large.png?v=1542436013">
		<link href="https://fonts.googleapis.com/css?family=Tajawal&display=swap" rel="stylesheet">
		<style>
			html {
			  background: url(http://getwallpapers.com/wallpaper/full/e/1/2/41252.jpg) no-repeat center center fixed; 
			  -webkit-background-size: cover;
			  -moz-background-size: cover;
			  -o-background-size: cover;
			  background-size: cover;
			  font-family: 'Tajawal', sans-serif;
			}
			.content {
				background-color: white;
				border-radius: 0.5em;
				border: 1px solid black;
				width: 70%;
				margin: auto;
				padding: 15px;
				text-align: center;
				font-size: 1.6em;
				opacity: 0.95;
			}
			a:link, a:active, a:visited {
				text-decoration: underline;
				color: #333333;
			}
			a:hover {
				color: #999999;
				text-decoration: underline;
			}
			h2.error {
				color: #ff0000;
				font-size: 18px;
			}	
			h1 {
				color: #003366;
			}
			input, select {
				margin-top: 20px;
				margin-bottom: 20px;
			}
			.inputfields {
				font-size: 18px;
				padding: 3px;
				border: 2px solid #75149c;
				background-color: #d7a1ed;
				font-family: 'Tajawal', sans-serif;
			}
			hr {
				border-top: 3px dashed purple;
			}
			.backarrow {
				text-align: center;
				margin: auto;
			}
			.button {
				border: 2px solid #8d58a3;
				background-color: #daa0f2;
				font-size: 24px;
				border-radius: 0.4em;
				font-family: 'Tajawal', sans-serif;
				padding-top: 10px;
			}
			.button:hover {
				border: 2px solid #8d58a3;
				background-color: #b8a84f;
				font-size: 24px;
				border-radius: 0.4em;
				font-family: 'Tajawal', sans-serif;
				padding-top: 10px;
			}
			.image {
				height: 350px;
			}
		</style>
	</head>
	<body>
		<div class="content">
			<h1><u>Crazy Cats!</u></h1>
			<hr width="90%">
			<form action="crazy-cats.php" name="catinput" method="post">
				<label>Cat colour: </label>
				<select name="colour" class="inputfields">
					<option>Black</option>
					<option>White</option>
					<option>Orange</option>
					<option>Brown</option>
					<option>Gray</option>
				</select><br>
				<label>Mass of cat: </label>
				<input type="text" name="mass" placeholder="Cat Mass (kg)" class="inputfields"> kg<br>
				<label>Name of cat: </label>
				<input type="text" name="name" placeholder="Cat Name" class="inputfields"><br>
				<input type="submit" name="subBtn" value="Submit" class="button">
			</form>
			<hr width="90%">
			<?
				$colour = $_POST['colour'];
				$mass = $_POST['mass'];
				$name = $_POST['name'];

				if ($_POST['subBtn'] and $mass != 0) {
					echo "<h3>This is your cat, \"<u>" . $name . "</u>\".</h3>";
					echo "It weighs " . $mass . "kg.<br>";
				}

				switch ([$colour, $mass]) {
					case ($colour != "" and $mass <= 0):
						echo "<h2 class='error'>INVALID. (bruh, your cat has gotta be breaking some sort of scientific law if it doesn't have any mass[or a negative one for that matter]).</h2><hr width='90%'>";
						break;
					case ($colour =="Black" and $mass > 0 and $mass <= 2.5):
						echo "<img class='image' src='https://i.pinimg.com/originals/f5/e3/22/f5e32246424a2f490a18c924c6e113b1.jpg'><br>What a 'lil guy! <hr width='90%'>";
						break;
					case ($colour =="Black" and $mass > 2.5 and $mass <= 5):
						echo "<img class='image' src='https://previews.123rf.com/images/evdoha/evdoha1302/evdoha130200082/17976105-black-and-white-skinny-old-cat.jpg'><br>Small, but healthy... <hr width='90%'>";
						break;
					case ($colour =="Black" and $mass > 5 and $mass <= 10):
						echo "<img class='image' src='https://i1.wp.com/metro.co.uk/wp-content/uploads/2018/10/sei_37091096-2d31.jpg?quality=90&strip=all&zoom=1&resize=644%2C483&ssl=1'><br>Getting a little heavy, I think! <hr width='90%'>";
						break;
					case ($colour =="Black" and $mass > 10 and $mass <= 15):
						echo "<img class='image' src='https://cf.ltkcdn.net/cats/images/std/245861-675x450-black-cat-close-up-sitting.jpg'><br>Sure is a chunky boy! <hr width='90%'>";
						break;
					case ($colour =="Black" and $mass > 15 and $mass <= 20):
						echo "<img class='image' src='https://media.istockphoto.com/photos/fat-black-dog-sitting-on-brick-block-floor-picture-id1131741622'><br>Are you sure this is a cat???? <hr width='90%'>";
						break;
					case ($colour =="Black" and $mass > 20):
						echo "<img class='image' src='https://previews.123rf.com/images/evdoha/evdoha1603/evdoha160300352/57532824-fat-black-cat-with-green-eyes-.jpg'><br>Look at this dude... He really is a <i>fat</i> cat. <hr width='90%'>";
						break;
					case ($colour =="White" and $mass > 0 and $mass <= 2.5):
						echo "<img class='image' src='https://www.pets4homes.co.uk/images/articles/3673/large/white-cats-and-superstitions-57cc64ef778a6.jpg'><br>What a 'lil guy! <hr width='90%'>";
						break;
					case ($colour =="White" and $mass > 2.5 and $mass <= 5):
						echo "<img class='image' src='https://www.warrenphotographic.co.uk/photography/bigs/03596-White-cat-white-background.jpg'><br>Small, but healthy... <hr width='90%'>";
						break;
					case ($colour =="White" and $mass > 5 and $mass <= 10):
						echo "<img class='image' src='https://swiftype-ss.imgix.net/https%3A%2F%2Fcdn.petcarerx.com%2FLPPE%2Fimages%2Farticlethumbs%2FWhy-Are-Some-White-Cats-Deaf-Small.jpg?ixlib=rb-1.1.0&h=320&fit=clip&dpr=2.0&s=a5c5d32ccc6723ef2bce6faadcfda7e7'><br>Getting a little heavy, I think! <hr width='90%'>";
						break;
					case ($colour =="White" and $mass > 10 and $mass <= 15):
						echo "<img class='image' src='https://t1.ea.ltmcdn.com/en/images/1/7/1/20_white_cat_breeds_full_list_3171_600.jpg'><br>Sure is a chunky boy! <hr width='90%'>";
						break;
					case ($colour =="White" and $mass > 15 and $mass <= 20):
						echo "<img class='image' src='https://images-na.ssl-images-amazon.com/images/I/61wSPkwhEYL._SL1500_.jpg'><br>Are you sure this is a cat???? <hr width='90%'>";
						break;
					case ($colour =="White" and $mass > 20):
						echo "<img class='image' src='https://live.staticflickr.com/3379/3629117128_41e7d3d2ff_b.jpg'><br>You're going to need another job to feed this thing! <hr width='90%'>";
						break;
					case ($colour =="Orange" and $mass > 0 and $mass <= 2.5):
						echo "<img class='image' src='https://previews.123rf.com/images/cristiandxb/cristiandxb1508/cristiandxb150800351/44404170-long-legs-skinny-arabian-orange-cat.jpg'><br>What a 'lil guy! <hr width='90%'>";
						break;
					case ($colour =="Orange" and $mass > 2.5 and $mass <= 5):
						echo "<img class='image' src='https://cdn0.wideopenpets.com/wp-content/uploads/2018/01/Im-a-doggo-1-770x405.jpg'><br>Small, but healthy... <hr width='90%'>";
						break;
					case ($colour =="Orange" and $mass > 5 and $mass <= 10):
						echo "<img class='image' src='https://www.animalleague.org/wp-content/uploads/2019/07/three_cat_in_home.jpg'><br>Getting a little heavy, I think! <hr width='90%'>";
						break;
					case ($colour =="Orange" and $mass > 10 and $mass <= 15):
						echo "<img class='image' src='https://ichef.bbci.co.uk/news/624/media/images/80000000/jpg/_80000967_zz8.jpg'><br>Sure is a chunky boy! <hr width='90%'>";
						break;
					case ($colour =="Orange" and $mass > 15 and $mass <= 20):
						echo "<img class='image' src='https://upload.wikimedia.org/wikipedia/en/thumb/b/bc/Garfield_the_Cat.svg/1200px-Garfield_the_Cat.svg.png'><br>We need more LASAGNA!<hr width='90%'>";
						break;
					case ($colour =="Orange" and $mass > 20):
						echo "<img class='image' src='https://www.dw.com/image/44286113_401.jpg'><br>You're going to need another job to feed this thing, Jon Arbuckle!<br><i>Also, is anyone else terrified of CGI Garfield?</i><hr width='90%'>";
						break;
					case ($colour =="Brown" and $mass > 0 and $mass <= 2.5):
						echo "<img class='image' src='https://www.coopsandcages.com.au/blog/oe-content/uploads/2014/01/1-Cat-Abyssinian.jpg'><br>What a 'lil guy! <hr width='90%'>";
						break;
					case ($colour =="Brown" and $mass > 2.5 and $mass <= 5):
						echo "<img class='image' src='https://www.catster.com/wp-content/uploads/2018/09/Brown-tabby-cat-full-body.jpg'><br>Small, but healthy... <hr width='90%'>";
						break;
					case ($colour =="Brown" and $mass > 5 and $mass <= 10):
						echo "<img class='image' src='https://vetstreet-brightspot.s3.amazonaws.com/24/274960a33a11e087a80050568d634f/file/Havana-3-645mk062311.jpg'><br>Getting a little heavy, I think! <hr width='90%'>";
						break;
					case ($colour =="Brown" and $mass > 10 and $mass <= 15):
						echo "<img class='image' src='https://previews.123rf.com/images/adiruch/adiruch1802/adiruch180200185/96175923-fat-brown-cat-in-a-relax-mode-sitting-on-the-floor.jpg'><br>Sure is a chunky boy! <hr width='90%'>";
						break;
					case ($colour =="Brown" and $mass > 15 and $mass <= 20):
						echo "<img class='image' src='https://ih0.redbubble.net/image.893361643.4979/poster,840x830,f8f8f8-pad,750x1000,f8f8f8.jpg'><br>Are you sure this is a cat???? <hr width='90%'>";
						break;
					case ($colour =="Brown" and $mass > 20):
						echo "<img class='image' src='http://www.vancouversun.com/cms/binary/8949315.jpg'><br>You're going to need another job to feed this thing!<br><hr width='90%'>";
						break;
					case ($colour =="Gray" and $mass > 0 and $mass <= 2.5):
						echo "<img class='image' src='https://i.kym-cdn.com/entries/icons/original/000/017/076/Cat_theme_1.jpg'><br>What a 'lil guy! <hr width='90%'>";
						break;
					case ($colour =="Gray" and $mass > 2.5 and $mass <= 5):
						echo "<img class='image' src='https://dl5zpyw5k3jeb.cloudfront.net/photos/pets/42136671/3/?bust=1531188177'><br>Small, but healthy... <hr width='90%'>";
						break;
					case ($colour =="Gray" and $mass > 5 and $mass <= 10):
						echo "<img class='image' src='http://www.theultimatecatwebsite.com/uploads/1/1/0/8/11083235/741647_orig.jpg'><br>Getting a little heavy, I think! <hr width='90%'>";
						break;
					case ($colour =="Gray" and $mass > 10 and $mass <= 15):
						echo "<img class='image' src='https://i.pinimg.com/originals/fd/96/05/fd9605691e05090ffbc9c6a893a7d72b.jpg'><br>Sure is a chunky boy! <hr width='90%'>";
						break;
					case ($colour =="Gray" and $mass > 15 and $mass <= 20):
						echo "<img class='image' src='https://cdn.abcotvs.com/dip/images/3987402_081718-wls-fat-cat-10p-vid.jpg?w=800&r=16%3A9'><br>Are you sure this is a cat???? <hr width='90%'>";
						break;
					case ($colour =="Gray" and $mass > 20):
						echo "<img class='image' src='https://external-preview.redd.it/WCkkeYxTC38KQqY4t4gy7WZg422TWUuIljQ8xO7vrWA.jpg?auto=webp&s=534f7cd8c10b7a99d9a4eec788ce767fa00c3bff'><br>You're going to need another job to feed this thing!<br><hr width='90%'>";
						break;
					default:
						echo "";
				}

			?>
			<div class="backarrow"><a href="https://icsprogramming.ca/2019-2020/zhen4d333/"><img src="https://icsprogramming.ca/2019-2020/zhen4d333/images/back.png" height="100px" alt="Back to Index Page (this image is not displaying because of an error)."></a></div>
		</div>
	</body>
</html>