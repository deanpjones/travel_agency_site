<?php
	#---------------------------------------------
	#Dean Jones
	#Nov.11, 2016
	#AGENT UPDATE (AGENT ONLY) FORM
	#-------------------------
	#SUPPORTING FILES
		#AGENT_FORM_UPDATE.PHP				(AGENT UPDATE data form)
		#AGENT_TESTER_UPDATE.PHP			(tester)
		#AGENT_FORM_SUCCESSFUL.PHP			(if validated)
	#---------------------------------------------
	/* VARIABLES */
	$page_desc = "AGENT Update (Agent Only)";
	
	//GLOBAL VARIABLES
	include("variables.php");

		#--------------------------------------------------------------------------------------------------------
		#--------------------------------------------------------------------------------------------------------
		#PREPOPULATE FORM DATA FROM SQL
			#-------------------------------------------------------------
			#DB CONNECT
			include("db_connect.php");
			#-------------------------------------------------------------
			#GET QUERY OF (SELECTED AGENT-ID (?))
			$sql_prepared = "SELECT * from agents WHERE AgentId=?";
				#print($sql_prepared . "<br / >");
				error_log($sql_prepared);
				#-------------------------------------------------------------------
				#PREPARED STATEMENT, TO INPUT INTO (?)
				$stmt = mysqli_prepare($dbh, $sql_prepared);							//return, OBJECT or FALSE

					#*********************************************
					#*********************************************
					#PASSED FROM (customer_form_list.php)
					#BIND the (CustomerId VALUEorKEY to the ($stmt))
					mysqli_stmt_bind_param($stmt, "i", $_REQUEST["AgentId"]);
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
					mysqli_stmt_bind_result($stmt, $agtid, $agtfname, $agtmname, $agtlname, $agtbusphone, $agtemail, $agtposition, $agencyid,
												$agtuserid, $agtpwd );
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
															
				<!-- UPDATE SQL QUERY --->
				<form method="post" action="agent_tester_update.php">
					<table>
						<th align="left">AGENT Update *** Edit Info ***</th>
						<tr>
							<td>AgentId: </td><td><input type="text" name="AgentId" value="<?php print($agtid); ?>" readonly="readonly" /><br /></td>
						</tr>
						<tr>
							<td>First Name: </td><td><input type="text" name="AgtFirstName" value="<?php print($agtfname); ?>" /><br /></td>
						</tr>
						<tr>
							<td>Middle Initial: </td><td><input type="text" name="AgtMiddleInitial" value="<?php print($agtmname); ?>" /><br /></td>
						</tr>
						<tr>
							<td>Last Name: </td><td><input type="text" name="AgtLastName" value="<?php print($agtlname); ?>" /><br /></td>
						</tr>
						<tr>
							<td>Phone(work):  </td><td><input type="text" name="AgtBusPhone" value="<?php print($agtbusphone); ?>" /><br /></td>
						</tr>
						<tr>
							<td>Email:  </td><td><input type="text" name="AgtEmail" value="<?php print($agtemail); ?>" /><br /></td>
						</tr>
						<tr>
							<td>Position:  </td><td><input type="text" name="AgtPosition" value="<?php print($agtposition); ?>" /><br /></td>
						</tr>
						<tr>
							<td>AgencyId:  </td><td><input type="text" name="AgencyId" value="<?php print($agencyid); ?>" /><br /></td>
						</tr>
						<tr>
							<td>UserId:  </td><td><input type="text" name="AgtUserId" value="<?php print($agtuserid); ?>" /><br /></td>
						</tr>
						<tr>
							<td>Password:  </td><td><input type="text" name="AgtPassword" value="<?php print($agtpwd); ?>" /><br /></td>
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