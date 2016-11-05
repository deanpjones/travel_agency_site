  <!DOCTYPE html>
<html>
   <head>
    <title><?php print($title); ?></title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="grp_style.css" type="text/css"/>
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-sacle=1.0">
	
   </head>
   
   <body class="body">
   
	  <header class="mainheader">
	   <div class="container">
	       <div class="row"> 
			<img src="flyplane.png" class="col-md-2"/>
			<h1 class="col-md-6" style="color: white;
    text-shadow: 1px 1px 2px black, 0 0 25px red, 0 0 5px darkblue;font-family:Broadway;"><em>Welcome to Travel Experts</em></h1>
	        <p class="col-md-4" style="color:white;font-family:Times New Roman;font-size:150%">Call:1-855-349-7896(Canada)</p>
		  </div>
		  <div  class="row">
	         <p class="col-md-3 col-md-offset-9" style="color:white;font-family:Broadway;font-size:200%">Good
				  <?php
				
					 date_default_timezone_set('MST7MDT');
					 $time = date("H");
					 if ($time>=5 && $time<12)
					 {
						print("Morning<br>");
						
					 }elseif ($time>=12 && $time<18)
					 {
						print("Afternoon<br>");
						  
					 }elseif ($time>=18 && $time<22)
					 {
						print("Evening<br>");
						 
					 }else{
						 print("Night<br>");
							 
					 }
				  ?>
				 </p>
			   </div>  
			
	 </header>
	 <nav class="menu">
  
      
      <ul>
		  <li class="active"><a href="myindex.php" target="_blank">HOME</a></li>
		  <li><a href="contact.php" target="_blank">CONTACT</a></li>
		  <li><a href="register.php" target="_blank">REGISTER</a></li>
		  <li><a href="link.php" target="_blank">TRAVEL GUIDE</a></li>
	  </ul>
	  <ul class="login">
		  <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>

   </nav>