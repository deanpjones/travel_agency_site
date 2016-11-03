<?php
	#DB CONNECT
	
	#DB INSERT
	function insertData($data, $table)
	{
		
		//array_shift($keys);			//DON'T NEED TO HAVE USER FILL IN AgencyId
		$keys = array_keys($data);				//grab keys ARRAY
			print_r($keys);				//Array ( [0] => AgtFirstName [1] => AgtMiddleInitial [2] => AgtLastName [3] => AgtBusPhone [4] => AgtEmail [5] => AgtPosition [6] => AgencyId ) 
			print("<br />");
			print("<br />");
			
		$colnames = implode(", ", $keys);		//turn ARRAY TO STRING
		
		$values = array_values($data);			//grab values ARRAY
		$colvalues = "'" . implode("', '", $values) . "'";	//turn ARRAY TO STRING
		
		$sql = "INSERT INTO $table ($colnames) VALUES ($colvalues);";
		print($sql);
		print("<br />");
		print("<br />");
		
		/* 		#GET ROW DATA
		$agent_array = array("AgtFirstName"=>"Jon", "AgtMiddleInitial"=>"D", "AgtLastName"=>"Doe", "AgtBusPhone"=>"(403) 123-4564", 
								"AgtEmail"=>"jon.doe@gmail.com", "AgtPosition"=>"Junior Agent", "AgencyId"=>"1"); */
		#-------------------------------------------------------------
		global $host, $user, $password, $database;						#NEED TO PASS GLOBAL VARIABLES.
		$dbh = mysqli_connect($host, $user, $password, $database);
		#$dbh = mysqli_connect("localhost", "dean", "password", "travelexperts");

		if (!$dbh)
		{
			print("<br />DB_CONNECTION_ERROR:  " . mysqli_connect_error() . "<br />");
			#exit;
			return false;
		}
		else
		{
			print("<br />DB_CONNECTION:  Successful!");
		}
		#-------------------------------------------------------------
		$result = mysqli_query($dbh, $sql);
			if (!$result)
			{
				print("<br />SQL_INSERT_ERROR: " . mysqli_error() . "<br />");
				#print(mysqli_query_error());
			}
			#print ("***" . mysqli_info($dbh) . "***" );
			print("<br />*** SQL - INSERTED successfully ***<br />");
			return true;
		#-------------------------------------------------------------
		#CLOSE DB
		mysqli_close($dbh);
	}	
		/* $sql = "INSERT INTO `agents` 
					(AgentId, AgtFirstName, AgtMiddleInitial, AgtLastName, AgtBusPhone, AgtEmail, AgtPosition, AgencyId) 
						VALUES (NULL, 'a', 'b', 'c', 'd', 'e', 'f', '6');"; */
	
	#???HOW TO RUN FUNCTION 		insertData(?, `agents`)
	
	#CREATE SQL QUERY
	#INSERT INTO `travelexperts`.`agents` (`AgentId`, `AgtFirstName`, `AgtMiddleInitial`, `AgtLastName`, `AgtBusPhone`, `AgtEmail`, `AgtPosition`, `AgencyId`) VALUES (NULL, 'a', 'b', 'c', 'd', 'e', 'f', '6');
	#CREATE PHP CODE (remove '\' on all VALUES)
	#$sql = "INSERT INTO `travelexperts`.`agents` (`AgentId`, `AgtFirstName`, `AgtMiddleInitial`, `AgtLastName`, `AgtBusPhone`, `AgtEmail`, `AgtPosition`, `AgencyId`) VALUES (NULL, 'a', 'b', 'c', 'd', 'e', 'f', '6');";
	

?>