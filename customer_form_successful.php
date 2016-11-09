<?php
	#---------------------------------------------
	#Dean Jones
	#Nov.08, 2016
	#CUSTOMER REGISTER - SUCCESSFUL PAGE
	#-------------------------
	#SUPPORTING FILES
		#CUSTOMER_FORM_REGISTER.PHP		(customer insert data form)
		#CUSTOMER_TESTER.PHP			(tester)
		#CUSTOMER_FORM_SUCCESSFUL.PHP	(if validated)
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
		
		<!-- SCRIPTS -->
		<script type="text/javascript">
			document.getElementById("buttonHome").onclick = function () {
				location.href = "www.yoursite.com";
			};
		</script>
		
		<!--TAB ON BROWSER-->
		<title> Travel Experts - Register</title>
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
					<table>
						<tr>
							<td><h4 align="center" color="green">*** Registration - SUCCESSFUL! ***</h4></td>
						</tr>
					</table>
					<!--<table id="tbl-register">
						 NAME -->
						
						<!--<tr>
							<div class="success"><td> Customer Registration </td></div>
						</tr>
					</table>-->

				<!-- PICTURE LINKS -->
				<br />
				<a class="img-link" href="contact.php">
					<img src="images/contact.jpg" alt="contact.jpg" width="100" height="100" style="cursor:pointer;" title="Click for Contacts" />
				</a>
					
				</article>
			</main>
			
			<!-- FOOTER -->
			<?php include_once 'footer.php';?>
	</body>
</html>