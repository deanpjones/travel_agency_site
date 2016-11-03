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
				
					phpinfo();									#DUMPS ALL ENVIRONMENT VARIABLES...	
					#phpinfo(32);								#ENVIRONMENT VARIABLES
					#print(getenv('REQUEST_METHOD'));
					#print(getenv('CONTEXT_DOCUMENT_ROOT'));		#C:/wamp/www/
					
					#??? print(getenv("_SERVER['SCRIPT_NAME']"));
					#??? phpinfo('DOCUMENT_ROOT');
					#??? phpinfo("_SERVER['CONTEXT_DOCUMENT_ROOT']");
					#??? print($_ENV"REQUEST_METHOD");
				
				?>
				
				
				</article>

			</main>
			<footer>
				<h4>Links - Travel Experts Inc. - Copyright 2016 &copy;</h4>
			</footer>
			
		<script></script>
	</body>
</html>