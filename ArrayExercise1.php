<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h2>
	<?php
	$tasks = [
	["rain","sunshine","clouds","hail","sleet","snow","wind"]
	
	];
	echo "<br>";
	echo "We've seen all kinds of weather this month. At the beginning of the month, we had ".$tasks[0][5]." and ".$tasks[0][6].".Then came ".$tasks[0][1]." with a few ".$tasks[0][2]." and some ".$tasks[0][0].". At least we didn't get any ".$tasks[0][3]." or ".$tasks[0][4].".";
?>
</h2>
</body>
</html>