<!DOCTYPE html>
<html>
<body>
<?php
	$name = ['Muhammad', 'Azmi'];
	array_unshift($name, 'Azmi', 'Mi');
	foreach($name as $person) {
		echo $person . '<br/>';
	}
?>
</body>
</html>