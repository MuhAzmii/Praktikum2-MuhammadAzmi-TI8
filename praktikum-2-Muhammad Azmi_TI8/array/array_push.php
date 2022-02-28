<!DOCTYPE html>
<html>
<body>
<?php
	$name = ['Muhammad', 'Azmi'];
	array_push($name, 'Azmi');
	foreach($name as $person) {
		echo $person . '<br/>';
	}
?>
</body>
</html>