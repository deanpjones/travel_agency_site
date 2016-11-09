<?php
   session_start();
   include("variables.php");
   if (!isset($_REQUEST["CustomerId"]))
   {
      header("Location: customerlist.php");
   }
   else
   {
      $con = mysqli_connect($host, $user, $password, $database);
	  if (!$con)
	  {
	     print(mysqli_connect_error());
		 exit;
	  }
	  $sql = "select * from customers where CustomerId=?";
	  $stmt = mysqli_prepare($con, $sql);
	  mysqli_stmt_bind_param($stmt, "i", $_REQUEST["CustomerId"]);
	  mysqli_execute($stmt);
	  mysqli_stmt_bind_result($stmt, $custid, $fname, $lname, $address, $city, $prov, $postal, $country, $homephone, $busphone, $cellphone, $email, $agentid);
	  if (mysqli_stmt_fetch($stmt))
	  {
	     //do nothing at this point
	  }
	  else
	  {
	     print("Something went wrong");
	  }
	  mysqli_close($con);
   }
?>
<!DOCTYPE html>
<html>
   <head>
      <title>My Main Page</title>
	  <style>
		 input[value='a'] {
		    background-color: pink;
		 }
		 .info {
		    position:absolute;
			right: 10%;
			top: 10%;
			width:50%;
			background-color: violet;
			visibility: hidden;
		 }
	  </style>
	  <script>
	     //var myfname;
		 function validate()
		 {
		    var status = true;
			var message = "";
			var myfname = document.getElementById("fname");
			if (myfname.value == "")
			{
			   message += "First Name must have a value<br />";
			   myfname.style.backgroundColor = "red";
			   status = false;
			}
			var mylname = document.getElementById("lname");
			if (mylname.value == "")
			{
			   message += "Last Name must have a value<br />";
			   mylname.style.backgroundColor = "red";
			   mylname.focus();
			   status = false;
			}
			
			var phone = document.getElementById("phone");
			if (phone.value == "")
			{
			   message += "Phone must have a value<br />";
			   phone.style.backgroundColor = "red";
			   phone.focus();
			   status = false;
			}
			
			var postal = document.getElementById("postal");
			if (postal.value == "")
			{
			   message += "Postal must have a value<br />";
			   postal.style.backgroundColor = "red";
			   postal.focus();
			   status = false;
			}
			else
			{
			   postal.value = postal.value.toUpperCase().trim();
			   if (!/^[A-Z]\d[A-Z]\s?\d[A-Z]\d$/.test(postal.value))
			   {
				   message += "Postal format is incorrect<br />";
				   postal.style.backgroundColor = "red";
				   postal.focus();
				   status = false;
			   }
			}
			if (message != "")
            {
			   document.getElementById("message").innerHTML = message;
			}
			else
            {
			   document.getElementById("message").innerHTML = "";
			}			
			
			if (status)
			{
			   return confirm("continue to submit?");
			}
			else
			{
			   return false;
			}
		 }
		 
		 function showHideInfo(id, visCode)
		 {
		    document.getElementById(id).style.visibility = visCode;
		 }
	  </script>
   </head>
   <body>
      <h1>Customer Update Form</h1>
	  <div>
	  <?php
	     if (isset($_SESSION["message"]))
		 {
		    print($_SESSION["message"]);
			unset($_SESSION["message"]);
		 }
	  ?>
	  </div>
	  <form method="post" action="processcustomerupdate.php">
		 Customer Id:<input type="text" id="custid" name="CustomerId" value="<?php print($custid); ?>" readonly="readonly" /><br />
	     First Name:<input type="text" id="fname" name="CustFirstName" value="<?php print($fname); ?>"onfocus="showHideInfo('fn', 'visible')" onblur="showHideInfo('fn', 'hidden')" /><br />
	     Last Name:<input type="text" id="lname" name="CustLastName" onfocus="showHideInfo('ln', 'visible')" onblur="showHideInfo('ln', 'hidden')" value="<?php print($lname); ?>" /><br />
		 Address:<input type="text" id="address" name="CustAddress" value="<?php print($address); ?>" /><br />
		 City:<input type="text" id="city" name="CustCity" value="<?php print($city); ?>" /><br />
		 Province:<input type="text" id="prov" name="CustProv" value="<?php print($prov); ?>" /><br />
		 Postal/Zip:<input type="text" id="postal" name="CustPostal" onfocus="showHideInfo('pc', 'visible')" onblur="showHideInfo('pc', 'hidden')" value="<?php print($postal); ?>" /><br />
		 Country:<input type="text" id="country" name="CustCountry" value="<?php print($country); ?>" /><br />
	     Phone:<input type="text" id="phone" name="CustHomePhone" onfocus="showHideInfo('ph', 'visible')" onblur="showHideInfo('ph', 'hidden')" value="<?php print($homephone); ?>" /><br />
		 Business Phone:<input type="text" id="busphone" name="CustBusPhone" value="<?php print($busphone); ?>" /><br />
		 Cell Phone:<input type="text" id="cellphone" name="CellPhone" value="<?php print($cellphone); ?>" /><br />
		 Email:<input type="text" id="email" name="CustEmail" value="<?php print($email); ?>" /><br />
		 Agent Id:<input type="text" id="agentid" name="AgentId" value="<?php print($agentid); ?>" /><br />
		 <input type="submit" />
		 <input type="reset" onclick="return window.confirm('Did you really want to reset?')" />
	  </form>
	  <p id="message" style="background-color:yellow"></p>
	  <p class="info" id="fn">Enter your first name</p>
	  <p class="info" id="ln">Enter your last name</p>
	  <p class="info" id="ph">Phone number format: (xxx) xxx-xxxx</p>
	  <p class="info" id="pc">Postal code format: X9X 9X9</p>
   </body>
</html>