<?php
	#---------------------------------------------
	#Dean Jones
	#Nov.08, 2016
	#LOAD_LINKS.PHP (JAVASCRIPT FUNCTION, that loops through creating links)
	#-------------------------
	#SUPPORTING FILES
		#LINKS.PHP		(links page to show links to other websites)
	#---------------------------------------------
	#VARIABLES
	require('variables.php');

	#TABLE LINKS (links.php)
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
	
	#CREATE AN ASSOCIATIVE ARRAY
	function load_links()
		{
				global $array_links;
			/* $array_links = array(
				"Sky News"=>"http://www.skynews.ca/this-weeks-sky",
				"Endless Nature"=>"http://endlessnature.org/", 
				"West Coast Dream - Ucluelet Canada"=>"http://www.ucluelet-info.com", 
				"Visit Norway"=>"https://www.visitnorway.com/plan-your-trip/seasons-climate/autumn/", 
				"White Water Rafting Adventure"=>"http://chinookrafting.com/",
				"Sightseeing on the wild West Coast!"=>"https://westcoastsightseeing.com", 
				"Stars in the Sky!"=>"http://www.stellarium.org/en_CA/", 
				"Ocean Tours"=>"http://www.oceanstravel.ca/", 
				"Beautiful Hawaii"=>"http://www.gohawaii.com/", 
				"Down under in Austrailia"=>"http://www.australia.com/en-ca"
			); */
			print("<table>");
				foreach($array_links as $x => $x_value) 
				{
					print("<tr>");
						print("<td> <a href=" . $x_value . " target='_blank' >" . $x . "</a> </td>");
					print("</tr>");
				}
			print("</table><br />");
			
				/* <table>
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

				</table> */
		}
?>