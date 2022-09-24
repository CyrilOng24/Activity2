<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>
	<?php
	$Cities = array ("Tokyo","Mexico City","New York City","Mumbai","Seoul","Shanghai","Lagos","Buenos Aires","Cairo","London");
	for($i = 0; $i <count($Cities);$i++){
	print"{$Cities[$i]}\n";
}
?>	
 </h3>

 <h3>
 	<ul style="list-style-type:square;">
 	
 	<?php
	for($i = 0; $i <count($Cities);$i++){
		
	print"<li>{$Cities[$i]}</li>\n";
	
}
?>
</ul>
 </h3>

<?php array_push($Cities,"Los Angeles", "Calcutta", "Osaka", "Beijing");?>
 <h3>
 <ul style="list-style-type:disc;">
 	<?php
		for($i = 0; $i <count($Cities);$i++){
			
		print"<li>{$Cities[$i]}</li>\n";
}
?>

 </h3>


</body>
</html>