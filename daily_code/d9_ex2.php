<?php
	/* VARIABLES */
	
	/* FUNCTIONS */
	#MATH, DAY 9, OCT.31
	
	
?>


<!DOCTYPE html>
<html>
	<head>	
		<title> My PHP Template </title>		<!--TAB ON BROWSER-->
		
		<!--STYLE DEFINITION-->
		<link rel="stylesheet" type="text/css" href="style.css">				<!-- DEFAULT CSS -->
		
		<style>			
		</style>
		<script></script>
	</head>
		<body>	
			<header>
				<img src="images/01bridge.jpg" id="header-left" alt="01bridge.jpg"/>
				<img src="images/02sunset.jpg" id="header-right" alt="02sunset.jpg"/><!--  width="161.8" height="100" -->
				
				<!--LOGO-->
				<img id="logo" src="images/treelogo.gif" alt="treelogo.gif" width="161.8" height="100"/>
				<h1>TRAVEL EXPERTS - Links</h1> 
				<div id="slogan">love knows no borders</div>
				
			</header>
			
			<nav>
				<a href="index.php" class="navbar">Home</a>
			</nav>		
			<main>
				<article>
					<p> ... </p>
				<?php	
				
					#TEST TO SEE IF WHITESPACE...
					#$field = "dean";	#no whitespace
					$field = "  deanpjones";	#with whitespace
					
					#clean the SPACES before passing it 
					$field1 = trim($field);
					if ($field1 == "deanpjones")
					{
						print("<h1 style='background-color:red'>MATCHED</h1>");
					}
					else
					{
						#print("<script>alert('warning');</script>");		#EMBEDDED JAVASCRIPT
						print("<script>alert('no match. value=|$field1|');</script>");
					}
					
					print("strlen is..." . strlen($field1) . " of \$field1.<br />");	#strlen is...10 of $field1.
					print("substr: " . substr($field1, 5) . "<br />"); 					#jones
					print("substr: " . substr($field1, 0,4) . "<br />"); 				#dean
					
					$string = "Hello world. Beautiful day today.";
					$token = strtok($string, " ");
					print($token);
				
				?>
				
				
				</article>

			</main>
			<footer>
				<h4>Links - Travel Experts Inc. - Copyright 2016 &copy;</h4>
			</footer>
			
		<script></script>
	</body>
</html>