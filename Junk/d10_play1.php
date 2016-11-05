<?php
	function test($a, $b)
	{
		if 			($a && $a) {
			return 1;
		} elseif 	($a && $b) {
			return 2;
		} elseif 	($b && $a) {
			return 3;
		} elseif 	($b && $b) {
			return 4;
		} else {
			print("<script>alert('error');</script>");
		}
	}
	print("test: " . test(0, 1));

if (condition) {
	# code...
} else {
	# code...
}


	foreach ($variable as $key => $value) {
		# code...
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>