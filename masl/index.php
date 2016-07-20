<?php
	$date = date(Y);
	$date += 1;
	function leap($date)
	{
		if ($date % 4 == 0){
			if($date % 100 == 0){
				if($date % 400 == 0){
					echo $date;
				}
				else{
					return false;
				}
			}
			else{
				return true;
			}
		}
		else{
			return false;
		}
	}

	if(leap($date) == true){
		echo "Високосный год, ну это так, для прикола";
	}
	else{
		echo "Невисокосный год, ну это так для прикола";
	}
	function compute_day($weekNumber, $dayOfWeek, $monthNumber, $year)
	{    
	    $dayOfWeekFirstDayOfMonth = date('w', mktime(0, 0, 0, $monthNumber, 1, $year));
	    $diference = 0;
	    if ($dayOfWeekFirstDayOfMonth <= $dayOfWeek)
	    {
	        $diference = $dayOfWeek - $dayOfWeekFirstDayOfMonth;
	    }
	    else
	    {
	        $diference = 7 - $dayOfWeekFirstDayOfMonth + $dayOfWeek;
	    }
	 
	    return 1 + $diference + ($weekNumber - 1) * 7;
	}
	echo '<br/>Масленица будет '.compute_day(4, 7, 2, $date).'-го февраля '.$date.'года.';
?>