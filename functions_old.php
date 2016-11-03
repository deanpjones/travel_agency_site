
<?php
	#GLOBAL VARIABLES
		require("variables.php");
		
	#CONNECT TO DATABASE
	function db_connect()
	{
		#dgh (database handle)
		$dbh = mysqli_connect("localhost", "dean", "password", "travelexperts");

		if (!$dbh)
		{
			print(mysqli_connect_error());
		}
		else
		{
			print("connected");
		}
	}
	
	#DO SOMETHING...
	#$table = `customers`
	#$column = `CustomerId`
	#$value =  '$data[0]'
	function db_insert($table, $column, $value)
	{
		$sql = "INSERT INTO `travelexperts`.`customers` (`CustomerId`, `CustFirstName`, `CustLastName`, `CustAddress`,
		`CustCity`, `CustProv`, `CustPostal`, `CustCountry`, `CustHomePhone`, `CustBusPhone`, `CustEmail`,
		`AgentId`) VALUES (NULL, '$data[0]', '$data[1]', '$data[2]', '$data[3]', '$data[4]', '$data[5]', '$data[6]', '$data[7]', '$data[8]', '$data[9]', '$data[10]')";
		
		$result = mysqli_query($dbh, $sql);
			if (!$result)
			{
				print(mysqli_error($dbh));
			}
			print("result=$result");
	}
	
	#CLOSE DATABASE CONNECTION
	function db_close()
	{
		mysqli_close($dbh);
	}
?>
