<?php
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
	if(isset($_SESSION["loginState"])) 
	{
		
		if($_SESSION["loginState"] == "loggedNew")
		{
			echo "--- Login below ---";
		}
		else if($_SESSION["loginState"] == "loggedIn")
		{
			printf("--- Login successful, welcome %s %s ---", $_SESSION["loginFirstName"], $_SESSION["loginLastName"]);
		}
		else if($_SESSION["loginState"] == "loggedInvalid")
		{
			echo "--- Your username and password is incorrect, please try again ---";
		}	
		else if($_SESSION["loginState"] == "loggedOut")
		{
			echo "--- Logged out ---";
		}			
	}

?>
