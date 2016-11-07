<?php
	/* VARIABLES */
	$page_desc = "Contact Us";

	/* FUNCTIONS */
	
	include 'Agent_class.php';
?>

<!DOCTYPE html>
<html>
	<head>	
		<meta charset="UTF-8"/>
		<meta name="Description" content="Travel Agency Project - Contact Us"/>
		<meta name="Keywords" content="travel, contact, destination, html, css, php"/>
		<meta name="Author" content="Dean Jones"/>
		<meta name="Date" content="Nov.14, 2016"/>
		
		<!-- SEE STYLE.CSS FOR OTHER STYLES -->		
		<link rel="stylesheet" type="text/css" href="style.css"/>
		
		<!--TAB ON BROWSER-->
		<title> Travel Experts - Contact Us</title>	
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
				<address>


					
					<p>	
						<?php
						$myGuy = new Agent();
						$myGuy->setAgtFirstName("Jorge");
						echo $myGuy;
						?>
					
					
					
						<ul type="circle">
							<b>Email</b>
							<!-- <li>info@travelexperts.com</li>	<!-- HREF LINK -->
								<li><a href="mailto:info@travelexperts.com">info@travelexperts.com</a></li>
						</ul>
					</p>
					
					<!-- MOVE DOWN TO HEADER -->
					<a class="img-link" href="register.php">
						<img src="images/register.jpg" alt="register.jpg" width="100" height="100" style="cursor:pointer;" title="Click for Register" />
					</a>
					
				</address>
			</main>
			<!-- FOOTER -->
			<?php include_once 'footer.php';?>
	</body>
</html>