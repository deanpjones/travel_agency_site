
	
<?php
	#BANNER
	#Dean Jones, Nov.02, 2016
	date_default_timezone_set("America/Edmonton");	
	$current_date = date('Y/m/d H:i:s a T');			#24-hour clock
	$current_hour = substr($current_date, 11, 2);
	#$current_hour = 20;								#TEST FOR TIME...
	
	if (0 < $current_hour && $current_hour < 11) 
	{
		print("Good Morning - " . $current_date);		#SET TIMER TO UPDATE ON SCREEN...
	} 
	elseif (12 < $current_hour && $current_hour < 17) 
	{
		print("Good Afternoon - " . $current_date);
	} 
	else 
	{
		print("Good Evening - " . $current_date);
	}
?>
