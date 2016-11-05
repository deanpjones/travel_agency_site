<?php
		#GLOBAL VARIABLES
		require("variables.php");
		/* VARIABLES */
		$page_desc = "Agent Login";
		
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

		<title> Travel Experts - Login </title>	
	</head>
	<body>
		<main>
			<!-- HEADER -->
			<?php include_once 'header.php';?>
			
			<!-- NAVBAR -->
			<?php include_once 'navbar.php';?>
		<article>

		
<!--------- CHANGE WHERE THE php GOES ------->		
		<form method="GET" action="login2.php">
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
<!-- 		<form action="upload.php" method="post" enctype="multipart/form-data">
			Select image to upload:
			<input type="file" name="fileToUpload" id="fileToUpload">
			<input type="submit" value="Upload Image" name="submit">
		</form> -->
		
		<?php
		//$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
		$users = file('login.ini');
		print($users[0]);
		#print($users[1]);
		#print_r(array_keys($$users));
		
		var_dump($_REQUEST);
		?>
		<?php
		#CREATE A FILE
			$loginfile = fopen("login.ini", "w") or die("Unable to LOGIN.INI!");
			$txt = "Mickey Mouse\n";
			fwrite($loginfile, $txt);
			$txt = "Minnie Mouse\n";
			fwrite($loginfile, $txt);
			fclose($loginfile);
		?>
		</article>
		</main>
		<!-- FOOTER -->
		<?php include_once 'footer.php';?>
	</body>
</html>

