<?php
	#login, isValid(checklogin.php), istrue, goto (protectedPage.php)
		#phpinfo();	#find ENVIRONMENT VARIABLES
		#var_dump($_SESSION["login_message"]);
		
	#SESSION	
	session_start();
	#var_dump($x);
	#var_dump($_SESSION);
	include('header.php');
	
	if(isset($_SESSION["login_message"]))					#YES QUOTES, $_SESSION[login_message]
	{
		print("<h2>$_SESSION[login_message]</h2>");			#NO QUOTES, $_SESSION[login_message]
		unset($_SESSION["login_message"]);					#NO QUOTES, $_SESSION[login_message]
	}
?>

<!DOCTYPE html>
<html>
   <head>
   </head>
   <body>
   
		<form method="post" action="d13_checklogin.php">
			User Id: <input type="text" name="AgtUserId"/><br />
			Password: <input type="password" name="AgtPassword"/><br />
			<input type="submit" value="Log In" />
		</form>

	</body>
</html>