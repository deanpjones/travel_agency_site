<?php
	#---------------------------------------------
	#Dean Jones
	#Nov.05 2016
	#FOOTER.PHP (loads at bottom of every page)
	#-------------------------
	#SUPPORTING FILES
		#...(all pages)
	#---------------------------------------------
	#FOOTER
	#$page_desc = "";	#INCLUDE ON PAGE otherwise this will overwrite
	
	print("<footer>");
		#print("<h4>Travel Experts Inc. - Copyright 2016 &copy;</h4>");
		print("<h4>" . $page_desc . " - Travel Experts Inc. - Copyright 2016 &copy;</h4>");
	print("</footer>");
	/* <h4>Home - Travel Experts Inc. - Copyright 2016 &copy;</h4> */
?>