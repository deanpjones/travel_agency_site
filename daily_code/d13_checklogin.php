<?php
	session_start();
	include("variables.php");
	
	if (!isset($_REQUEST["AgtUserId"]))					#IF (AgtUserId) IS (NOT) SET (checks the URL for a value that isSET?)
	{
		$_SESSION["loginmessage"] = "You must log in first";
		header("Location: d13_login.php");				#IF (NO AgtUserId), take to LOGIN PAGE
	}
	else
	{

		$message = "";
		function validate()
		{
			global $message;
			if($_REQUEST["AgtUserId"] == "")		#AgtUserId is EMPTY
			{
				$message = "UserId must have a value<br />";
			}
			if($_REQUEST["AgtPassword"] == "")		#AgtPassword is EMPTY
			{
				$message = "Password must have a value<br />";
			}
			if($message)							#???
			{
				$message = "???<br />";
			}
		}
		if(validate())
		{
			#CHECK THE DATABASE(AgtUserId)
			#DB CONNECT
			$dbh = mysqli_connect($host, $user, $password, $database);
				if(!$dbh)											#IF (NOT CONNECTED) TO DATABASE
				{
					#CREATE A (LOG FILE)
						#Could CREATE FOLDER if it doesn't exist?
					$file = fopen("log/errorlog.txt", "a");			#OPENS FILE (OR CREATES)(TO APPEND)
					fwrite($file, mysqli_connect_error() . "\n");	#WRITES TO FILE
					fclose($file);									#CLOSES FILE
					exit;		#MAKES SURE IT DOESN'T CONTINUE WITHOUT A CONNECTION
				}
			#TEST QUERY (IN SQL)(CHECK THAT IT WORKS)
			#SELECT * FROM `agents` WHERE `AgtUserId`="user1" AND `AgtPassword`="pass1"
			
			#PREPARED STATEMENT
			$sql = "SELECT AgtPassword from agents WHERE AgtUserId=?";			#FILL IN THE (?)
				$stmt = mysqli_prepare($dbh, $sql);
				mysqli_stmt_bind_param($stmt, "s", $_REQUEST["AgtUserId"]);		#("s" is string "i" is integer) SUBSTITUES THE (?) WITH THE (AgtUserId)
				mysqli_stmt_execute($stmt);										#EXECUTES THE PREPARED STATEMENT
				mysqli_stmt_bind_result($stmt, $password);						#????? BINDS THE RESULT (FROM SQL) TO (SEND BACK)
				
				if (mysqli_stmt_fetch($stmt))									#FETCHES THE RESULT
				{
					#AND (CHECK PASSWORD)
					if($password != $_REQUEST[AgtPassword])							#IF (PASSWORD NOT-EQUAL TO PASSWORD)
					{
						$_SESSION["loginmessage"] = "Invalid user or password";
						header("Location: d13_login.php");							#IF (TRUE, go back to LOGIN)
					}
					else
					{
						$_SESSION["loggedin"] = "yes";								#IF (FALSE, it worked go to MAIN PAGE)
						header("Location: index.php");
					}
				}
				else
				{
					$_SESSION["loginmessage"] = "Invalid user or password";
					header("Location: d13_login.php");								#IF (bad USER or PASSWORD), take to LOGIN PAGE
				}
		}	
		else
		{
			$_SESSION["loginmessage"] = "Empty fields";								
			header("Location: d13_login.php");										#IF (EMPTY FIELDS?), take to LOGIN PAGE
		}
			
	}
?>