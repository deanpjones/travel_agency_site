<?php
	session_start();

	#---------------------------------------------
	#Dean Jones
	#Nov.11, 2016
	#AGENT LOGIN FORM
	#-------------------------
	#SUPPORTING FILES
		#LOGIN3.PHP			(form for username and password)
		#LOGIN_CHECK3.php 	(validation for username and login)
		#LOGIN_BANNER.php	(banner to display login info)
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
			<?php 
			#--------------------------
			#IF isLoggedIn OR isLoginValid ISN'T SET
			if (!isset($_SESSION["isLoggedIn"]) || !isset($_SESSION["isLoginValid"]))
			{
				include_once 'navbar.php';
					$_SESSION["isLoggedIn"] = "false";
					$_SESSION["isLoginValid"] = "false";
			}
			#--------------------------
			
				#---------------------------------------------------------------------
				#LOAD THE CORRECT NAVBAR
				if($_SESSION["isLoggedIn"] == "false" && $_SESSION["isLoginValid"] == "false")
				{
					include_once 'navbar.php';
						$_SESSION["isLoggedIn"] = "false";
						$_SESSION["isLoginValid"] = "false";
				}
				#$_SESSION["isLoggedIn"] == "false" && $_SESSION["isLoginValid"] == "true";
				elseif($_SESSION["isLoggedIn"] == "false" && $_SESSION["isLoginValid"] == "true")
				{
					include_once 'navbar.php';
						$_SESSION["isLoggedIn"] = "false";
						$_SESSION["isLoginValid"] = "true";
				}
				#$_SESSION["isLoggedIn"] == "true" && $_SESSION["isLoginValid"] == "false";
				elseif($_SESSION["isLoggedIn"] == "true" && $_SESSION["isLoginValid"] == "false")
				{
					include_once 'navbar.php';
						$_SESSION["isLoggedIn"] = "true";
						$_SESSION["isLoginValid"] = "false";
				}
				#$_SESSION["isLoggedIn"] == "true" && $_SESSION["isLoginValid"] == "true";		
				elseif($_SESSION["isLoggedIn"] == "true" && $_SESSION["isLoginValid"] == "true")
				{
					include_once 'navbar_agent.php';
						$_SESSION["isLoggedIn"] = "true";
						$_SESSION["isLoginValid"] = "true";
				}
				#---------------------------------------------------------------------
				/* if (!isset($_SESSION["isLoggedIn"]))
				{
					#print("test1");
					$_SESSION["isLoggedIn"] = false;
					include_once 'navbar.php';
				}
				else if($_SESSION["isLoggedIn"] == false)
				{
					#print("test2");
					$_SESSION["isLoggedIn"] = false;
					include_once 'navbar.php';
				}
				else if ($_SESSION["isLoggedIn"] == true)
				{
					#print("test3");
					$_SESSION["isLoggedIn"] = true;
					include_once 'navbar_agent.php';
				} */	

				/* 				
				{
					
					if($_SESSION["loginState"] == "loggedNew" || $_SESSION["loginState"] == "loggedInvalid" || $_SESSION["loginState"] == "loggedOut")
					{
						include_once 'navbar.php';
					}
					else if($_SESSION["loginState"] == "loggedIn")
					{
						include_once 'navbar_agent.php';
					}		
				} */
				
			?>
						
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
							<td>User Id:</td><td><input value="" type="text" name="AgtUserId"/><br /></td>
						</tr>
						<tr>
							<td>Password:</td><td><input value="" type="password" name="AgtPassword"/><br /></td>
						</tr>
						<tr>
							<!--<td><button onclick="myLogout()">Log out</button></td><td><input type="submit" value="Log In" /></td>-->
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