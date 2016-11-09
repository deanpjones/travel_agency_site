<?php
	$page_desc = "Travel Links";

	include_once 'load_links.php';
		#table_links	OLD FUNCTION
		
	/* VARIABLES */
	/* FUNCTIONS */

?>

<!DOCTYPE html>
<html>
	<head>	
		<meta charset="UTF-8"/>
		<meta name="Description" content="Travel Agency Project - Home"/>
		<meta name="Keywords" content="travel, destination, html, css, php">
		<meta name="Author" content="Dean Jones"/>
		<meta name="Date" content="Nov.14, 2016"/>
		
		<!--STYLE DEFINITION-->
		<link rel="stylesheet" type="text/css" href="style.css">				<!-- DEFAULT CSS -->
		
		<!--TAB ON BROWSER-->
		<title> Travel Links </title>		
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
					<p color="blue">Travel Links</p>
					<!-- RUN PRINT TABLE LOOP -->
					<?php
						load_links();		#NEW LINKS FUNCTION.
						#table_links();		#WILL BE REPLACED BY OTHER LOOP?
					?>
					
					<!-- IMAGE REGISTER LINK -->
					<?php include_once 'link_register.php';?>
					<!-- IMAGE CONTACTS LINK -->
					<?php include_once 'link_contacts.php';?>
					
				</article>

			</main>
			
			<!-- FOOTER -->
			<?php include_once 'footer.php';?>
	</body>
</html>