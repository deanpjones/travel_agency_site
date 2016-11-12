<?php
	#---------------------------------------------
	#Dean Jones
	#Nov.11, 2016
	#AGENT UPDATE - SUCCESSFUL PAGE
	#-------------------------
	#SUPPORTING FILES
		#AGENT_FORM_REGISTER.PHP	(AGENT update data form)
		#AGENT_TESTER.PHP			(tester)
		#AGENT_FORM_SUCCESSFUL.PHP	(if validated)
	#---------------------------------------------
	/* VARIABLES */
	$page_desc = "Customer Register";
	
?>

<!DOCTYPE html>
<html>
	<head>	
		<meta charset="UTF-8">
		<meta name="Description" content="Travel Agency Project - Register">
		<meta name="Keywords" content="travel, contact, destination, html, css, php">
		<meta name="Author" content="Dean Jones">
		<meta name="Date" content="Nov.14, 2016">

		<!-- SEE STYLE.CSS FOR STYLES -->
		<link rel="stylesheet" type="text/css" href="style.css">
		
		<!--TAB ON BROWSER-->
		<title> Travel Experts - AGENT Update</title>
	</head>
	<body>
			<!-- HEADER -->
			<?php include_once 'header.php';?>
			
			<!-- NAVBAR -->
			<?php include_once 'navbar_agent.php';?>
						
			<!-- LOGINBAR -->
			<?php include_once 'loginbar.php';?>
			
			<!-- BANNER -->
			<div id="banner"><?php include_once 'banner.php';?></div>
			
			<main>
				<article>
					<table>
						<tr>
							<td><h4 align="center" color="green">*** AGENT Update - SUCCESSFUL! ***</h4></td>
						</tr>
					</table>
					
					<br />
					<!-- IMAGE REGISTER LINK -->
					<?php include_once 'link_register.php';?>

				</article>
			</main>
			
			<!-- FOOTER -->
			<?php include_once 'footer.php';?>
	</body>
</html>