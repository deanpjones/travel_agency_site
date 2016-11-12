<?php
	#---------------------------------------------
	#Dean Jones
	#Nov.08, 2016
	#AGENT LOGIN FORM
	#-------------------------
	#SUPPORTING FILES
		#...
	#---------------------------------------------
	/* VARIABLES */
	$page_desc = "Customer Update (Agent Only)";
	
	//GLOBAL VARIABLES
	include("variables.php");

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
		<title> Travel Experts - Agent Login</title>
	</head>
	<body>
			<!-- HEADER -->
			<?php include_once 'header.php';?>
			
			<!-- NAVBAR -->
			<?php include_once 'navbar.php';?>
						
			<!-- LOGINBAR -->
			<?php include_once 'loginbar.php';?>
			
			<!-- LOGIN INFO BANNER -->
			<div id="banner"><?php include_once 'login_banner.php';?></div>
			
			<main>
				<article>
					<form method="post" action="login_check3.php">
						<table>	
						<th align="left">Agent Login</th>

						<!-- UPDATE SQL QUERY --->
						<tr>
							<td>User Id:</td><td><input type="text" name="AgtUserId"/><br /></td>
						</tr>
						<tr>
							<td>Password:</td><td><input type="password" name="AgtPassword"/><br /></td>
						</tr>
						<tr>
							<td></td><td><input type="submit" value="Log In" /></td>
						</tr>
						</table>
					</form>
				<br />									
				</article>
			</main>
			
			<!-- FOOTER -->
			<?php include_once 'footer.php';?>
	</body>
</html>