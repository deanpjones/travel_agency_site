
	
<?php
	/* VARIABLES */
	
	/* FUNCTIONS */
	#BANNER
	#$mydate = date(H);
	#print("$mydate");
	date_default_timezone_set("America/Edmonton");	
	#$current_date = date('Y/m/d h:i:s a T');			#12-hour clock
	$current_date = date('Y/m/d H:i:s a T');			#24-hour clock
	$current_hour = substr($current_date, 11, 2);
	#$current_hour = 20;
	
	if (0 < $current_hour && $current_hour < 11) 
	{
		echo "Good Morning, the early bird gets the worm!";
	} 
	elseif (12 < $current_hour && $current_hour < 17) 
	{
		echo "Good Afternoon, what a glorious day!";
	} 
	else 
	{
		echo "Good Evening, a great way to end the day!";
	}
	/* if (0 < $current_hour && $current_hour < 23)
	{
		print("Good Morning, the early bird gets the worm!");
	} elseif (12 < $current_hour && $current_hour < 17)
	{
		print("Good Afternoon, what a glorious day!");
	} else (18 < $current_hour && $current_hour < 23)
	{
		print("Good Evening, a great way to end the day!");
	}  */
	
	
	
	#print("BANNER - " . date('Y/m/d h:i:s a T'));		#2016/10/31 12:32:58 pm MDT
	#print("BANNER - $current_date");
	#print("HOUR: $current_hour");
?>
