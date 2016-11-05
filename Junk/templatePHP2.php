<?php
	$myname = "fred";
	$mynum = 12;
	
	$total = 1234.56;
	define("GST", 0.05);	#CONSTANT
	#define("GST", 7);		#CANNOT CHANGE (ERROR)
	#comment
	//comment
	/*
		multiline comment
	*/
	
	function hello($lname)
	{	
		#return $lname;
		return ucfirst($lname . "xxx");
	}
?>


<!DOCTYPE html>
<html>
	<head>	
		<title> My PHP Template </title>		<!--TAB ON BROWSER-->
		
		
		<style>			<!--STYLE DEFINITION-->
		</style>
		<script></script>
	</head>
		<body>							
			<?php
				print("<h1>hello world</h1>");
				print("<h1>hello $myname</h1>");
				print("<h1>hello $mynum</h1>");
				print("<h1>\$hello $myname " . hello("smith") . "</h1>");
				print("<h1>line1 <br />line2</h1>");	#BREAK LINE
				#print(`dir`);			#DUMPS (COMMANDLINE DIR COMMAND)
				#print(`ls`);			#LISTS THE FILES IN CURRENT DIRECTORY (c:/wamp/www)
				
				#??? 
				#$myC = `cd c:\`;		#CHANGES THE CURRENT DIRECTORY
				#print($myC);
				
				#$dirlist = `dir`;
				#print_r($dirlist);

				print("GST tax rate is " . GST . "<br />");
				print("Your total: \$" . $total . "<br />");
				$tax = (GST * $total) + $total;
				print("Your total + GST: \$" . $tax . "<br />");
				printf("Your total + GST: \$%f<br />", $tax);
				printf("GST: \$ %.2f <br />", GST);
				
				$number = 123;
				printf("%f",$number);
				print("<br />");
				printf("what happens? %7.2f hey<br />", $myname);	#STRING, SHOWS AS 0.00
				
				$favcolor = "red";
			switch ($favcolor) 
			{
			case "red":
				echo "Your favorite color is red!<br />";
				break;
			case "blue":
				echo "Your favorite color is blue!<br />";
				break;
			case "green":
				echo "Your favorite color is green!<br />";
				break;
			default:
				echo "Your favorite color is neither red, blue, nor green!<br />";
			}
			
			$x = 1; 
			while($x <= 5) {
				echo "The number is: $x <br />";
				$x++;
			}
			
			for ($x = 99; $x > 0; $x--) {
				echo "$x bottles of beer!<br>";
			} 
			echo "No more bottles of beer anymore :(<br />";
			
			$links = array("mysql.com","php.net","www.apache.org");
			#$empty = array();		#EMPTY ARRAY
			#print($empty);
			foreach($links as $link) {
				echo "<a href=\"http://$link\">$link</a><br />";
			}
			?>
			
			

		<script>
		console.log(window.document);
		</script>
	</body>
</html>