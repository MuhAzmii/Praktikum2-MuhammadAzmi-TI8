<!DOCTYPE html>
<html>
<body>
<?php
	$name = ['Muhammad', 'Azmi'];
	array_shift($name);
	foreach($name as $person) {
		echo $person . '<br/>';
	}
?>
</body>
</html>