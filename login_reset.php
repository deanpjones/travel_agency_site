
<?php
	#---------------------------------------------
	#Dean Jones
	#Nov.11, 2016
	#AGENT LOGIN RESET
	#-------------------------
	#SUPPORTING FILES
		#LOGIN3.PHP			(form for username and password)
	#---------------------------------------------
	if(isset($_SESSION["loginState"])) 
	{		
		if($_SESSION["loginState"] != "loggedNew")
		{
			$_SESSION["loginState"] = "loggedNew";
		}			
	}

?>
