<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Choose Your Own Adventure</title>
		<link rel="shortcut icon" href="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/160/emojipedia/61/egg_1f95a.png">
		<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
		<meta charset="utf-8">
		<meta name="author" content="Andy Zhen">
		<meta name="description" content="A PHP-based CYOA Game.">
		<style>
			html { 
			  background: url(https://gallery.yopriceville.com/var/albums/Backgrounds/Autumn_Landscape_Background.jpg?m=1442666745) no-repeat center center fixed; 
			  -webkit-background-size: cover;
			  -moz-background-size: cover;
			  -o-background-size: cover;
			  background-size: cover;
			}
			body {
				text-align: center;
				padding: 20px;
				line-height: 1.05em;
				font-family: 'Quicksand', sans-serif;
			}
			h2 {
				font-size: 18px;
			}
			.choiceimg {
				width: 300px;
				height: 180px;
			}
			p {
				margin-left: 10%;
				margin-right: 10%;
			}
			a, a:visited {
				color: #52527a;
				text-transform: uppercase;
				text-decoration: none;
			}
			a:hover {
				color: #cccc00;
				text-transform: uppercase;
			}
			.gameover {
				color: red;
				font-size: 20px;
			}
			.ending {
				color: lightseagreen;
				font-size: 20px;
			}
			.container {
				background-color: white;
				border-radius: 0.5em;
				width: 70%;
				margin: auto;
				padding: 25px 0;
				clear: both;
				border: 1px solid black;
			}
			.clear {
				clear: both;
			}
			.left {
				float: left;
				padding: 20px;
				margin-left: 10%;
				margin-bottom: 4px;
			}
			.right {
				float: right;
				padding: 20px;
				margin-right: 10%;
				margin-bottom: 4px;
			}
			.left:hover, .right:hover {
				background-color: plum;
				border-radius: 0.4em;
			}
			@media screen and (max-width: 1271px) {
				.left {
					float: none;
					text-align: center;
					margin-left: 0;
					margin-bottom: 20px;
				}
				.right {
					float: none;
					text-align:center;
					margin-right: 0;
					margin-bottom: 16px;
				}
			}
			.group:before,
			.group:after {
			  content: "";
			  display: table;
			}
			.group:after {
			  clear: both;
			}
			.group {
			  clear: both;
			  *zoom: 1;
			}
			.backarrow {
			position: absolute;
			top: 20px;
			left: 20px;
		}
		</style>
	</head>
	<body>
		<a href="https://icsprogramming.ca/2019-2020/zhen4d333/" class="backarrow"><img src="https://icsprogramming.ca/2019-2020/zhen4d333/images/back.png" height="100px" alt="Back to Index Page (this image is not displaying because of an error)."></a>
		<div class="container">
			<h1><u>Getting Eggs</u></h1>
			<h2>A Text-Based Choose Your Own Adventure Game</h2>
			<hr size="2">
			<a href="choose-your-adventure.php">Restart Game</a><br><br>
			<?
				$option = $_GET['option'];
				if ($option == "") {
					echo "<img src='https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fimg1.cookinglight.timeinc.net%2Fsites%2Fdefault%2Ffiles%2Fstyles%2Fmedium_2x%2Fpublic%2Fimage%2F2017%2F01%2Fmain%2Fpristine-sunny-side-up-eggs.jpg%3Fitok%3Dm7JG2Y8j&w=450&c=sc&poi=face&q=85' alt='fried egg' class='choiceimg'><p>You wake up feeling refreshed after a long nap. As you leave your room, you begin to feel famished. 'Wow, I could really go for a delicious sunny-side-up egg right now', you say to yourself. You walk through your front door, lock it and depart on your journey.</p><br>
					<div class='group'>
					<div class='left'><a href='choose-your-adventure.php?option=c4ca4238a0b923820dcc509a6f75849b'><img src='https://www.sbs.com.au/topics/sites/sbs.com.au.topics/files/styles/full/public/gettyimages-78616903.jpg?itok=vpRKMrOO&mtime=1502951087' class='choiceimg'><br><br>Walk to the grocery store.</a></div>
					<div class='right'><a href='choose-your-adventure.php?option=c81e728d9d4c2f636f067f89cc14862c'><img src='https://cdn.cnn.com/cnnnext/dam/assets/181126144412-04-gm-car-models-112618-exlarge-169.jpg' class='choiceimg'><br><br>Drive to the grocery store.</a></div></div>";
				} else if ($option == "c4ca4238a0b923820dcc509a6f75849b") {
					echo "<img src='https://ak7.picdn.net/shutterstock/videos/11703977/thumb/2.jpg' alt='pedestrian crossing' class='choiceimg'><p>You approach an intersection. There is only a couple seconds left to cross. There seems to be no cars approaching anywhere in sight. Will you cross immediately, or wait for the next walking signal?</p><br>
					<div class='group'>
					<div class='left'><a href='choose-your-adventure.php?option=eccbc87e4b5ce2fe28308fd9f2a7baf3'><img src='https://content.active.com/Assets/Active.com+Content+Site+Digital+Assets/Running/Galleries/Run+Faster+With+Less+Work/Carousel.jpg' class='choiceimg'><br><br>Sprint across the road.</a></div>
					<div class='right'><a href='choose-your-adventure.php?option=a87ff679a2f3e71d9181a67b7542122c'><img src='https://previews.123rf.com/images/nilswey/nilswey1503/nilswey150300229/37717448-confident-attractive-middle-aged-man-standing-waiting-in-a-rural-lane-with-folded-arms-looking-to-th.jpg' class='choiceimg'><br><br>Wait for the next crossing light.</a></div></div>";
				} else if ($option == "c81e728d9d4c2f636f067f89cc14862c") {
					echo "<img src='https://static.pakwheels.com/2018/02/2386f221-08d2-401c-ba7d-554b57d79c9e-640x360.jpg' alt='gaslight indicator' class='choiceimg'><p>You get into your car. After driving a kilometer, you realize that your gas light indicator is on. You don't know how long it has been on for, because you have very poor observational skills. Will you pull into a gas station, or continue your journey to the grocery store?</p><br>
					<div class='group'>
					<div class='left'><a href='choose-your-adventure.php?option=e4da3b7fbbce2345d7772b0674a318d5'><img src='https://www.immigrant-education.ca/wp-content/uploads/2017/11/gas-station-1161871_960_720-960x600.jpg' class='choiceimg'><br><br>Find a gas station.</a></div>
					<div class='right'><a href='choose-your-adventure.php?option=1679091c5a880faf6fb5e6087eb1b2dc'><img src='https://storage.googleapis.com/kx-live-ih/images/driving_on_a_bridge-min.2e16d0ba.fill-800x450.jpg' class='choiceimg'><br><br>Keep driving.</a></div></div>";
				} else if ($option == "eccbc87e4b5ce2fe28308fd9f2a7baf3") {
					echo "<img src='https://image.shutterstock.com/image-photo/man-that-texting-while-driving-260nw-297577553.jpg' alt='hit by car' class='choiceimg'><p>As you move across the intersection, a car suddenly comes out of nowhere and hits you. Maybe next time, you should be a safer, law-abiding citizen.</p><p class='gameover'>GAME OVER.</p>";
				} else if ($option == "a87ff679a2f3e71d9181a67b7542122c") {
					echo "<img src='https://previews.123rf.com/images/tigerbarb/tigerbarb1401/tigerbarb140100003/24826362-group-of-canada-geese.jpg' alt='goose swarm' class='choiceimg'><p>After crossing the intersection, you pass by a swarm of Canadian geese. Will you get closer to look at them, or continue on your journey?</p><br>
					<div class='group'>
					<div class='left'><a href='choose-your-adventure.php?option=8f14e45fceea167a5a36dedd4bea2543'><img src='https://i.ytimg.com/vi/pKRKq829x5M/maxresdefault.jpg' class='choiceimg'><br><br>Approach the geese.</a></div>
					<div class='right'><a href='choose-your-adventure.php?option=c9f0f895fb98ab9159f51fd0297e236d'><img src='https://c.pxhere.com/photos/0a/6d/walking_man_pathway_footpath_walk_male_person-1007311.jpg!d' class='choiceimg'><br><br>Keep walking.</a></div></div>";
				} else if ($option == "e4da3b7fbbce2345d7772b0674a318d5") {
					echo "<img src='https://media.angieslist.com/s3fs-public/styles/widescreen_large/s3/s3fs-public/fuelgrades.jpg?itok=1v8a4Ms9' alt='gas quality' class='choiceimg'><p>You find a gas station on the side of the road. Will you fill up your car with regular gas, or will you splurge on some premium gas (as a flex)?</p><br>
					<div class='group'>
					<div class='left'><a href='choose-your-adventure.php?option=45c48cce2e2d7fbdea1afc51c7c6ad26'><img src='https://zahlenparty.de/wp-content/uploads/87.jpg' class='choiceimg'><br><br>Regular (87) gas.</a></div>
					<div class='right'><a href='choose-your-adventure.php?option=d3d9446802a44259755d38e6d163e820'><img src='http://cliparts.co/cliparts/di9/rGd/di9rGdX5T.jpg' class='choiceimg'><br><br>Supreme (93) gas.</a></div></div>";
				} else if ($option == "1679091c5a880faf6fb5e6087eb1b2dc") {
					echo "<img src='https://www.billingsparks.org/wp-content/uploads/PRPL-Homepage.jpg' alt='park' class='choiceimg'><p>On your way to the grocery store, you see a park coming up to the right. It looks pretty fun. Will you stop at the park, or keep going?</p><br>
					<div class='group'>
					<div class='left'><a href='choose-your-adventure.php?option=6512bd43d9caa6e02c990b0a82652dca'><img src='https://th.thgim.com/migration_catalog/article11895226.ece/alternates/FREE_660/DE05_PG2_4-COL_CHILDREN_AT_A_PUBLIC_PARK_IN_DELHI' class='choiceimg'><br><br>Stop and go play in the park.</a></div>
					<div class='right'><a href='choose-your-adventure.php?option=c20ad4d76fe97759aa27a0c99bff6710'><img src='https://storage.googleapis.com/kx-live-ih/images/driving_on_a_bridge-min.2e16d0ba.fill-800x450.jpg' class='choiceimg'><br><br>Keep driving.</a></div></div>";
				} else if ($option == "8f14e45fceea167a5a36dedd4bea2543") {
					echo "<img src='https://i.ytimg.com/vi/XS4edlvY-ks/maxresdefault.jpg' alt='goose attack' class='choiceimg'><p>The geese attack you. What were you honestly thinking? These devilish creatures are literally KNOWN to attack passerbys.</p><p class='gameover'>GAME OVER.</p>";
				} else if ($option == "c9f0f895fb98ab9159f51fd0297e236d") {
					echo "<img src='https://media.istockphoto.com/photos/green-whole-foods-market-grocery-store-sign-on-exterior-building-in-picture-id855657110?k=6&m=855657110&s=612x612&w=0&h=TNDD4t0V3hnbA6yky27QPiJCZEijWaJY-s2Iypluk1g=' alt='whole foods' class='choiceimg'><p>Cool, you've made it to the grocery store. Will you go straight to get eggs, or will you check out the bakery section?</p><br>
					<div class='group'>
					<div class='left'><a href='choose-your-adventure.php?option=c51ce410c124a10e0db5e4b97fc2af39'><img src='https://i.pinimg.com/originals/61/f7/28/61f728cc866f90e864b8fed72c1cc9d8.jpg' class='choiceimg'><br><br>Check out the bakery.</a></div>
					<div class='right'><a href='choose-your-adventure.php?option=aab3238922bcc25a6f606eb525ffdc56'><img src='https://cdn-image.myrecipes.com/sites/default/files/field%252Fimage%252Feggs-refrigerator.jpg' class='choiceimg'><br><br>Get your eggs.</a></div></div>";
				} else if ($option == "45c48cce2e2d7fbdea1afc51c7c6ad26") {
					echo "<img src='https://storage.googleapis.com/kx-live-ih/images/driving_on_a_bridge-min.2e16d0ba.fill-800x450.jpg' alt='driving' class='choiceimg'><p>You're almost at the grocery store. You're driving, when there is a split in the road. Will you turn left, or continue straight?</p><br>
					<div class='group'>
					<div class='left'><a href='choose-your-adventure.php?option=9bf31c7ff062936a96d3c8bd1f8f2ff3'><img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQw-fnrZETKnjEaXtnnXS-X1UWUV5GTphCMh6eWpJlIGtq36wj2vw' class='choiceimg'><br><br>Turn left.</a></div>
					<div class='right'><a href='choose-your-adventure.php?option=c74d97b01eae257e44aa9d5bade97baf'><img src='http://www.clker.com/cliparts/4/e/8/d/1194989165457297198aiga_up_arrow1.svg.med.png' class='choiceimg'><br><br>Continue forwards.</a></div></div>";
				} else if ($option == "d3d9446802a44259755d38e6d163e820") {
					echo "<img src='https://previews.123rf.com/images/mraoraor/mraoraor1706/mraoraor170600046/80373841-man-hand-open-an-empty-wallet-isolated-on-white-background-with-clipping-path.jpg' alt='no money :(' class='choiceimg'><p>You arrive at the grocery store. After you grab the eggs you came to buy, you take out your wallet. Uh oh, it's empty. Then, you remember. You splurged on premium gas. You start crying.</p><p class='gameover'>GAME OVER</p>";
				} else if ($option == "6512bd43d9caa6e02c990b0a82652dca") {
					echo "<img src='https://i.pinimg.com/originals/9b/6e/9e/9b6e9e9c608e6148a46235eb1b10420c.jpg' alt='pretty park' class='choiceimg'><p>You stop and play at the park for a while. The scenery is pretty cool. Wait look! There's a carton of eggs on the grass over there. It seems to be your lucky day!</p><p class='ending'>YOU WIN. Well, sort of...</p>";
				} else if ($option == "c20ad4d76fe97759aa27a0c99bff6710") {
					echo "<img src='https://i.dailymail.co.uk/i/pix/2015/08/27/00/009FD3D900000578-0-image-a-43_1440632226980.jpg' alt='out of fuel :(' class='choiceimg'><p>Oh no. You've run out of fuel. You realize you'll never get your eggs. It's just not meant to be.</p><p class='gameover'>GAME OVER</p>";
				} else if ($option == "c51ce410c124a10e0db5e4b97fc2af39") {
					echo "<img src='https://omgitsglutenfree.com/wp-content/uploads/2018/05/BREAD-LOAF-1_1500x1500.jpg' alt='loaf of bread' class='choiceimg'><p>After browsing the beautifully-scented bakery, you pick out an alluring loaf of bread. You take it to the checkout, and pay for it. It's not until you're halfway home unitl you realize you forgot the eggs.</p><p class='ending'>I mean, at least you got a loaf of bread. GAME OVER? I'm not completely sure.</p>";
				} else if ($option == "aab3238922bcc25a6f606eb525ffdc56") {
					echo "<img src='https://c8.alamy.com/comp/F731K6/cartons-of-eggs-on-sale-in-a-supermarket-in-new-york-on-tuesday-november-F731K6.jpg' alt='egg carton' class='choiceimg'><p>You walk into the egg aisle. What a pleasant surprise. They're on sale.</p><p class='ending'>YOU WIN!</p>";
				} else if ($option == "9bf31c7ff062936a96d3c8bd1f8f2ff3") {
					echo "<img src='https://i.pinimg.com/originals/9d/a5/3d/9da53d4d292c0f2d76c809ac5367f0e0.jpg' alt='posh whole foods' class='choiceimg'><p>Awesome! You've made it to the grocery store. Will you go towards the fishy-smelling seafood department, or straight to the egg aisle?</p><br>
					<div class='group'>
					<div class='left'><a href='choose-your-adventure.php?option=70efdf2ec9b086079795c442636b55fb'><img src='http://www.shopmetcalfes.com/images/seafood-main.jpg' class='choiceimg'><br><br>Check out seafood.</a></div>
					<div class='right'><a href='choose-your-adventure.php?option=6f4922f45568161a8cdf4ad2299f6d23'><img src='https://cdn-image.myrecipes.com/sites/default/files/field%252Fimage%252Feggs-refrigerator.jpg' class='choiceimg'><br><br>Straight to the egg aisle.</a></div></div>";
				} else if ($option == "c74d97b01eae257e44aa9d5bade97baf") {
					echo "<img src='https://pittsburgh.cbslocal.com/wp-content/uploads/sites/15909642/2019/08/route-8-accident.jpg' alt='car crash :(' class='choiceimg'><p>Unfortunately, out of pure coincedence, a bad driver crashes into your car.</p><p class='gameover'>GAME OVER</p>";
				} else if ($option == "70efdf2ec9b086079795c442636b55fb") {
					echo "<img src='https://i.pinimg.com/originals/90/0a/23/900a23b11044d49437145ea2ba874413.jpg' alt='grocery store samples' class='choiceimg'><p>On you way to the seafood department, you come across a sample. I mean, who wouldn't take a FREE sample?</p><br><a href='choose-your-adventure.php?option=1f0e3dad99908345f7439f8ffabdffc4'><img src='https://www.sld.com/wp-content/uploads/2018/02/1280-x-480-Do-samples-drive-sales.jpg' class='choiceimg'><br>Take the sample.</a>";
				} else if ($option == "6f4922f45568161a8cdf4ad2299f6d23") {
					echo "<img src='https://data.thefeedfeed.com/recommended/posts-8285847.jpg' alt='EGGS' class='choiceimg'><p>Congratulations. You successfully purchased eggs, and created a delicious meal to satisfy your cravings.</p><p class='ending'>YOU WIN!</p>";
				} else if ($option == "1f0e3dad99908345f7439f8ffabdffc4") {
					echo "<img src='https://images2.minutemediacdn.com/image/upload/c_fill,g_auto,h_1248,w_2220/f_auto,q_auto,w_1100/v1555284958/shape/mentalfloss/istock-518324408-primary.jpg' alt='choking' class='choiceimg'><p>Oh no! The sample gets lodged in your throat. You can't breathe. Why isn't anyone doing anything to help you? HELP! It's over. It's too late now. Your life is flashing before your eyes. You try and save yourself to no avail. Everything begins to turn dark.</p><p class='gameover'>GAME OVER</p>";
				} else {
					echo "<p>Hey, how'd you get here? Wait, that's illegal!</p>";
				}
			?>
		</div>
		<div class="clear"></div>
	</body>
</html>