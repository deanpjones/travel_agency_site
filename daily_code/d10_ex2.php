
	
<?php
	$data = array("fred", "smith", "1 home st.", "Calgary", "AB", "Q1Q1Q1", "Canada", "555-5555", "273-7373", "me@email.com", 5);

	require("header.php");
?>

<?php
	#CONNECT TO DATABASE
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
	
	#DO SOMETHING (INSERT some data)
	$sql = "INSERT INTO `travelexperts`.`customers` (`CustomerId`, `CustFirstName`, `CustLastName`, `CustAddress`,
	`CustCity`, `CustProv`, `CustPostal`, `CustCountry`, `CustHomePhone`, `CustBusPhone`, `CustEmail`,
	`AgentId`) VALUES (NULL, '$data[0]', '$data[1]', '$data[2]', '$data[3]', '$data[4]', '$data[5]', '$data[6]', '$data[7]', '$data[8]', '$data[9]', '$data[10]')";
	
	$result = mysqli_query($dbh, $sql);
		#IF NOT $result?
		if (!$result)
		{
			print(mysqli_error($dbh));
		}
		print("result=$result");
	
	#CLOSE DATABASE CONNECTION
		mysqli_close($dbh);
	
?>
