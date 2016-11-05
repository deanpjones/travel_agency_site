<!DOCTYPE html>
<html>
	<head>	
		<meta charset="UTF-8"/>
		<meta name="Description" content="Travel Agency Project - Home"/>
		<meta name="Keywords" content="travel, destination, html, css, php">
		<meta name="Author" content="Dean Jones"/>
		<meta name="Date" content="Oct.27, 2016"/>
		
		<!-- SEE STYLE.CSS FOR STYLES -->
		<!--<link rel="stylesheet" type="text/css" href="style.css">-->	
										
		<style>
			body {
				margin: 0;
				border: 0px solid white;
				padding: 0;
				background: grey;
				background: linear-gradient(90deg, grey, white);
			}
			header, footer {
				margin: 0;
				border: 0px solid white;
				padding: 12px;
				background: linear-gradient(135deg, black, grey);
				font-family: "Arial Rounded MT Bold", "Helvetica Rounded", Arial, sans-serif;
				color: black;
				font-size: 18px;
			}
			td#header-left {
				border: 2px solid white;
				
			}
			td#header-right {
				border: 3px solid white;
			}
			td#logo {
				/* border: 3px solid white; */
				align: center;
			}
		</style>

		<title> Travel Experts - Home </title>	
	</head>
	<body>
			<!-- HEADER -->
			<?php include_once 'header2.php';?>
			
			<!-- NAVBAR -->
			<?php include_once 'navbar.php';?>
			
			<!-- BANNER -->
			<div id="banner">
				<?php include_once 'banner.php';?>
			</div>
	</body>
</html>