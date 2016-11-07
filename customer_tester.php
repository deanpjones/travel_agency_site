<?php
		#GLOBAL VARIABLES
		require("variables.php");
		#LOAD FUNCTIONS
		require("functions.php");

		var_dump($_REQUEST);
		#******************************************************************
		#******************************************************************
		#VALIDATE (INSERT DATA)
		function validate()
		{
			if ($_REQUEST["CustFirstName"] == "")
			{
				$message1 = "FIRST NAME must have a value.<br />";
				print($message1);
				return false;
			}
			if ($_REQUEST["CustLastName"] == "")
			{
				$message2 = "LAST NAME must have a value.<br />";
				print($message2);
				return false;
			}
			return true;
		}
		
		if (!isset($_REQUEST['CustFirstName']))
		{
			/* header("Location: form_custinsert.php"); */					#POINTS THEM TO ANOTHER PAGE
			header("Location: customer_form.php");
		}
		else
		{
			#GET ROW DATA
		/* $agent_array = array("AgtFirstName"=>"Jon", "AgtMiddleInitial"=>"D", "AgtLastName"=>"Doe", "AgtBusPhone"=>"(403) 123-4564", 
								"AgtEmail"=>"jon.doe@gmail.com", "AgtPosition"=>"Junior Agent", "AgencyId"=>"1"); */
								
				#PHP VALIDATION	
				#if (true)		#validate()		CREATE VALIDATE FUNCTION (replace with TRUE)
				if (validate())					#VALIDATE TEST
				{
						#if (insertData($agent_array, "agents"))
						if (insertData($_REQUEST, "customers"))
						{
							print("CUSTOMER DATA was added to the database.<br />");
						}
						else
						{
							print("CUSTOMER DATA could NOT be saved to the database.<br />");
						}				
				}
		}
		#VALIDATE (INSERT DATA)
		#******************************************************************
		#******************************************************************

		
		
		
		
		


?>