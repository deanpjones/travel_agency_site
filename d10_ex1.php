
	
<?php
	require("header.php");
?>

<?php
	#CONNECT TO DATABASE
		#dgh (database handle)
		$dbh = mysqli_connect("localhost", "dean", "password", "travelexperts");
		#HOSST IS WRONG
		#Warning: mysqli_connect(): php_network_getaddresses: getaddrinfo failed: No such host is known. in C:\wamp\www\d10_ex1.php on line 9
		#PASSWORD IS WRONG
		#Warning: mysqli_connect(): (HY000/1045): Access denied for user 'dean2'@'localhost' (using password: YES) in C:\wamp\www\d10_ex1.php on line 9
		if (!$dbh)
		{
			print(mysqli_connect_error());
		}
		else
		{
			print("connected");
		}
	
	#DO SOMETHING (QUERY SELECT)
		#$result = mysqli_query($dbh, "SELECT * FROM `customers`");						//ALL CUSTOMER DATA
		#$result = mysqli_query($dbh, "SELECT * FROM `customers` WHERE AgentID=1");		//FILTER AGENTID#
		$result = mysqli_query($dbh, "SELECT `CustFirstName`,`CustLastName`,`CustHomePhone` FROM `customers` WHERE `AgentId`=1");		//* WILDCARD
		
		#HOW TO SEE, BEFORE LOOPING					#print("$result"); 		#echo $result;
		print("<table border='1'>");
		$headernotprinted = true;					#PRINT ONCE ONLY
		while($row = mysqli_fetch_row($result))
		{
#???header numbers?			#COLUMN HEADERS?	
			if ($headernotprinted)
			{
				$keys = array_keys($row);
				print("<tr>");
					foreach ($keys as $key) {
						print("<th>" . $key . "</th>");
					}
				print("</tr>");
				$headernotprinted = false;			#WILL RESET AFTER FIRST PASS
			}

			#PRINT DATA
			print("<tr>");
				foreach ($row as $col) {
					print("<td>" . $col . "</td>");
				}
			print("</tr>");
		}
		print("</table>");
	
	#CLOSE DATABASE CONNECTION
		mysqli_close($dbh);
	
?>
