<!DOCTYPE html>

<!-- TO DO... -->
	<!-- FIX REGISTER PAGE -->
	
	<!-- SCROLL THRU 6 PICTURES -->
	<!-- FADE-IN LOGO ON MAIN PAGE ONLY -->
	<!-- HOVER OVER FOR IMAGE LINKS, ENLARGE, SHOW GRAY OPACITY, THAT IT'S A LINK -->
	
	<!-- HOW TO ADD REFERENCES, FOR IMAGES COPIED? -->

<html>
	<head>	
		<meta charset="UTF-8"/>
		<meta name="Description" content="Travel Agency Project - Home"/>
		<meta name="Keywords" content="travel, destination, html, css, php">
		<meta name="Author" content="Dean Jones"/>
		<meta name="Date" content="Oct.27, 2016"/>
		
		<!-- W3SCHOOLS ANIMATION -->
<!-- 		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css"> -->
		
		<!-- <link rel="stylesheet" type="text/css" href="reset.css"> -->		<!-- RESET CSS -->
		<link rel="stylesheet" type="text/css" href="style.css">				<!-- DEFAULT CSS -->
		<title> Travel Experts - Home </title>		<!--TAB ON BROWSER-->		
		<style>
			<!-- SEE STYLE.CSS FOR STYLES -->
		</style>
		<script>	
//NEED TO FIX, THE IMAGES ARE ALL OVERLAPPING, 10X
//?UNDEFINED TEXT AT TOP?
			function loadImages()
			{
				var path2 = "images/";
				var images2 = ["101starsky.jpg","102mountains.jpg","103ocean.jpg","104autumn.jpg",
					"105river.jpg","106ocean.jpg","107starsky.jpg","108ocean.jpg","109beach.jpg","110beach.jpg"];
				var links2 = ["http://www.redhat.com", "http://www.redhat.com", "http://www.ucluelet-info.com", "http://www.redhat.com", "http://www.redhat.com",
					"http://www.redhat.com", "http://www.redhat.com", "http://www.redhat.com", "http://www.redhat.com", "http://www.redhat.com"];
				//var imgString;	//UNDEFINED
				var imgString = "";	//NEED BLANK STRING TO START
					console.log(images2.length);
					console.log(links2.length);
				imgArrayId = document.getElementById('img-array');	//GETS THE PARENT(ID)
				//BUILD LOOP FOR IMAGES TO LOAD.
				for(i=0; i<images2.length; i++)
				{
					//imgString = "<a href='" + links2[i] + "' target='_blank'>" + 			//DON'T USE (=) IT'S OVERWRITING
					imgString += "<a href='" + links2[i] + "' target='_blank'>" + 
						"<img class='resize' src='" + path2 + images2[i] + "' alt='" + images2[i] + "' /></a><br />";
					console.log(imgString);
				}
				imgArrayId.innerHTML = imgString;
				//<a href='http://www.redhat.com' target="_blank"><img class="resize" src="images/101starsky.jpg" alt="101starsky.jpg" /></a>
					//WRITES THE STRING, NEED LOOP.
			}
			
		</script>
	</head>
		<body>
			<header>
				<img src="images/01bridge.jpg" id="header-left" alt="01bridge.jpg"/>
				<img src="images/02sunset.jpg" id="header-right" alt="02sunset.jpg"/><!--  width="161.8" height="100" -->
				<img src="images/treelogo.gif" alt="treelogo.gif" width="161.8" height="100"/>
<!--FIX TAG-->				<h1>Welcome to TRAVEL EXPERTS<h1> <!-- TITLE TO THE LEFT OF LOGO? -->
				<div id="slogan">love knows no borders</div>
				
			</header>
			
			<!-- <nav id="image_background"> -->
			<nav>
				<a href="index.php" class="navbar">Home</a>
				<a href="register.php" class="navbar">Register</a>
				<a href="contact.php" class="navbar">Contact</a>
				<a href="links.php" class="navbar">Links</a>
			</nav>
			
			<main>
			<!-- <div id="img-array" onload="loadImages()"> -->
			<div id="img-array">
				Click below
				<script>
					loadImages();	//LOAD FUNCTION.
				</script>
					<!-- Click below -->
					<!-- <a href='http://www.redhat.com' target="_blank"><img class="resize" src="images/101starsky.jpg" alt="101starsky.jpg" /></a> -->
					<!-- <a href='http://www.redhat.com' target="_blank"><img class="resize" src="images/102mountains.jpg" alt="102mountains.jpg" /></a> -->
			</div>
				<article>
					<p><strong>Travel Experts</strong> has been bringing you great deals all around the world!</p>
					<p>Book your travel destination today!</p>
					<p>...</p>
					<p>Book your destination <acronym title="as soon as possible">ASAP</acronym>!</p>
					
					<p class="img"></p>
					<!-- MOVE DOWN TO HEADER -->
					
					<a class="img" href="register.php">
						<img src="images/register.jpg" alt="register.jpg" border="2" width="100" height="100" />
					</a>
					<a class="img" href="contact.php">
						<img src="images/contact.jpg" alt="contact.jpg" border="2" width="100" height="100" />
					</a>
					
				</article>
				
				<script>
					//------------------------------------
					//------------------------------------
					//IMAGES from Isleofskye.tumblr.com
					var images = ["01bridge_sm.jpg", "02sunset_sm.jpg", "03lake_sm.jpg", "04waterfall_sm.jpg", "05arctic_sm.jpg", "06river_sm.jpg"];
					var img_desc = ["A cyclist on a beautiful bridge on Minnow Lake.", 
									"A sunset at dawn in Hawaii.", 
									"Church of St. John in Newfoundland.", 
									"A glorious waterfall along Johnson's Trail.", 
									"Visit the stunning arctic.", 
									"A more extreme adventure with these rapids."
									];

					//ADD THUMBNAILS, WITH HOVER TO MAKE (ONE) TABLE CELL SHOW FULL SIZE VIEW.
					//
					document.write("<table border='1'>");

					for (var j=0; j<images.length; j++)
					{	
						//console.log("len is " + images.length);
						document.write("<tr>");
								//FORMAT  <img src="images/01bridge.jpg" id="header-left" alt="01bridge.jpg">
								//ALT TAG?
								//var test = "<td><img src='images/" + images[j] + "'></td>" + "<td>" + img_desc[j] + "</td>"
								//??var test = "<td onmouseover='alert(" + j + "')><img src='images/" + images[j] + "'></td>" + "<td>" + img_desc[j] + "</td>"
								//???var test = "<td onmouseover='displayImage()'
								//console.log(test);
								//alert(test);
							document.write("<td><img src='images/" + images[j] + "'></td>");
							document.write("<td>" + img_desc[j] + "</td>");
						document.write("</tr>");
					}
					document.write("</table>");
					
					function displayImage(index)
					{
						var img = document.getElentById("myimg");
						img.src = myimages[index];
					}
					//}
					/*else
					{
						alert("Images table did not load");
					}*/
					//------------------------------------
					//------------------------------------
				</script>
				
			</main>
			
			<footer>
				<h4>Home(php) - Copyright 2016 &copy;</h4>
			</footer>

	</body>
</html>