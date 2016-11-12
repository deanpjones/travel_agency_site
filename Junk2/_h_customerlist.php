<?php
   require("variables.php");
   require("header.php");
?>   

   <h1>Select a Customer to Update</h1>
   <form method="post" action="customerupdate.php">
      <select name="CustomerId" >
	  <?php
	     $con = mysqli_connect($host, $user, $password, $database);
	     if (mysqli_connect_errno())
		 {
		    print(mysqli_connect_error());
		 }
		 $sql = "select CustomerId, CustFirstName, CustLastName from customers";
		 $result = mysqli_query($con, $sql);
		 if (mysqli_errno($con))
		 {
		    print(mysqli_error($con));
			exit;
		 }
		 while ($row = mysqli_fetch_row($result))
		 {
		    print("<option value='$row[0]'>$row[1] $row[2]</option>");
		 }
	  ?>
	  </select>
	  <input type="submit" value="Get Customer" />
   </form>


<?php
   require("footer.php");
?>



