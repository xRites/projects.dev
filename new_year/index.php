<?php
	$datetime1 = new DateTime(date("d.m.Y"));
	$next_year= date(Y);
	$next_new_year = date("30.12.").$next_year;
    $datetime2 = new DateTime("$next_new_year");
    $interval = $datetime2->diff($datetime1);
    echo $interval->days; 
?>