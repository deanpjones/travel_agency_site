<h1>Good...

<?php
	$title = "Day 9 Exercise";
	require("header.php");

	/*NEED TO RESET TIMEZONE (PHP.INI)
	date.timezone = Europe/Paris
	to Edmonton*/

	/*PUT IN HTML FILE (links page)
	<title>
		<?php
			$links = array();
			$links["http://sait.ca"] = "Go to SAIT";
			$links["http://apple.ca"] = "Go to APPLE";
			$links["http://google.ca"] = "Go to GOOGLE";

			$title = "Links Page" 
			print("$title"); 

			for ($i=0; $i<count($links); $i++)
			{
				print("<tr>");
				print("<td>" . ($i + 1) . "</td><td><a href='$keys[$i]' >" . $links[keys[$i] . "</a></td>");
				print("</tr>");
			}
		?>
	</title>*/

	$hour = date("G");		#GETS 24-HOUR CLOCK
	if ($hour < 12) {
		print("Morning");
	}
	elseif ($hour < 18) {
		print("Afternoon");
	}
	else {
		print("Evening");
	}


?>

</h1>


