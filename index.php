<!DOCTYPE html>

<!-- TO DO... -->
	<!-- FIX REGISTER PAGE -->
		<!-- COLUMNS FIXED -->
		<!-- TOOL TIPS for contact links, etc. -->
		<!-- FIX (RED if BLANK) BOX AFTER THE BOX IS RE-FILLED IN -->
	<!-- RESET FOR STYLE.CSS? -->
	<!-- TABLE BORDER, AND ALIGN -->
	
	<!-- TARGET? <a href... target="_blank" ??? -->
	<!-- IMG-TABLE, move to *.js file -->
	<!-- HEADER in DIV tags? -->
	<!-- RESET.CSS -->
	
<html>
	<head>	
		<meta charset="UTF-8"/>
		<meta name="Description" content="Travel Agency Project - Home"/>
		<meta name="Keywords" content="travel, destination, html, css, php">
		<meta name="Author" content="Dean Jones"/>
		<meta name="Date" content="Oct.27, 2016"/>
		
		<!-- SEE STYLE.CSS FOR STYLES -->
		<link rel="stylesheet" type="text/css" href="style.css">				<!-- DEFAULT CSS -->
		<title> Travel Experts - Home </title>		<!--TAB ON BROWSER-->		
		<style>
			<!-- SEE STYLE.CSS FOR STYLES -->
		</style>
		<!--LOAD IMAGES SCRIPT-->
		<script type="text/javascript" src="loadImages.js"></script>
	</head>
		<body>
			<!-- HEADER -->
			<?php include_once 'header.php';?>

			
			<!-- <nav id="image_background"> -->
			<nav>
				<a href="index.php" class="navbar">Home</a>
				<a href="register.php" class="navbar">Register</a>
				<a href="contact.php" class="navbar">Contact</a>
				<a href="links.php" class="navbar">Links</a>
			</nav>
			
			<main>
				
				<article>
					<p><strong>Travel Experts</strong> has been bringing you great deals all around the world!</p>
					<p>Book your travel destination today!</p>
					<p>Travel all over the world! Visit Hawaii, Austrailia, or even the West Coast of Canada!</p>
					<p>Book your destination <acronym title="as soon as possible">ASAP</acronym>!</p>
				
					<!-- MOVE DOWN TO HEADER -->
					
					<a class="img-link" href="register.php">
						<img src="images/register.jpg" alt="register.jpg" width="100" height="100" />
					</a>
					<a class="img-link" href="contact.php">
						<img src="images/contact.jpg" alt="contact.jpg" width="100" height="100" />
					</a>
				</article>	
				<div id="img-array">
					Click below
					<script>
						loadImages();	//LOAD FUNCTION.
					</script>
						<!-- Click below -->
						<!-- <a href='http://www.redhat.com' target="_blank"><img class="resize" src="images/101starsky.jpg" alt="101starsky.jpg" /></a> -->
						<!-- <a href='http://www.redhat.com' target="_blank"><img class="resize" src="images/102mountains.jpg" alt="102mountains.jpg" /></a> -->
				</div>
				<div id="img-table">
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
						document.write("<tr>");

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

				</script>
				</div>
				
			</main>
			
			<footer>		
				<!-- FOOTER -->
				<?php include_once 'footer.php';?>
				<!--<h4>Home - Travel Experts Inc. - Copyright 2016 &copy;</h4>-->
			</footer>
	</body>
</html>