<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Сортировка массива</title>
</head>
<body>
	<?php 
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

	$arr1 = array(1,2,3,32 14,5);
	echo "<pre>";
	print_r($arr1);
	function sort_array_task($array)
	{
		$sort = true;
		$arraySize = count($array);
		$i=0;
		while ($sort !=false and $i<$arraySize-1){
			if($array[$i]>$array[$i+1]){
				$sort=false;
			}
			$i++;
		}
		return $sort;
	}
	function sort_array_desk($array)
	{
		$sort = true;
		$arraySize = count($array);
		$i=0;
		while ($sort !=false and $i<$arraySize-1){
			if($array[$i]<$array[$i+1]){
				$sort=false;
			}
			$i++;
		}
		return $sort;
	}
	if (sort_array_task($arr1)==true){
		echo 'Отсортирован по возрастанию';
	}else{
		if(sort_array_desk($arr1)==true){
			echo 'Отсортирован по убыванию';
		}
		else echo 'Не отсортирован';
	}

?>
</body>
</html>
