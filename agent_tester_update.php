<?php
	#---------------------------------------------
	#Dean Jones
	#Nov.11 2016
	#AGENT TESTER (UPDATE SQL DATA)
	#-------------------------
	#SUPPORTING FILES
		#AGENT_FORM_REGISTER.PHP	(AGENT update data form)
		#AGENT_TESTER.PHP			(tester)
		#AGENT_FORM_SUCCESSFUL.PHP	(if validated)
	#---------------------------------------------
	#VARIABLES
	include('variables.php');

	#******************************************************************
	#******************************************************************
	#UPDATE-DATA FUNCTION
	function updateData($data, $table)
	{
		#-------------------------------------------------------------
		 #COLUMN HEADERS
		$keys = array_keys($data);								//grab keys ARRAY
		$colnames = implode(", ", $keys);						//turn ARRAY TO STRING

		#COLUMN VALUES(DATA)		
		$values = array_values($data);							//grab values ARRAY
		$colvalues = "'" . implode("', '", $values) . "'";		//turn ARRAY TO STRING
		
		#SQL (UPDATE) QUERY
		$sql = "UPDATE `agents` SET `AgtFirstName`='$data[AgtFirstName]',`AgtMiddleInitial`='$data[AgtMiddleInitial]',`AgtLastName`='$data[AgtLastName]',
		`AgtBusPhone`='$data[AgtBusPhone]',`AgtEmail`='$data[AgtEmail]',`AgtPosition`='$data[AgtPosition]',
		`AgencyId`='$data[AgencyId]',`AgtUserId`='$data[AgtUserId]',`AgtPassword`='$data[AgtPassword]' WHERE AgentId=$data[AgentId]";
		
/* 		UPDATE `agents` SET `AgentId`=[value-1],`AgtFirstName`=[value-2],`AgtMiddleInitial`=[value-3],`AgtLastName`=[value-4],
		`AgtBusPhone`=[value-5],`AgtEmail`=[value-6],`AgtPosition`=[value-7],
		`AgencyId`=[value-8],`AgtUserId`=[value-9],`AgtPassword`=[value-10] WHERE 1 */
		print($sql);

		#-------------------------------------------------------------
	  	
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
					exit;											#MAKES SURE IT DOESN'T CONTINUE WITHOUT A CONNECTION
				}
					/* 	 $dbh = mysqli_connect($host, $user, $password, $database);
						if (!$dbh)
						{
						 print(mysqli_connect_error());
						 return false;
					} */			
		#END DB CONNECT
		#-------------------------------------------------------------

		#-------------------------------------------------------------
		#SEND QUERY
			if (mysqli_query($dbh, $sql))
			{
				print("<br />*** SQL INSERT successful! ***<br />");
			} 
			else
			{
				print("******************************");
				print("<br />SQL_INSERT_ERROR: " . mysqli_error($dbh) . "<br />");
				print(mysqli_query_error());
				print("******************************");
			}
		#-------------------------------------------------------------
		#DB CLOSE
			mysqli_close($dbh);
		#-------------------------------------------------------------
	}#end UPDATE-DATA FUNCTION
	
	#**********************************
	#RUN QUERY
	updateData($_REQUEST, "agents");
	
	#REDIRECT TO SUCCESSFUL PAGE
	header("Location:agent_form_successful.php");
	#**********************************
	
	#******************************************************************
	#******************************************************************

?>