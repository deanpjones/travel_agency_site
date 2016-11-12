<?php
	#---------------------------------------------
	#Dean Jones
	#Nov.08, 2016
	#CUSTOMER UPDATE (AGENT ONLY) FORM
	#-------------------------
	#SUPPORTING FILES
		#CUSTOMER_FORM_UPDATE.PHP				(customer UPDATE data form)
		#CUSTOMER_TESTER_UPDATE.PHP				(tester)
		#CUSTOMER_FORM_SUCCESSFUL.PHP			(if validated)
	#---------------------------------------------
	/* VARIABLES */
	$page_desc = "Customer Update (Agent Only)";
	
	//GLOBAL VARIABLES
	include("variables.php");

		#--------------------------------------------------------------------------------------------------------
		#--------------------------------------------------------------------------------------------------------
		#PREPOPULATE FORM DATA FROM SQL
			#-------------------------------------------------------------
			#DB CONNECT
			include("db_connect.php");
			#-------------------------------------------------------------
			#GET QUERY OF (SELECTED CUSTOMER-ID (?))
			$sql_prepared = "SELECT * from customers WHERE CustomerId=?";
				#print($sql_prepared . "<br / >");
				error_log($sql_prepared);
				#-------------------------------------------------------------------
				#PREPARED STATEMENT, TO INPUT INTO (?)
				$stmt = mysqli_prepare($dbh, $sql_prepared);							//return, OBJECT or FALSE

					#*********************************************
					#*********************************************
					#PASSED FROM (customer_form_list.php)
					#BIND the (CustomerId VALUEorKEY to the ($stmt))
					mysqli_stmt_bind_param($stmt, "i", $_REQUEST["CustomerId"]);
					#*********************************************
					#*********************************************
						#-------------
						#TEST...
						#$test = 108;
						#mysqli_stmt_bind_param($stmt, 'i', $test);							//Test CustomerId = 108, should return ROW (Judy Sethi)
						#-------------
						#ERROR_LOG
						#error_log(var_dump(mysqli_stmt_bind_param($stmt, 'i', $test)));	//TRUE
				#-------------------------------------------------------------------
				#EXECUTES SQL QUERY
					mysqli_execute($stmt);
						#ERROR_LOG
						#error_log(var_dump(mysqli_execute($stmt)));						//TRUE
				#--------------------------------
				#BIND DATA TO (INPUT BOXES BELOW)
					mysqli_stmt_bind_result($stmt, $custid, $fname, $lname, $address, $city, $prov, $postal, $country,
												$homephone, $busphone, $email, $agentid );
					#FETCH (ROW) VALUES 
					#mysqli_stmt_fetch($stmt);
						#or TEST FETCH STATEMENT (IN CASE IT DOESN'T WORK)
						if (!mysqli_stmt_fetch($stmt))
						{
							#ERROR_LOG
							#print("The SQL QUERY, did not work, values could not be FETCHED.");
							error_log("The SQL QUERY, did not work, values could not be FETCHED.");
						}
				#--------------------------------

			#------------------------
			#DB CLOSE
				mysqli_close($dbh);
			#------------------------
		#PREPOPULATE FORM DATA FROM SQL
		#--------------------------------------------------------------------------------------------------------
		#--------------------------------------------------------------------------------------------------------

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
															
				<!-- UPDATE SQL QUERY --->
				<form method="post" action="customer_tester_update.php">
					<table>
						<th align="left">Customer Update *** Edit Info ***</th>
						<tr>
							<td>CustomerId: </td><td><input type="text" name="CustomerId" value="<?php print($custid); ?>" readonly="readonly" /><br /></td>
						</tr>
						<tr>
							<td>First Name: </td><td><input type="text" name="CustFirstName" value="<?php print($fname); ?>" /><br /></td>
						</tr>
						<tr>
							<td>Last Name: </td><td><input type="text" name="CustLastName" value="<?php print($lname); ?>" /><br /></td>
						</tr>
						<tr>
							<td>Address: </td><td><input type="text" name="CustAddress" value="<?php print($address); ?>" /><br /></td>
						</tr>
						<tr>
							<td>City: </td><td><input type="text" name="CustCity" value="<?php print($city); ?>" /><br /></td>
						</tr>
						<tr>
							<td>Province:  </td><td><input type="text" name="CustProv" value="<?php print($prov); ?>" /><br /></td>
						</tr>
						<tr>
							<td>Postal Code:  </td><td><input type="text" name="CustPostal" value="<?php print($postal); ?>" /><br /></td>
						</tr>
						<tr>
							<td>Country:  </td><td><input type="text" name="CustCountry" value="<?php print($country); ?>" /><br /></td>
						</tr>
						<tr>
							<td>Phone(home):  </td><td><input type="text" name="CustHomePhone" value="<?php print($homephone); ?>" /><br /></td>
						</tr>
						<tr>
							<td>Phone(work):  </td><td><input type="text" name="CustBusPhone" value="<?php print($busphone); ?>" /><br /></td>
						</tr>
						<tr>
							<td>Email:  </td><td><input type="text" name="CustEmail" value="<?php print($email); ?>" /><br /></td>
						</tr>
						<tr>
							<td>AgentId:  </td><td><input type="text" name="AgentId" value="<?php print($agentid); ?>" /><br /></td>
						</tr>
						
						<!-- OPTION SELECT... -->
							
						<tr>
							<td></td><td><input type="submit" value="Save Changes" /><br /></td>
							<!-- URL SENT ON PRESSING BUTTON
									http://localhost/tester.php?AgtFirstName=&AgtMiddleInitial=&AgtLastName=&AgtBusPhone=&AgtEmail=&AgtPosition=&AgencyId=1 -->
						</tr>

					</table>
					
				</form>
		
				</article>
			</main>
			
			<!-- FOOTER -->
			<?php include_once 'footer.php';?>
	</body>
</html>