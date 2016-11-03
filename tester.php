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
			if ($_REQUEST["AgtLastName"] == "")
			{
				$message = "LAST NAME must have a value.<br />";
				printf($message);
				return false;
			}
			if ($_REQUEST["AgtPosition"] == "")
			{
				$message = "POSITION must have a value.<br />";
				printf($message);
				return false;
			}
			return true;
		}
		
		if (!isset($_REQUEST['AgtFirstName']))
		{
			header("Location: agentinsert.php");					#POINTS THEM TO ANOTHER PAGE
		}
		else
		{
			#GET ROW DATA
		/* $agent_array = array("AgtFirstName"=>"Jon", "AgtMiddleInitial"=>"D", "AgtLastName"=>"Doe", "AgtBusPhone"=>"(403) 123-4564", 
								"AgtEmail"=>"jon.doe@gmail.com", "AgtPosition"=>"Junior Agent", "AgencyId"=>"1"); */
								
				#PHP VALIDATION	
				if (true)		#validate()		CREATE VALIDATE FUNCTION (replace with TRUE)
				#if (validate())					#VALIDATE TEST
				{
						#if (insertData($agent_array, "agents"))
						if (insertData($_REQUEST, "agents"))
						{
							print("AGENT DATA was added to the database.<br />");
						}
						else
						{
							print("AGENT DATA could NOT be saved to the database.<br />");
						}				
				}
		}
		
		
		
		
		


?>