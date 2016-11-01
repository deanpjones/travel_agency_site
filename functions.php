
	
<?php
	#require("header.php");
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
	#DO SOMETHING...
	
	#CLOSE DATABASE CONNECTION
	mysqli_close($dbh);
	
?>
