<!DOCTYPE html>
<html>
<body>
<?php
	$name = ['Muhammad', 'Azmi'];
	array_pop($name);
	foreach($name as $person) {
		echo $person . '<br/>';
	}
?>
</body>
</html>