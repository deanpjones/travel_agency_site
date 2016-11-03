<?php
	//VARIABLES
	$title = "Customer Form Input Page";
	
	//GLOBAL VARIABLES
	include("variables.php");
	
	#require("header.php");
	
?>

	<!--
	`CustomerId`, `CustFirstName`, `CustLastName`, `CustAddress`, `CustCity`, 
			`CustProv`, `CustPostal`, `CustCountry`, `CustHomePhone`, `CustBusPhone`, `CustEmail`, `AgentId`
	-->

	<h1>Customer Data</h1>
	<form method="get" action="tester_cust.php">
		<table>
			<tr>
				<td>First Name: </td><td><input type="text" name="CustFirstName" /><br /></td>
			</tr>
			<tr>
				<td>Last Name: </td><td><input type="text" name="CustLastName" /><br /></td>
			</tr>
			<tr>
				<td>Address: </td><td><input type="text" name="CustAddress" /><br /></td>
			</tr>
			<tr>
				<td>City: </td><td><input type="text" name="CustCity" /><br /></td>
			</tr>
			<tr>
				<td>Province:  </td><td><input type="text" name="CustProv" /><br /></td>
			</tr>
			<tr>
				<td>Postal Code:  </td><td><input type="text" name="CustPostal" /><br /></td>
			</tr>
			<tr>
				<td>Country:  </td><td><input type="text" name="CustCountry" /><br /></td>
			</tr>
			<tr>
				<td>Phone(home):  </td><td><input type="text" name="CustHomePhone" /><br /></td>
			</tr>
			<tr>
				<td>Phone(work):  </td><td><input type="text" name="CustBusPhone" /><br /></td>
			</tr>
			<tr>
				<td>Email:  </td><td><input type="text" name="CustEmail" /><br /></td>
			</tr>
			<tr>
				<td>AgentId:  </td><td><input type="text" name="AgentId" /><br /></td>
			</tr>
			
			<!-- OPTION SELECT... -->
				
			<tr>
				<td></td><td><input type="submit" value="Save" /><br /></td>
				<!-- URL SENT ON PRESSING BUTTON
						http://localhost/tester.php?AgtFirstName=&AgtMiddleInitial=&AgtLastName=&AgtBusPhone=&AgtEmail=&AgtPosition=&AgencyId=1 -->
			</tr>

		</table>
		
	</form>


<?php
	#require("footer.php");
?>