<?php
	session_start();

	#---------------------------------------------
	#Dean Jones
	#Nov.11, 2016
	#AGENT LOGIN VALIDATION
	#-------------------------
	#SUPPORTING FILES
		#LOGIN3.PHP		(form for username and password)
		#LOGIN_CHECK3.php (validation for username and login)
		#LOGIN_BANNER.php	(banner to display login info)
	#---------------------------------------------
	
	/* VARIABLES */
	$page_desc = "Customer Update (Agent Only)";
	
	//GLOBAL VARIABLES
	include("variables.php");
	
	#--------------------------------------------------------------------------------------------------------
		#--------------------------------------------------------------------------------------------------------
		#PREPOPULATE FORM DATA FROM SQL
			#-------------------------------------------------------------
			#DB CONNECT
			include("db_connect.php");
			#-------------------------------------------------------------
			#GET INPUTS FROM INPUT BOXES...
			#$user = "user1";
			#$pass = "pass1";
			$user = $_REQUEST['AgtUserId'];
			$pass = $_REQUEST['AgtPassword'];
				#echo $_REQUEST['AgtUserId'];
				#echo "<br />";
				#echo $_REQUEST['AgtPassword'];
				#echo "<br />";
			#$sql = "SELECT * FROM agents WHERE AgtUserId=" . $user . " AND AgtPassword=" . $pass;
			$sql = "SELECT * FROM agents WHERE AgtUserId='" . $user . "' AND AgtPassword='" . $pass . "'";
				#echo $sql;
			#EXECUTES REGULAR SQL QUERY
			$result = mysqli_query($dbh, $sql) or die("SQL Error");;		#returns $_REQUEST array that you can use... $_REQUEST[AgtUserId]
			
			#FETCH (ROW SQL DATA)
			$row_array = mysqli_fetch_row($result);
			#echo $row_array[1] . $row_array[2];
			#echo "<br />";
			
					if($result)		#if $result QUERY is TRUE...
					{
						if($_REQUEST['AgtUserId'] == "" || $_REQUEST['AgtPassword'] == "")
						{
							#----------------------------------
							$_SESSION["isLoggedIn"] = "false";
							$_SESSION["isLoginValid"] = "false";
							#----------------------------------
							$_SESSION["loginFirstName"] = "";
							$_SESSION["loginLastName"] = "";
							header("Location: login3.php");
							#$message = "user wrong and pass wrong";
						}
						elseif($user != $row_array[8] || $pass != $row_array[9])
						{
							#----------------------------------
							$_SESSION["isLoggedIn"] = "true";
							$_SESSION["isLoginValid"] = "false";
							#----------------------------------
							$_SESSION["loginFirstName"] = "";
							$_SESSION["loginLastName"] = "";
							header("Location: login3.php");
							#$message = "user wrong and pass wrong";
						}
						elseif($user == $row_array[8] && $pass == $row_array[9])
						{
							#----------------------------------
							$_SESSION["isLoggedIn"] = "true";
							$_SESSION["isLoginValid"] = "true";
							#----------------------------------
							$_SESSION["loginFirstName"] = $row_array[1];		#append FIRSTNAME
							$_SESSION["loginLastName"] = $row_array[3];			#append LASTNAME (don't use [2] it is middle initial)
							#header("Location: login_successful.php");
							header("Location: login3.php");
							#$message = "user GOOD and pass GOOD";
						}
						/* 
						#VALIDATION FOR LOGIN (IF MATCHED)
						#if($user == $_REQUEST['AgtUserId'] && $pass == $_REQUEST['AgtPassword']) #incorrect, this is self referencing, will always be TRUE
						if($user == $row_array[8] && $pass == $row_array[9])		#CORRECT WAY, $user is what is sent, $row_array[8] is value in SQL
						{							
							#printf("Welcome %s %s, how are you today?", $row_array[1], $row_array[2]);
							print("Your username and password is VALID!");
							#----------------------------------
							$_SESSION["isLoggedIn"] = true;
							$_SESSION["isLoginValid"] = true;
							#----------------------------------
							$_SESSION["loginFirstName"] = $row_array[1];		#append FIRSTNAME
							$_SESSION["loginLastName"] = $row_array[3];			#append LASTNAME (don't use [2] it is middle initial)
							header("Location: login_successful.php");
						}
						#VALIDATION FOR LOGIN (IF DID NOT MATCH)
						else	#PICK LOGOUT
						{
							print("Your username and password IS INVALID!");
							#----------------------------------
							$_SESSION["isLoggedIn"] = false;
							$_SESSION["isLoginValid"] = false;
							#----------------------------------
							$_SESSION["loginFirstName"] = "";
							$_SESSION["loginLastName"] = "";
							header("Location: login3.php");
						} */
						
					}
			
?>