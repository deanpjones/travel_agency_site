<?php
		#GLOBAL VARIABLES
		require("variables.php");
		#LOAD FUNCTIONS
		require("functions.php");
		
				#-------------------------------
				#DB CONNECT
				function db_connect()
				{
					#$dbh = mysqli_connect($host, $user, $password, $database); 
					global $dbh;
					#ERROR IF DATABASE DOESN'T CONNECT
					#if (!$dbh)
					if (mysqli_connect_errno())										#ALTERNATIVE (errno)
					{
						print(mysqli_connect_error("DATABASE NOT CONNECTED **************"));		#(error)
					}	
				}
				#-------------------------------
				#-------------------------------
				#DB CLOSE
				function db_close()
				{
					global $dbh;
					mysqli_close($dbh);
				}
				#-------------------------------
?>
<!DOCTYPE html>
<html>
	<head>	
		<meta charset="UTF-8"/>
		<meta name="Description" content="Travel Agency Project - Home"/>
		<meta name="Keywords" content="travel, destination, html, css, php">
		<meta name="Author" content="Dean Jones"/>
		<meta name="Date" content="Oct.27, 2016"/>
		
		<!-- SEE STYLE.CSS FOR STYLES -->
		<link rel="stylesheet" type="text/css" href="style.css">				

		<title> Travel Experts - Login2 </title>	
	</head>
	<body>
		<main>
			<!-- HEADER -->
			<?php include_once 'header.php';?>
			
			<!-- NAVBAR -->
			<?php include_once 'navbar.php';?>
		<article>
		<h1>Agent Login2</h1>
		
		
		
		
<!--------- CHANGE WHERE THE php GOES ------->
		<form method="GET" action="d12_customerupdate.php">
			<select name="CustomerId">			<!-- PRIMARY KEY REFERENCE -->
				<?php
					#DB CONNECT
					db_connect();
				
					#SQL QUERY
					$sql = "SELECT `AgentId`, `AgtFirstName`, `AgtLastName` FROM `agents`";
					/* SELECT `AgentId`, `AgtFirstName`, `AgtMiddleInitial`, `AgtLastName`, `AgtBusPhone`, `AgtEmail`, `AgtPosition`, `AgencyId` FROM `agents` WHERE 1 */
					#SEND TO DATABASE TO (GET QUERY BACK)
					$result = mysqli_query($dbh, $sql);
						if (mysqli_errno($dbh))
						{
							print(mysqli_error($dbh));
							/* print("test1"); */
							exit;
						}
						else
						/* {
							print("test2");
						} */
					#------------ DROPDOWN LIST --------------------
					#FETCH... use array to put in values
						while ($row = mysqli_fetch_row($result))
						{
							print("<option value='$row[0]'>$row[1] $row[2]</option>");
						}
					#-------------------------------
					#DB CLOSE
						db_close;
					#-------------------------------
				?>
			</select>
			<!-- BUTTON -->
			<input type="submit" value="Select Agent" />

		</form>
		</article>
		</main>
	</body>
</html>

