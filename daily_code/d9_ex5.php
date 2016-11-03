
	
<?php
	/* VARIABLES */
	
	/* FUNCTIONS */
	#MATH, DAY 9, OCT.31
	
	/*function myarray()
	{
		#$arrayname = array("A"=>"one", "B"=>"two","C"=>"three");
		#$arrayname = array(“element0”, “element1”, “element2”);
		#for ($i=0; $i<count($soups); $i++)
		for ($i=0; $i<6; $i++)
		{
			print($soups[$i]);
		}
	}
		myarray();
		*/
	/*
	foreach ($soups as $soup)
	{
		print($soup);
	}*/

	
		/* $soups = array();
		$soups[] = "chicken";
		$soups[] = "beef";
		$soups[] = "fish";
		$soups[] = "veggies";
		
		print_r($soups);		#Array ( [0] => chicken [1] => beef [2] => fish [5] => veggies )
		
		foreach ($soups as $soup)
		{
			print($soup . "<br />");
		}
		
		$soups2 = array("Monday"=>"pea soup", "Tuesday"=>"leek soup", "Wednesday"=>"tomato soup");
		print_r($soups2);
		print("<br />");
		print("---------------<br />"); */
		
		#----------------
		$people = array("Peter", "Joe", "Glenn", "Cleveland");

		
		
		#print("reset: " . reset($people));
		#print("each:<br />");
		#print_r("each: " . each($people));
		#print_r (each($people));
		print("<br />");
		while (list($key, $val) = each($people))
		{
		echo "$key => $val<br>";
		}
		
	
	
?>
