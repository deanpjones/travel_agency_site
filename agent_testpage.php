
<?php
	#---------------------------------------------
	#Dean Jones
	#Nov.10, 2016
	#AGENT CLASS (TEST PAGE)
	#-------------------------
	#SUPPORTING FILES
		#AGENT_CLASS.PHP		(the class to be tested)
	#---------------------------------------------
	/* VARIABLES */
	$page_desc = "test page";
	
	//GLOBAL VARIABLES
	include("variables.php");
	
	include ("Agent_class.php")


?>

<!DOCTYPE html>
<html>
	<head>	
		<meta charset="UTF-8">
		<meta name="Description" content="Travel Agency Project - Register">
		<meta name="Keywords" content="travel, contact, destination, html, css, php">
		<meta name="Author" content="Dean Jones">
		<meta name="Date" content="Nov.14, 2016">

		<!-- SEE STYLE.CSS FOR STYLES -->
		<link rel="stylesheet" type="text/css" href="style.css">
		
		<!--TAB ON BROWSER-->
		<title>Agent CLASS TestPage</title>
	</head>
	<body>
			<!-- HEADER -->
			<?php include_once 'header.php';?>
			
			<!-- NAVBAR -->
			<?php include_once 'navbar_agent.php';?>
						
			<!-- LOGINBAR -->
			<?php include_once 'loginbar.php';?>
			
			<!-- BANNER -->
			<div id="banner"><?php include_once 'banner.php';?></div>
			
			<main>
				<article>
				<h4>Agent Test Page</h4>
				<?php

				$x = new Agent();
				
				#SET AGENT PROPERTIES...
				$x->setAgtFirstName("Dean");
				$x->setAgtMiddleInitial("P");
				$x->setAgtLastName("Jones");
				$x->setAgtBusPhone("403-111-1234");
				$x->setAgtEmail("dj@email.com");
				$x->setAgtPosition("Student");
				$x->setAgtUserId("user1");
				$x->setAgtPassword("pass1");
				
				#PRINT AGENT PROPERTIES
				echo "Agent Name:";
				echo "<br />";
				echo $x->getAgtFirstName() . " " . $x->getAgtMiddleInitial() . " " . $x->getAgtLastName();
				echo "<br />";
				echo "<br />";
				echo "Agent Properties(string):";
				echo "<br />";
				echo $x->__toString();
				
				$y = new Agent();
				echo "<br />";
				echo "<br />";
				echo "Agent CONSTRUCTOR (default Agent):";
				echo "<br />";
				echo $y->__toString();
				
				?>
				
				
				
				
				
									
				</article>
			</main>
			
			<!-- FOOTER -->
			<?php include_once 'footer.php';?>
	</body>
</html>