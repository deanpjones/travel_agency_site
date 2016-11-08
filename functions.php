<?php
	#FUNCTIONS
	#updateData()
	#insertData()
	#insertData2()  ???
	
	#VARIABLES
	include('variables.php');
		
	#-------------------------------------------------------------
	#DB CONNECT
	function db_connect()
	{
		#global $dbh;
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
				#return false;	#???RETURN FALSE?
				return $dbh;
			}
				/* 	  $dbh = mysqli_connect($host, $user, $password, $database);
					if (!$dbh)
					{
					 print(mysqli_connect_error());
					 return false;
				} */			
	}#END DB CONNECT
	#-------------------------------------------------------------
	
	#-------------------------------------------------------------
	#DB CLOSE
	function db_close()
	{
		global $dbh;
		mysqli_close($dbh);
	}#END DB CLOSE
	#-------------------------------------------------------------
	
	
	#******************************************************************
	#******************************************************************
	#UPDATEDATA FUNCTION

	function updateData($data, $table)
	{
	  /* global $host, $user, $password, $database; */
	  #??COLUMN HEADERS
	  $keys = array_keys($data);
	  $colnames = implode(", ", $keys);
	  #??COLUMN VALUES(DATA)
	  $values = array_values($data);
	  $colvalues = "'" . implode("', '", $values) . "'";
	  
	  #SQL (UPDATE) QUERY
	  $sql = "UPDATE `customers` SET `CustFirstName`='$data[CustFirstName]',`CustLastName`='$data[CustLastName]',
	  `CustAddress`='$data[CustAddress]',`CustCity`='$data[CustCity]',`CustProv`='$data[CustProv]',`CustPostal`='$data[CustPostal]',`CustCountry`='$data[CustCountry]',
	  `CustHomePhone`='$data[CustHomePhone]',`CustBusPhone`='$data[CustBusPhone]',`CustEmail`='$data[CustEmail]',`AgentId`=$data[AgentId] WHERE CustomerId=$data[CustomerId]";

			  #$sql = "UPDATE `customers` SET `CustFirstName`='$data[CustFirstName]',`CustLastName`='$data[CustLastName]',
				#`CustAddress`='$data[CustAddress]',`CustCity`='$data[CustCity]',
				#`CustProv`='$data[CustProv]',`CustPostal`='$data[CustPostal]',`CustCountry`='$data[CustCountry]',`CustHomePhone`='$data[CustHomePhone]',`CustBusPhone`='$data[CustBusPhone]',`CellPhone`='$data[CellPhone]',`CustEmail`='$data[CustEmail]',`AgentId`=$data[AgentId] WHERE CustomerId=$data[CustomerId]";
				  
			/* `CustomerId`, `CustFirstName`, `CustLastName`, `CustAddress`, `CustCity`, 
					`CustProv`, `CustPostal`, `CustCountry`, `CustHomePhone`, `CustBusPhone`, `CustEmail`, `AgentId` */

	  print($sql);
	  
	  	#------------------
		#DB CONNECT
		db_connect();
		#------------------
			//RUN (UPDATE) QUERY
			global $dbh;
			$result = mysqli_query($dbh, $sql);
			if (!$result)
			{
				print(mysqli_error($dbh));
			}
			return $dbh;
		#------------------
		#DB CLOSE
		db_close();
		#------------------
			return $result;
	}	
				/////////////////////////
			/* 	  UPDATE `customers` SET `CustomerId`=[value-1],`CustFirstName`=[value-2],`CustLastName`=[value-3],
				  `CustAddress`=[value-4],`CustCity`=[value-5],`CustProv`=[value-6],`CustPostal`=[value-7],`CustCountry`=[value-8],
				  `CustHomePhone`=[value-9],`CustBusPhone`=[value-10],`CustEmail`=[value-11],`AgentId`=[value-12] WHERE 1 */
				///////////////////////

	#UPDATEDATA FUNCTION
	#******************************************************************
	#******************************************************************

	#~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
	
	#******************************************************************
	#******************************************************************
	#INSERTDATA FUNCTION
	function insertData($data, $table)
	{
		#-------------------------------------------------------------
		 #??COLUMN HEADERS
		$keys = array_keys($data);								//grab keys ARRAY
		$colnames = implode(", ", $keys);						//turn ARRAY TO STRING
			//print_r($keys);				//Array ( [0] => AgtFirstName [1] => AgtMiddleInitial [2] => AgtLastName [3] => AgtBusPhone [4] => AgtEmail [5] => AgtPosition [6] => AgencyId ) 
		#??COLUMN VALUES(DATA)		
		$values = array_values($data);							//grab values ARRAY
		$colvalues = "'" . implode("', '", $values) . "'";		//turn ARRAY TO STRING
		
		#SQL (INSERT) QUERY
		$sql = "INSERT INTO $table ($colnames) VALUES ($colvalues);";
		print($sql);
	
				/* 		#GET ROW DATA
				$agent_array = array("AgtFirstName"=>"Jon", "AgtMiddleInitial"=>"D", "AgtLastName"=>"Doe", "AgtBusPhone"=>"(403) 123-4564", 
										"AgtEmail"=>"jon.doe@gmail.com", "AgtPosition"=>"Junior Agent", "AgencyId"=>"1"); */
		#-------------------------------------------------------------
	  	
		#------------------
		#DB CONNECT
		db_connect();
		#------------------

		#-------------------------------------------------------------
		#VALIDATE QUERY
		global $dbh;
		print($_REQUEST['CustFirstName']);
		$result = mysqli_query($dbh, $sql);
			if (!$result)
			{
				print("******************************");
				print("<br />SQL_INSERT_ERROR: " . mysqli_error($dbh) . "<br />");
				print(mysqli_query_error());
				print("******************************");
			}
			#print ("***" . mysqli_info($dbh) . "***" );
			print("<br />*** SQL QUERY successfully ***<br />");
			
			/* return true; */
			return $result;
		#------------------
		#DB CLOSE
		db_close();
		#------------------
	}
	
			/* $sql = "INSERT INTO `agents` 
					(AgentId, AgtFirstName, AgtMiddleInitial, AgtLastName, AgtBusPhone, AgtEmail, AgtPosition, AgencyId) 
						VALUES (NULL, 'a', 'b', 'c', 'd', 'e', 'f', '6');"; */
			
			#CREATE SQL QUERY
			#INSERT INTO `travelexperts`.`agents` (`AgentId`, `AgtFirstName`, `AgtMiddleInitial`, `AgtLastName`, `AgtBusPhone`, `AgtEmail`, `AgtPosition`, `AgencyId`) VALUES (NULL, 'a', 'b', 'c', 'd', 'e', 'f', '6');
			#CREATE PHP CODE (remove '\' on all VALUES)
			#$sql = "INSERT INTO `travelexperts`.`agents` (`AgentId`, `AgtFirstName`, `AgtMiddleInitial`, `AgtLastName`, `AgtBusPhone`, `AgtEmail`, `AgtPosition`, `AgencyId`) VALUES (NULL, 'a', 'b', 'c', 'd', 'e', 'f', '6');";

	#INSERTDATA FUNCTION
	#******************************************************************
	#******************************************************************
	
	#~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
	
	
?>

