<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>New Year</title>
</head>
<body>
	<?php
function downcounter($date){
	$check_time = strtotime($date) - time();
		if($check_time <= 0){
			return false;
		}
	$days = floor($check_time/86400);
	$hours = floor(($check_time%86400)/3600);
	$minutes = floor(($check_time%3600)/60);
	$seconds = $check_time%60;
}
downcounter('2016-12-31 23:59:59');
?>
</body>
</html>