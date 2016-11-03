<?php
	/* VARIABLES */
	//Dean Jones, Nov.02, 2016
	$page_desc = "Home";
?>

<!DOCTYPE html>
<html>
<head>
		<!-- METADATA -->
		<!--Dean Jones, Nov.02, 2016-->
		<meta charset="UTF-8"/>
		<meta name="Description" content="Travel Experts Inc."/>
		<meta name="Keywords" content="travel, destination, vacation">
		<meta name="Author" content="Dean Jones"/>
		<meta name="Date" content="Nov.2, 2016"/>
		
		<!-- STYLE.CSS FOR STYLES -->
		<!--Dean Jones, Nov.02, 2016-->
			<!-- MAIN CSS -->
			<link rel="stylesheet" type="text/css" href="team_main.css">
			<!-- HEADER CSS -->			
			<link rel="stylesheet" type="text/css" href="team_header.css">	
			<!-- FOOTER CSS -->			
			<link rel="stylesheet" type="text/css" href="team_footer.css">	
			<!-- NAVBAR CSS -->			
			<link rel="stylesheet" type="text/css" href="team_navbar.css">		
			<!-- BANNER CSS -->			
			<link rel="stylesheet" type="text/css" href="team_banner.css">					
			
			
		<title> Travel Experts - Home </title>									<!--TAB ON BROWSER-->		

</head>
<body>
		<!-- HEADER -->
		<!--Dean Jones, Nov.02, 2016-->
		<?php include_once 'team_header.php';?>
		
		<!-- NAVBAR -->
		<!--Dean Jones, Nov.02, 2016-->
		<?php #include_once 'team_navbar.php';?>
		
		<!-- BANNER -->
		<!--Dean Jones, Nov.02, 2016-->
		<div id="banner">
			<?php include_once 'team_banner.php';?>
		</div>

		<!-- FOOTER -->
		<!--Dean Jones, Nov.02, 2016-->
		<?php include_once 'team_footer.php';?>
</body>
</html>