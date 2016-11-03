<?php
		#GLOBAL VARIABLES
		require("variables.php");
		#LOAD FUNCTIONS
		include("d11_review.php");
		
		
		#GET ROW DATA
		$agent_array = array("AgtFirstName"=>"Jon", "AgtMiddleInitial"=>"D", "AgtLastName"=>"Doe", "AgtBusPhone"=>"(403) 123-4564", 
								"AgtEmail"=>"jon.doe@gmail.com", "AgtPosition"=>"Junior Agent", "AgencyId"=>"1");
		
		if (insertData($agent_array, "agents"))
		{
			print("AGENT DATA was added to the database.<br />");
		}
		else
		{
			print("AGENT DATA could NOT be saved to the database.<br />");
		}

?>