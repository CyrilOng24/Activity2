<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php
echo"<table border = \"0\" cellspacing='25' cellpadding='5'>";

for ($row = 1; $row <= 7; $row++){

	
echo "<br>";

for($c = 1; $c <=7; $c++){
	$t = $row*$c;

echo "<td>$t<td> \n";
}
echo"</tr>";
}
echo"</table>";

echo newt_grid_basic_window(text, middle, buttons)

?>
</body>
</html>