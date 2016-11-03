<?php
	#?????WHAT IS THIS FOR?
	#UPDATE THE (EDITED DATA) TO THE DATABASE
	/*
	UPDATE `customers` SET `CustomerId`=[value-1],`CustFirstName`=[value-2],`CustLastName`=[value-3],`CustAddress`=[value-4],`CustCity`=[value-5],`CustProv`=[value-6],`CustPostal`=[value-7],`CustCountry`=[value-8],`CustHomePhone`=[value-9],`CustBusPhone`=[value-10],`CustEmail`=[value-11],`AgentId`=[value-12] WHERE 1
	*/

	#------------------
	#SESSION	
	session_start();
	#------------------
   
   include("functions.php");
   
   
   $message = "";
   
   function validate()
   {
	   global $message;
	   if($_REQUEST["CustLastName"] == "")
	   {
		   $message .= "LAST NAME must have a value<br />";					#EMBEDDED CONCATENATION (like (+=))
	   }
	   if($_REQUEST["CustHomePhone"] == "")
	   {
		   $message .= "HOME PHONE must have a value<br />";				#EMBEDDED CONCATENATION (like (+=))
	   }
	   #----------
	   if($message != "")
	   {
		   return false;
	   }
	   else
	   {
		   return true;
	   }
	   #----------
   }
   
   
   
   
   
   if (!isset($_REQUEST['CustFirstName']))
   {
      header("Location: d12_customerupdate.php");
   }
   else
   {
	   if (validate())
	   {
		   #****************************************
		   #(UPDATE) SQL DATA
		   if (updateData($_REQUEST, "customers"))
		   {
			  print("Data was successfully updated to the database");
		   }
		   else
		   {
			  print("Data could not be saved to the database, call tech support");
		   }
		   #****************************************
	   }
	   else
	   {
		  #-------------- 
		  #SESSION
		  if($message)
		  {
			  #$_SESSION["message"] = $message;
				$_SESSION["message"] = $message;
				$_SESSION["data"] = $_REQUEST;
		  }
		  #-------------- 
	      header("Location: d12_customerupdate.php?CustomerId=$_REQUEST[CustomerId]");
	   }
   }

?>