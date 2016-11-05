<?php
var_dump($_REQUEST);
		#GLOBAL VARIABLES
		require("variables.php");
		#LOAD FUNCTIONS
		require("functions.php");
		#include("d11_review.php");
		#------FUNCTIONS.PHP update?------
?>
<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<h1>D12 Select a Customer to Update</h1>
		<form method="GET" action="d12_customerupdate.php">
			<select name="CustomerId">			<!-- PRIMARY KEY REFERENCE -->
				<?php
				#-------------------------------
				#DB CONNECT
				$dbh = mysqli_connect($host, $user, $password, $database); 
					#ERROR IF DATABASE DOESN'T CONNECT
					#if (!$dbh)
					if (mysqli_connect_errno())										#ALTERNATIVE (errno)
					{
						print(mysqli_connect_error("DATABASE NOT CONNECTED **************"));		#(error)
					}
				#-------------------------------
				
					#SQL QUERY
					$sql = "select CustomerId, CustFirstName, CustLastName from customers";	
					#SEND TO DATABASE TO (GET QUERY BACK)
					$result = mysqli_query($dbh, $sql);
						if (mysqli_errno($dbh))
						{
							print(mysqli_error($dbh));
							exit;
						}
					#------------ DROPDOWN LIST --------------------
					#FETCH... use array to put in values
						while ($row = mysqli_fetch_row($result))
						{
							print("<option value='$row[0]'>$row[1] $row[2]</option>");
						}
				#-------------------------------
				#DB CLOSE
					mysqli_close($dbh);
				#-------------------------------
				?>
			</select>
			<!-- BUTTON -->
			<input type="submit" value="GetCustomer" />

		</form>
		<!--SELECT * FROM (Customer WHERE CustID=$custId)-->
	</body>
</html>

