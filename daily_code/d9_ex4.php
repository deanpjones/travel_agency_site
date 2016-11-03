<?php
	/* VARIABLES */
	
	/* FUNCTIONS */
	#MATH, DAY 9, OCT.31
	
	$name = "dean";				#GLOBAL VARIABLE
	function printname()		
	{
		#global $name;			#REFERENCE TO GLOBAL VARIABLE (outside function)
		$name = "nadine";		#LOCAL VARIABLE
		print($name);
	}
	
	#use ARGUMENT INSTEAD OF GLOBAL VARIABLE REFERENCE
	function printname2($argname)		
	{
		print($argname);
	}
	

	
	
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
					#GLOBAL VARIABLES
					#LOCAL VARIABLES
					printname();
					printname2("Vivian");
				?>
				
				
				</article>

			</main>
			<footer>
				<h4>Links - Travel Experts Inc. - Copyright 2016 &copy;</h4>
			</footer>
			
		<script></script>
	</body>
</html>