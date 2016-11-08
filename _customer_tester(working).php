<?php
		#GLOBAL VARIABLES
		require("variables.php");
		#LOAD FUNCTIONS
		require("functions.php");
		#include("d11_review.php");
		#------FUNCTIONS.PHP update?------
		
		#VALIDATE
		function validate()
		{
			#TEST IF ALL TRUE
			if	(
				test("CustFirstName", "testFIRST NAME must have a value.<br />") &&
				test("CustLastName", "testLAST NAME must have a value.<br />")
				)
				return true;
		}
		
		#TEST FOR EMPTY FIELD (returns FALSE)
		function test($key, $desc_ifempty)
		{
			if ($_REQUEST[$key] == "")
			{
				print($desc_ifempty);
				return false;
			}
			return true;
		}
		#test("CustFirstName", "FIRST NAME must have a value.<br />");

		#-------------------------
		
		
		
		if (!isset($_REQUEST['CustFirstName']))
		{
			header("Location: form_custinsert.php");					#POINTS THEM TO ANOTHER PAGE
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
		
		
		
		
		


?>