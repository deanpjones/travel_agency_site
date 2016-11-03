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
				#MATH
				print(pi() . "<br />");
				print(round(pi(),4) . "<br />");				//3.1416
				#??print(round(123456789, PHP_ROUND_HALF_ODD));	//1234588
				print(rand() . "<br />");
				print(rand(1,10) . "<br />");
				print(mt_rand(100,1000) . "<br />");;
				
				#DATES
				print(date('D m d' . "..." . ' y') . "<br />");
				print(date('l' . ", " . 'F d' . ", " . 'Y') . "<br />");	#Monday, October 31, 2016
				print(date('c') . "<br />");								#2016-10-31T17:40:12+01:00
				print(date('Y m d') . "<br />");							#2016 10 31
				print(date('Y/m/d') . "<br />");							#2016/10/31
				
				#TIME
				print(date('Y/m/d h:i:s a, e') . "<br />");					#2016/10/31 05:50:11 pm, Europe/Paris
				date_default_timezone_set("America/Edmonton");	
				print(date('Y/m/d h:i:s a, e') . "<br />");					#2016/10/31 10:53:13 am, America/Edmonton
				print(date('Y/m/d h:i:s a T') . "<br />");					#2016/10/31 12:32:58 pm MDT
				
				?>
				
				
				</article>

			</main>
			<footer>
				<h4>Links - Travel Experts Inc. - Copyright 2016 &copy;</h4>
			</footer>
			
		<script></script>
	</body>
</html>