<?php
	//VARIABLES
	$title = "Agent Entry Page";
	
	//GLOBAL VARIABLES
	include("variables.php");
	
	#require("header.php");
	
	//VALIDATE FUNCTION
	/*function validate()
	{
		 if ($_REQUEST["AgtLastName"] == "")
		{
			$message = "LAST NAME must have a value.<br />";
			return false;
		}
		if ($_REQUEST["AgtPosition"] == "")
		{
			$message = "POSITION must have a value.<br />";
			return false;
		}
		return true;
	} */
	
?>


	<h1>Agent Data</h1>
	<form method="get" action="tester.php">
		<table>
			<tr>
				<td>First Name: </td><td><input type="text" name="AgtFirstName" /><br /></td>
			</tr>
			<tr>
				<td>Middle Name: </td><td><input type="text" name="AgtMiddleInitial" /><br /></td>
			</tr>
			<tr>
				<td>Last Name: </td><td><input type="text" name="AgtLastName" /><br /></td>
			</tr>
			<tr>
				<td>Business Ph: </td><td><input type="text" name="AgtBusPhone" /><br /></td>
			</tr>
			<tr>
				<td>Email: </td><td><input type="text" name="AgtEmail" /><br /></td>
			</tr>
			<tr>
				<td>Position:  </td><td><input type="text" name="AgtPosition" /><br /></td>
			</tr>
			<tr>
				<!-- <td>Agency Id: </td><td><input type="text" name="AgencyId" /><br /></td> *-->
				<td>Agent Id:</td>
				<td>
					<select name="AgencyId">
					<?php
						#DB CONNECT
						$dbh = mysqli_connect($host, $user, $password, $database); 
						//put connection checking here
							if (!$dbh)
							{
								print("<br />DB_CONNECTION_ERROR:  " . mysqli_connect_error() . "<br />");
								#exit;
								return false;
							}
						$sql = "select AgencyId, AgncyAddress, AgncyCity, AgncyProv, AgncyCountry from agencies";
						$result = mysqli_query($dbh, $sql);
						//check if result is there
							if (!$result)
							{
								print("<br />SQL_INSERT_ERROR: " . mysqli_error() . "<br />");
								#print(mysqli_query_error());
							}
						#OPTION (CREATES A PULLDOWN from info in the DATABASE)
						while($row = mysqli_fetch_row($result))
						{
							print("<option value='$row[0]'>$row[1], $row[2], $row[3], $row[4]</option>");
						}
						#DB CLOSE
						mysqli_close($dbh);
					?>
					</select>
				</td>
			</tr>
			<tr>
				<td></td><td><input type="submit" value="Save" /><br /></td>
				<!-- URL SENT ON PRESSING BUTTON
						http://localhost/tester.php?AgtFirstName=&AgtMiddleInitial=&AgtLastName=&AgtBusPhone=&AgtEmail=&AgtPosition=&AgencyId=1 -->
			</tr>
		 
		 
		 
		 
		
		 
		
		</table>
		<!-- AgentId, AgtFirstName, AgtMiddleInitial, AgtLastName, AgtBusPhone, AgtEmail, AgtPosition, AgencyId -->
	</form>


<?php
	#require("footer.php");
?>