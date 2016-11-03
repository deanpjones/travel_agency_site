<?php
	#------------------
	#SESSION	
	session_start();
	#------------------

	//VARIABLES
	$title = "Customer Form Input Page";
	
	//GLOBAL VARIABLES
	include("variables.php");
	
	#require("header.php");
	#--------------------------------------------------------


	#(USER PAGE OUT OF ORDER) IF CUSTOMER GETS TO THIS PAGE (WITHOUT USING d12_customerlist.php)(SEND THEM BACK TO THAT PAGE FIRST)
	#IF $_REQUEST (IS BLANK???)
	if (!isset($_REQUEST["CustomerId"]))
	{
		#REDIRECT USER BACK TO OTHER PAGE
		#CUSTOMER NAME OR UPDATE ????????????????????????
		#header("Location: d12_customerupdate.php");
print($_REQUEST["CustomerId"]);
header("Location: d12_customerlist.php");
	}
	else
	{
		#------------------------
		#DB CONNECT
		$dbh = mysqli_connect($host, $user, $password, $database);
		#ERROR IF DATABASE DOESN'T CONNECT
				#if (!$dbh)
				if (mysqli_connect_errno())										#ALTERNATIVE (errno)
				{
					print(mysqli_connect_error("DATABASE NOT CONNECTED **************"));		#(error)
					exit;
				}
		#------------------------
		#do...
		$sql_prepared = "select * from customers where CustomerId=?";		
			#----------------------
			#????WHAT IS THIS DOING?????
			#PREPARED STATEMENT (?) (NEED TO ADD A EXPRESSION TO USE, as string)
			#http://php.net/manual/en/mysqli.prepare.php
				$stmt = mysqli_prepare($dbh, $sql_prepared);
				mysqli_stmt_bind_param($stmt, "i", $_REQUEST["CustomerId"]);
				mysqli_execute($stmt);
				#mysqli_stmt_execute($stmt);
				#???	$row = array();
				#mysqli_stmt_bind_result($stmt, $row);		#???
				#mysqli_stmt_bind_assoc($stmt, $row);
				mysqli_stmt_bind_result($stmt, $custid, $fname, $lname, $address, $city, $prov, $postal, $country,
											$homephone, $busphone, $email, $agentid );

											
											
				if(mysqli_stmt_fetch($stmt))
				{
					//do nothing at this point
				}
				else
				{
					print("asd;flkjasdf" . $_REQUEST["CustomerId"]);								//////////////////print(mysqli_stmt_fetch($stmt));
					print("Something went wrong? Call IT.");
				}

					// prepare statement //
					/* if ($stmt = mysqli_prepare($link, "SELECT Code, Name FROM Country ORDER BY Name LIMIT 5")) {
						mysqli_stmt_execute($stmt);

						// bind variables to prepared statement //
						mysqli_stmt_bind_result($stmt, $col1, $col2);

						// fetch values //
						while (mysqli_stmt_fetch($stmt)) {
							printf("%s %s\n", $col1, $col2);
						}

						// close statement //
						mysqli_stmt_close($stmt);
					} */

				
		#------------------------
		#DB CLOSE
			mysqli_close($dbh);
		#------------------------
	}
?>
<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<!--
		`CustomerId`, `CustFirstName`, `CustLastName`, `CustAddress`, `CustCity`, 
				`CustProv`, `CustPostal`, `CustCountry`, `CustHomePhone`, `CustBusPhone`, `CustEmail`, `AgentId`
		-->

		<h1>D12 Customer UPDATE Data</h1>
						<!--- SESSION ERROR MESSAGE -->
						<div>
							<?php
								if (isset($_SESSION["message"]))
								{
									print($_SESSION["message"]);
									unset($_SESSION["message"]);			#DELETE MESSAGE;
									
								}
							?>
						</div>
						<!--- SESSION ERROR MESSAGE -->
		
		<!--<form method="get" action="tester_cust.php">-->
		<!--TESTING tester_cust(testing).php -->
		<!--<form method="get" action="tester_cust(testing).php">--> 
		
		<!-- UPDATE not INSERT SQL QUERY --->
		<form method="get" action="d12_processcustomerupdate.php">
			<table>
			
				<!-- ??????????? <DISABLED> TAG? ??????????? -->
				<!-- ??????????? readonly="readyonly" TAG? ??????????? -->
				<!-- GREY OUT FOR READ-ONLY ?????????? --->
				<tr>
					<td>CustomerId: </td><td><input type="text" name="CustomerId" value="<?php print($custid); ?>" readonly="readonly" /><br /></td>
				</tr>
				<!-- ?????????????????????????????????????? -->
				
				
				
				
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
					<td></td><td><input type="submit" value="Save" /><br /></td>
					<!-- URL SENT ON PRESSING BUTTON
							http://localhost/tester.php?AgtFirstName=&AgtMiddleInitial=&AgtLastName=&AgtBusPhone=&AgtEmail=&AgtPosition=&AgencyId=1 -->
				</tr>

			</table>
			
		</form>

	</body>
</html>