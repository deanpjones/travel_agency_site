<?php
	#DON'T ADD!!, it is already on (login3.php), session_start();
	#---------------------------------------------
	#Dean Jones
	#Nov.11, 2016
	#AGENT LOGIN BANNER
	#-------------------------
	#SUPPORTING FILES
		#LOGIN3.PHP			(form for username and password)
		#LOGIN_CHECK3.php 	(validation for username and login)
		#LOGIN_BANNER.php	(banner to display login info)
	#---------------------------------------------
		#TEST TO SEE $_SESSION ARRAY
		#print_r($_SESSION);

		#PRINT THE CORRECT BANNER
		#print("*********************");

		#print_r($_SESSION);
		#$_SESSION["isLoggedIn"] == "false" && $_SESSION["isLoginValid"] == "false";
		if($_SESSION["isLoggedIn"] == "false" && $_SESSION["isLoginValid"] == "false")
		{
			echo "--- Login below ---";
		}
		#$_SESSION["isLoggedIn"] == "false" && $_SESSION["isLoginValid"] == "true";
		elseif($_SESSION["isLoggedIn"] == "false" && $_SESSION["isLoginValid"] == "true")
		{
			echo "--- Login below ---";
		}
		#$_SESSION["isLoggedIn"] == "true" && $_SESSION["isLoginValid"] == "false";
		elseif($_SESSION["isLoggedIn"] == "true" && $_SESSION["isLoginValid"] == "false")
		{
			echo "--- Your username and password is incorrect, please try again ---";
		}
		#$_SESSION["isLoggedIn"] == "true" && $_SESSION["isLoginValid"] == "true";		
		elseif($_SESSION["isLoggedIn"] == "true" && $_SESSION["isLoginValid"] == "true")
		{
			printf("--- Login successful, welcome %s %s ---", $_SESSION["loginFirstName"], $_SESSION["loginLastName"]);
		}		
		else
		{
			#print_r(var_dump($_SESSION));
			print_r($_SESSION);
		}

?>
