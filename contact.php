<?php
	/* VARIABLES */
	$page_desc = "Contact Us";

	/* FUNCTIONS */
?>

<!DOCTYPE html>
<html>
	<head>	
		<meta charset="UTF-8"/>
		<meta name="Description" content="Travel Agency Project - Contact Us"/>
		<meta name="Keywords" content="travel, contact, destination, html, css, php"/>
		<meta name="Author" content="Dean Jones"/>
		<meta name="Date" content="Oct.27, 2016"/>
		
		<title> Travel Experts - Contact Us</title>			
		<link rel="stylesheet" type="text/css" href="style.css"/>
	<style>
		<!-- SEE STYLE.CSS FOR OTHER STYLES -->
	</style>
	</head>
		<body>
			<!-- HEADER -->
			<?php include_once 'header.php';?>
			
			<!-- NAVBAR -->
			<?php include_once 'navbar.php';?>
			
			<main>
				<address>
					<p>
						<ul>
							
							<b>CONTACT US</b>
							<br /> Mailing address: 
							<br /> Travel Experts Inc. 
							<br /> PO Box 666, Station X 
							<br /> Calgary, AB	T2G 3H3 
							<br /> Canada 	
												
						</ul>
					</p>

					<hr align="center" width="94%" />	

					<p>
						<ul type="circle">
							<b>Phone/Fax:</b>
								<li>Main Office: (403) 555-5555</li>
								<li>Main Fax: (403) 273-7373</li>
						</ul>

						<ul type="circle">
							<b>President: Corey Johnson</b>
								<li>Direct: (403) 555-1111</li>
							<br />
							<b>Vice President: Sarah McArthur</b>
								<li>Direct: (403) 555-2222</li>
						</ul>
					</p>
					
					<hr align="center" width="94%" />
					
					<p>	
						<ul type="circle">
							<b>Email</b>
							<!-- <li>info@travelexperts.com</li>	<!-- HREF LINK -->
								<li><a href="mailto:info@travelexperts.com">info@travelexperts.com</a></li>
						</ul>
					</p>
					
					<!-- MOVE DOWN TO HEADER -->
					<a href="register.php">
						<img class="img-link" src="images/register.jpg" alt="register.jpg" width="100" height="100" />
					</a>
				</address>
			</main>
			<!-- FOOTER -->
			<?php include_once 'footer.php';?>
	</body>
</html>