<?php
	#FUNCTIONS
	#updateData()
	#insertData()
	#insertData2()  ???
include('variables.php');
	#----------------------------------
	#UPDATEDATA FUNCTION (HARVEY)
	#......
					function updateData($data, $table)
					{
					  global $host, $user, $password, $database;
					  $keys = array_keys($data);
					  //array_shift($keys)
					  $colnames = implode(", ", $keys);
					  
					  $values = array_values($data);
					  $colvalues = "'" . implode("', '", $values) . "'";
					  
					  //??????????????????????????????????????
					  //??????????????????????????????????????
					  /* $sql = "INSERT INTO $table ($colnames) VALUES ($colvalues)"; */
					  //???????????    $data['CustFirstName']
					  //????????      	`CustomerId`=[value-1],
					  //???????? 		QUOTES ['CustFirstName']???
					  $sql = "UPDATE `customers` SET `CustFirstName`='$data[CustFirstName]',`CustLastName`='$data[CustLastName]',
					  `CustAddress`='$data[CustAddress]',`CustCity`='$data[CustCity]',`CustProv`='$data[CustProv]',`CustPostal`='$data[CustPostal]',`CustCountry`='$data[CustCountry]',
					  `CustHomePhone`='$data[CustHomePhone]',`CustBusPhone`='$data[CustBusPhone]',`CustEmail`='$data[CustEmail]',`AgentId`=$data[AgentId] WHERE CustomerId=$data[CustomerId]";

					  #$sql = "UPDATE `customers` SET `CustFirstName`='$data[CustFirstName]',`CustLastName`='$data[CustLastName]',
						#`CustAddress`='$data[CustAddress]',`CustCity`='$data[CustCity]',
						#`CustProv`='$data[CustProv]',`CustPostal`='$data[CustPostal]',`CustCountry`='$data[CustCountry]',`CustHomePhone`='$data[CustHomePhone]',`CustBusPhone`='$data[CustBusPhone]',`CellPhone`='$data[CellPhone]',`CustEmail`='$data[CustEmail]',`AgentId`=$data[AgentId] WHERE CustomerId=$data[CustomerId]";
					  
					  
					/* `CustomerId`, `CustFirstName`, `CustLastName`, `CustAddress`, `CustCity`, 
							`CustProv`, `CustPostal`, `CustCountry`, `CustHomePhone`, `CustBusPhone`, `CustEmail`, `AgentId` */

					  print($sql);
					  /////////////////////////
				/* 	  UPDATE `customers` SET `CustomerId`=[value-1],`CustFirstName`=[value-2],`CustLastName`=[value-3],
					  `CustAddress`=[value-4],`CustCity`=[value-5],`CustProv`=[value-6],`CustPostal`=[value-7],`CustCountry`=[value-8],
					  `CustHomePhone`=[value-9],`CustBusPhone`=[value-10],`CustEmail`=[value-11],`AgentId`=[value-12] WHERE 1 */
					  ///////////////////////
					  
					  //??????????????????????????????????????
					  //??????????????????????????????????????

					  //connect to database and run query
					  $dbh = mysqli_connect($host, $user, $password, $database);
					  if (!$dbh)
					  {
						 print(mysqli_connect_error());
						 return false;
					  }
					  
					  $result = mysqli_query($dbh, $sql);
					  if (!$result)
					  {
						 print(mysqli_error($dbh));
					  }
					  
					  mysqli_close($dbh);
					  return $result;
					}
	#----------------------------------
	
	function insertData($data, $table)
	{
		#-------------------------------------------------------------
		#DB INSERT
		//array_shift($keys);			//DON'T NEED TO HAVE USER FILL IN AgencyId
		$keys = array_keys($data);		//grab keys ARRAY
			print_r($keys);				//Array ( [0] => AgtFirstName [1] => AgtMiddleInitial [2] => AgtLastName [3] => AgtBusPhone [4] => AgtEmail [5] => AgtPosition [6] => AgencyId ) 
			print("<br />");
			print("<br />");
			
		$colnames = implode(", ", $keys);						//turn ARRAY TO STRING
		
		$values = array_values($data);							//grab values ARRAY
		$colvalues = "'" . implode("', '", $values) . "'";		//turn ARRAY TO STRING
		
		$sql = "INSERT INTO $table ($colnames) VALUES ($colvalues);";
		print($sql);
		print("<br />");
		print("<br />");
		
		/* 		#GET ROW DATA
		$agent_array = array("AgtFirstName"=>"Jon", "AgtMiddleInitial"=>"D", "AgtLastName"=>"Doe", "AgtBusPhone"=>"(403) 123-4564", 
								"AgtEmail"=>"jon.doe@gmail.com", "AgtPosition"=>"Junior Agent", "AgencyId"=>"1"); */
		#-------------------------------------------------------------
		#DB CONNECT
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
		#VALIDATE QUERY
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
			return true;
		#-------------------------------------------------------------
		#DB CLOSE
		mysqli_close($dbh);
		#-------------------------------------------------------------
	}
	
	/* $sql = "INSERT INTO `agents` 
				(AgentId, AgtFirstName, AgtMiddleInitial, AgtLastName, AgtBusPhone, AgtEmail, AgtPosition, AgencyId) 
					VALUES (NULL, 'a', 'b', 'c', 'd', 'e', 'f', '6');"; */
	
	#CREATE SQL QUERY
	#INSERT INTO `travelexperts`.`agents` (`AgentId`, `AgtFirstName`, `AgtMiddleInitial`, `AgtLastName`, `AgtBusPhone`, `AgtEmail`, `AgtPosition`, `AgencyId`) VALUES (NULL, 'a', 'b', 'c', 'd', 'e', 'f', '6');
	#CREATE PHP CODE (remove '\' on all VALUES)
	#$sql = "INSERT INTO `travelexperts`.`agents` (`AgentId`, `AgtFirstName`, `AgtMiddleInitial`, `AgtLastName`, `AgtBusPhone`, `AgtEmail`, `AgtPosition`, `AgencyId`) VALUES (NULL, 'a', 'b', 'c', 'd', 'e', 'f', '6');";

	
	
	
	
	
	
	
	
	
	################################################
	#PREPARED STATEMENTS
	function insertData2($data, $table)
	{
		#-------------------------------------------------------------
		#DB INSERT
		//array_shift($keys);			//DON'T NEED TO HAVE USER FILL IN AgencyId
		$keys = array_keys($data);		//grab keys ARRAY
			print_r($keys);				//Array ( [0] => AgtFirstName [1] => AgtMiddleInitial [2] => AgtLastName [3] => AgtBusPhone [4] => AgtEmail [5] => AgtPosition [6] => AgencyId ) 
			print("<br />");
			print("<br />");
			
		$colnames = implode(", ", $keys);						//turn ARRAY TO STRING
		
		$values = array_values($data);							//grab values ARRAY
		$colvalues = "'" . implode("', '", $values) . "'";		//turn ARRAY TO STRING
		
		#$sql = "INSERT INTO $table ($colnames) VALUES ($colvalues);";
		
/* #PREPARED STATEMENT...
$sql = "INSERT INTO $table ($colnames) VALUES (? ? ? ? ? ? ?);";
 */		
		
		
		print($sql);
		print("<br />");
		print("<br />");
		
		/* 		#GET ROW DATA
		$agent_array = array("AgtFirstName"=>"Jon", "AgtMiddleInitial"=>"D", "AgtLastName"=>"Doe", "AgtBusPhone"=>"(403) 123-4564", 
								"AgtEmail"=>"jon.doe@gmail.com", "AgtPosition"=>"Junior Agent", "AgencyId"=>"1"); */
		#-------------------------------------------------------------
		#DB CONNECT
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
		#VALIDATE QUERY
/*
#-----------------------------------
#-----------------------------------
#PREPARED STATEMENT???
$stmt = mysqli_prepare($dgn, $sql);
#('s') ARE VALUES IN ARRAY?
mysqli_stmt_bind_param($stmt, "ssssssi", $values[0], $values[1], $values[2], $values[3], $values[4], $values[5], $values[6]);		
mysqli_execute($stmt);
$result = mysqli_stmt_affected_rows($stmt);
#-----------------------------------
#-----------------------------------
*/
		
		$result = mysqli_query($dbh, $sql);
			if (!$result)
			{
				print("<br />SQL_INSERT_ERROR: " . mysqli_error() . "<br />");
				#print(mysqli_query_error());
			}
			#print ("***" . mysqli_info($dbh) . "***" );
			print("<br />*** SQL QUERY successfully ***<br />");
			return true;
		#-------------------------------------------------------------
		#DB CLOSE
		mysqli_close($dbh);
		#-------------------------------------------------------------
	}
	

?>

