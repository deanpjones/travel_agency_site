<?php
		#INSERT CUSTOMER INFO
		#--------------------
		
		#GLOBAL VARIABLES
			require("variables.php");
		#LOAD FUNCTIONS
			include("functions.php");			#FUNCTION insertData();
		
		$cust_array = array("CustFirstName"=>"Jon", "CustLastName"=>"Johnson", "CustAddress"=>"333 33 Ave SE", "CustCity"=>"Alabama", "CustProv"=>"SK", 
			"CustPostal"=>"Q7Q1K1", "CustCountry"=>"Canada", "CustHomePhone"=>"(403) 222-2222", "CustBusPhone"=>"(403) 333-3333", "CustEmail"=>"Jon.Jonsohn@gmail.com", "AgentId"=>"2");
		
		if (insertData($cust_array, "customers"))
		{
			print("CUSTOMER DATA was added to the database.<br />");
		}
		else
		{
			print("CUSTOMER DATA could NOT be saved to the database.<br />");
		}
		
		#GET ROW DATA
		/* $agent_array = array("AgtFirstName"=>"Jon", "AgtMiddleInitial"=>"D", "AgtLastName"=>"Doe", "AgtBusPhone"=>"(403) 123-4564", 
								"AgtEmail"=>"jon.doe@gmail.com", "AgtPosition"=>"Junior Agent", "AgencyId"=>"1"); */
								
		#GET (INSERT QUERY from SQL)
		/* INSERT INTO `travelexperts`.`customers` (`CustomerId`, `CustFirstName`, `CustLastName`, `CustAddress`, `CustCity`, `CustProv`, `CustPostal`, `CustCountry`, `CustHomePhone`, `CustBusPhone`, `CustEmail`, `AgentId`) 
			VALUES (NULL, 'z', 'z', 'z', 'z', 'z', 'z', 'a', 'a', 'a', 'a', '9'); */
		#GET (PHP QUERY from SQL)
		/* $sql = "INSERT INTO `travelexperts`.`customers` (`CustomerId`, `CustFirstName`, `CustLastName`, `CustAddress`, `CustCity`, `CustProv`, `CustPostal`, `CustCountry`, `CustHomePhone`, `CustBusPhone`, `CustEmail`, `AgentId`) 
			VALUES (NULL, \'z\', \'z\', \'z\', \'z\', \'z\', \'z\', \'a\', \'a\', \'a\', \'a\', \'9\');"; */		
		#USE ABOVE TO BUILD ARRAY OF (KEYS)

?>