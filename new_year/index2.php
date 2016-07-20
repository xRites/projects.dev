<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Новый год</title>
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

	$str = '';
	if($days > 0) $str .= declension($days,array('день','дня','дней')).' ';
	if($hours > 0) $str .= declension($hours,array('час','часа','часов')).' ';
	if($minutes > 0) $str .= declension($minutes,array('минута','минуты','минут')).' ';
	if($seconds > 0) $str .= declension($seconds,array('секунда','секунды','секунд'));

	return $str;
	}


	
	function declension($digit,$expr,$onlyword=false){
	if(!is_array($expr)) $expr = array_filter(explode(' ', $expr));
	if(empty($expr[2])) $expr[2]=$expr[1];
	$i=preg_replace('/[^0-9]+/s','',$digit)%100;
	if($onlyword) $digit='';
	if($i>=5 && $i<=20) $res=$digit.' '.$expr[2];
	else
	{
	$i%=10;
	if($i==1) $res=$digit.' '.$expr[0];
	elseif($i>=2 && $i<=4) $res=$digit.' '.$expr[1];
	else $res=$digit.' '.$expr[2];
	}
	return trim($res);
}
$year = date(Y);
$new_year = $year.'-12-31 23:59:59';
?>

 <h1>До нового года осталось: <?=downcounter($new_year);?></h1>

</body>
</html>