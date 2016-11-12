<?php
	#---------------------------------------------
	#Dean Jones
	#Nov.08 2016
	#DB_CONNECT.PHP (SHORTER VERSION TO CALL, haven't got all redundencies yet...)
	#-------------------------
	#SUPPORTING FILES
		#...(whereever connecting to SQL)
	#---------------------------------------------

	//GLOBAL VARIABLES
	include("variables.php");
	
#-------------------------------------------------------------
#DB CONNECT
	global $host, $user, $password, $database;
	$dbh = mysqli_connect($host, $user, $password, $database);
		#ERROR IF DATABASE DOESN'T CONNECT
		if(!$dbh)											#IF (NOT CONNECTED) TO DATABASE
		{
			#CREATE A (LOG FILE)
			$file = fopen("log/errorlog.txt", "a");			#OPENS FILE (OR CREATES)(TO APPEND)
			fwrite($file, mysqli_connect_error() . "\n");	#WRITES TO FILE
			fclose($file);									#CLOSES FILE
			exit();											#MAKES SURE IT DOESN'T CONTINUE WITHOUT A CONNECTION
		}
		else
		{
			#print("*** SQL DATABASE CONNECTED ***<br />");
			error_log("*** SQL DATABASE CONNECTED ***");
		}			
#END DB CONNECT
#-------------------------------------------------------------
?>