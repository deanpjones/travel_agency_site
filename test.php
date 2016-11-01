<?php
$array_links = array(
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
						);
						print("<table>");
							foreach($array_links as $x => $x_value) 
							{
								print("<tr>");
									print("<td> <a href=" . $x_value . " target='_blank' >" . $x . "</a> </td>");
								print("</tr>");
							}
						print("</table><br />");
						
						
						$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

						foreach($age as $x => $x_value) {
							echo "Key=" . $x . ", Value=" . $x_value;
							echo "<br>";
						}
						
						foreach($array_links as $x => $x_value) {
							echo "Key=" . $x . ", Value=" . $x_value;
							echo "<br>";
						}
						
			
?>