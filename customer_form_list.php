<?php
	#---------------------------------------------
	#Dean Jones
	#Nov.08, 2016
	#CUSTOMER UPDATE (AGENT ONLY) FORM
	#-------------------------
	#SUPPORTING FILES
		#CUSTOMER_FORM_UPDATE.PHP				(customer UPDATE data form)
		#CUSTOMER_TESTER_UPDATE.PHP				(tester)
		#CUSTOMER_FORM_UPDATE_SUCCESSFUL.PHP	(if validated)
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
		<title> Travel Experts - Customer Update</title>
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
					<th align="left">Pick a Customer (to edit)</th>

					<!-- UPDATE SQL QUERY --->
					<tr>
						<td>
					<form method="post" action="customer_form_update.php">					
						<select name="CustomerId" >
						<?php
						#--------------------------------------------------------------------------------------------------------
						#--------------------------------------------------------------------------------------------------------
						#CREATE A PULLDOWN (CUSTOMERS)
							#-----------------------------
							#DB CONNECT
							include("db_connect.php");
							#-----------------------------
							#SQL QUERY
								#$sql = "SELECT `CustomerId` FROM `customers`";
								$sql = "SELECT CustomerId, CustFirstName, CustLastName FROM customers";
							#-----------------------------
							#GET RESULT
							$result = mysqli_query($dbh, $sql);
							#-----------------------------
							#CHECK CONNECTION FIRST...
							if (mysqli_errno($dbh))
							{
								print(mysqli_error($dbh));
								exit;
							}
							#-----------------------------
							#GENERATE (<option>) PULLDOWN
							while ($row = mysqli_fetch_row($result))
							{
								print("<option value='$row[0]'>$row[1] $row[2]</option>");
							}
							#-----------------------------
						?>
						</select>
						<input type="submit" value="Edit Customer Info" />				
					</form>
						</td>
					</tr>
				</table>
				<!-- PICTURE LINKS -->
				<br />
									
				</article>
			</main>
			
			<!-- FOOTER -->
			<?php include_once 'footer.php';?>
	</body>
</html>