<?php
		#GLOBAL VARIABLES
		include("variables.php");
		/* VARIABLES */
		$page_desc = "Agent Login";
		
		#FUNCTIONS
		
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

		<title> Travel Experts - Login </title>	
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
				<form method="post" action="login_check.php">
					<table id="agent-login" style="width:40%" align="center" >
						<tr>
						<td><h3>Agent Login</h3></td>
						<td></td>
						</tr>
						<tr>
						<td><label for="pw">Username:</label></td>
						<td><input type="text" name="pw" id="pw" placeholder="Enter Username" /></td>
						</tr>
						<tr>
						<td><label for="pw">Password:</label></td>
						<td><input type="password" name="pw" id="pw" placeholder="Enter Password" /></td>
						</tr>
						<tr>
						<td></td>
						<td><input type="submit" value="    OK    " /></td>
						</tr>
					</table>
				</form>
			</article>
		</main>
		<!-- FOOTER -->
		<?php include_once 'footer.php';?>
	</body>
</html>

