<?php
	$page_desc = "Travel Links";

	include_once 'load_links.php';
		#table_links	OLD FUNCTION
		
	/* VARIABLES */
	/* FUNCTIONS */

?>

<!DOCTYPE html>
<html>
	<head>	
		<title> Travel Links </title>		<!--TAB ON BROWSER-->
		
		<!--STYLE DEFINITION-->
		<link rel="stylesheet" type="text/css" href="style.css">				<!-- DEFAULT CSS -->
	</head>
		<body>	
			<!-- HEADER -->
			<?php include_once 'header.php';?>
			
			<!-- NAVBAR -->
			<?php include_once 'navbar.php';?>
									
			<!-- LOGINBAR -->
			<?php include_once 'loginbar.php';?>
			
			<!-- BANNER -->
			<div id="banner"><?php include_once 'banner.php';?></div>
			
			<main>
				<article>
					<p color="blue">Travel Links</p>
					<!-- RUN PRINT TABLE LOOP -->
					<?php
						load_links();		#NEW LINKS FUNCTION.
						#table_links();		#WILL BE REPLACED BY OTHER LOOP?
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
			
			<!-- FOOTER -->
			<?php include_once 'footer.php';?>
	</body>
</html>