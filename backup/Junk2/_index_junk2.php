<?php
	#--------------------------------------
	#SESSION (HOW TO KNOW IF USER IS LOGGED IN?)
		#PUT ON ANY PAGE THAT YOU (REQUIRE LOGIN)
		#SCRIPT_NAME...
		#HOW TO (DELETE SESSION), need plugin on CHROME
		
	/* session_start();
	if (isset($_SESSION["loggedin"]))		#IF (LOGIN NOT SET) GO TO LOGIN PAGE
	{
		#$_SESSION["scriptname"] = 					#??		echo $_SERVER['SCRIPT_NAME'];
		header("Location:d13_login.php");
	} */
	#-------------------------------------
	
	/* VARIABLES */
	$page_desc = "Home";
	#$title_desc = "Travel Experts - Contact Us";
	#NEED TO (REFERENCE) <head>

	/* FUNCTIONS */
?>

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
		<meta name="Date" content="Nov.14, 2016"/>
		
		<!-- SEE STYLE.CSS FOR STYLES -->
		<link rel="stylesheet" type="text/css" href="style.css">				<!-- DEFAULT CSS -->

		<!-- JAVASCRIPT - LOAD IMAGES -->
		<script type="text/javascript" src="loadImages.js"></script>
		<script type="text/javascript" src="loadImages2.js"></script>
		<script>
		//OPEN WINDOW
					//---------------------------
					function open_tab(x)
					{
						/* var x = 'http://www.redhat.com'; */
						console.log(x);
						
						 var win = window.open(x);
						 /* var win = window.open("http://www.redhat.com"); */
							/* setTimeout(close_tab('http://www.redhat.com'), 5000); */				//CLOSES window AFTER 10s
							/* setTimeout(function(){window.self.close(x)}, 3000); */	
							setTimeout(function(){win.close()},2000);
					}
 					//---------------------------
					//CLOSE WINDOW
					/*function close_tab(y)
					{
						window.close(y);									//CLOSES window AFTER 10s				
					}
					//--------------------------- */
					//setTimeout(function(){self.close()},2000)
		</script>
		
		
		<!--TAB ON BROWSER-->
		<title> Travel Experts - Home </title>	
	</head>
	<body>
			<!-- HEADER -->
			<?php include_once 'header.php';?>
			
			<!-- NAVBAR -->
			<?php include_once 'navbar.php';?>
			
			<!-- LOGINBAR -->
			<?php include_once 'loginbar.php';?>
			
			<!-- BANNER -->
			<div id="banner"><?php include_once 'banner.php';?></div>
			
			<main>
				<article>
					<p><strong>Travel Experts</strong> has been bringing you great deals all around the world!</p>
					<p>Book your travel destination today!</p>
					<p>Travel all over the world! Visit Hawaii, Austrailia, or even the West Coast of Canada!</p>
					<p>Book your destination <acronym title="as soon as possible">ASAP</acronym>!</p>
				
					<!-- PICTURE LINKS -->
					<a class="img-link" href="register.php">
						<img src="images/register.jpg" alt="register.jpg" width="100" height="100" style="cursor:pointer;" title="Click for Register" />
					</a>
					<a class="img-link" href="contact.php">
						<img src="images/contact.jpg" alt="contact.jpg" width="100" height="100" style="cursor:pointer;" title="Click for Contacts" />
					</a>
					
				</article>	
				<div id="img-array">
					Click below
					<script>
						loadImages();	//LOAD IMAGE (LINKS) RIGHT-PAGE
						
					</script>
						<!-- Click below -->
						<!-- <a href='http://www.redhat.com' target="_blank"><img class="resize" src="images/101starsky.jpg" alt="101starsky.jpg" /></a> -->
						<!--<a onclick="open_tab()" target="_blank"><img class="resize" src="images/102mountains.jpg" alt="102mountains.jpg" /></a>-->
					<!-- <a href="setTimeout(function(){self.close('http://www.redhat.com')},2000)" target="_blank"><img class="resize" src="images/treelogo.jpg" alt="102mountains.jpg" /></a> -->
				<img class="resize" onclick="open_tab('http://www.redhat.com')" src="images/101starsky.jpg" alt="101starsky.jpg" />
				</div>
				
				<div id="img-table">
				<script>
					loadImages2();		//LOAD IMAGE (TABLE) LEFT-PAGE
				</script>
				</div>
				
			</main>
			<!-- FOOTER -->
			<?php include_once 'footer.php';?>
	</body>
</html>