<?php
	/* VARIABLES */
	
	/* FUNCTIONS */
		function table_links()
		{
			print("<table>");
				for ($i = 1; $i <= 6; $i++) 
				{
					print("<tr>");
						print("<td> Row#" . $i . " </td>");
						#print("<td> <a href=\"links-page" . $i . ".php\">Page" . $i . "</a> </td>");		//ADDED TARGET
						print("<td> <a href=\"links-page" . $i . ".php\" target='_blank' >Page" . $i . "</a> </td>");
						#print("<td>$i</td><td><a href='page$i.php' >Page $i</a></td>"); 	#HARVEYS FORMAT, a bit shorter
					print("</tr>");
				}
			print("</table><br />");
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
					<p color="blue">TABLE LOOP - PHP PAGE</p>
				
				<!-- RUN PRINT TABLE LOOP -->
				<?php
					table_links();
				?>
				</article>
				<!-- <table>
						<tr>
							<td> Row#1 </td>
							<td> <a href="links-page1.php">Page1</a> </td>
						</tr>
						<tr>
							<td> Row#2 </td>
							<td> <a href="links-page2.php">Page2</a> </td>
						</tr>
						<tr>
							<td> Row#3 </td>
							<td> <a href="links-page3.php">Page3</a> </td>
						</tr>

				</table> -->
			</main>
			<footer>
				<h4>Links - Travel Experts Inc. - Copyright 2016 &copy;</h4>
			</footer>
			
		<script></script>
	</body>
</html>