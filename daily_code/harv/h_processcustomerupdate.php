<?php
   session_start();
   print(session_id());
   include("functions.php");
   
   $message = "";
   
   function validate()
   {
	  global $message;
	  if ($_REQUEST["CustLastName"] == "")
	  {
	     $message .= "Last Name must have a value<br />";
	  }
	  if ($_REQUEST["CustHomePhone"] == "")
	  {
	     $message .= "Home Phone Number must have a value<br />";
	  }
	  
	  if ($message != "")
	  {
	     return false;
	  }
	  else
	  {
	     return true;
	  }
   }
   
   if (!isset($_REQUEST['CustFirstName']))
   {
      header("Location: customerupdate.php");
   }
   else
   {
	   if (validate())
	   {
		   if (updateData($_REQUEST, "customers"))
		   {
			  print("Data was successfully updated to the database");
		   }
		   else
		   {
			  print("Data could not be saved to the database, call tech support");
		   }
	   }
	   else
	   {
	      if ($message)
		  {
		     $_SESSION["message"] = $message;
			 $_SESSION["data"] = $_REQUEST;
		  }
		  header("Location: customerupdate.php?CustomerId=$_REQUEST[CustomerId]");
	   }
   }
?>
