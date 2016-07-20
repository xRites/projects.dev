<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Кредитный калькулятор #1</title>
</head>
<body>
<style>
	/* Ширина слайдера */
	#slider {
	    width: 300px;
	}
	/* Контейнер слайдера */
	.ui-slider {
	    position: relative;
	}
	/* Ползунок */
	.ui-slider .ui-slider-handle {
	    position: absolute;
	    z-index: 2;
	    width: 13px;   /* Задаем нужную ширину */
	    height: 13px;  /* и высоту */
	    background: #c8c8c8;
	    cursor: pointer
	}
	.ui-slider .ui-slider-range {
	    position: absolute;
	    z-index: 1;
	    font-size: .7em;
	    display: block;
	    border: 0;
	    overflow: hidden;
	}
	/* горизонтальный слайдер (сама полоса по которой бегает ползунок) */
	.ui-slider-horizontal {
	     height: 3px; /* задаем высоту согласно дизайна */
	}
	/* позиционируем ползунки */
	.ui-slider-horizontal .ui-slider-handle { 
	    top: -5px;
	    margin-left: -6px;
	}
	.ui-slider-horizontal .ui-slider-range {
	    top: 0;
	    height: 100%;
	}
	.ui-slider-horizontal .ui-slider-range-min { 
	    left: 0;
	}
	.ui-slider-horizontal .ui-slider-range-max {
	    right: 0;
	}
	/* оформление полосы по которой ходит ползунок */
	.ui-widget-content { 
	    border: 1px solid #D4D4D4;
	    background: #fff;
	}
	/* оформление активного участка (между двумя ползунками) */
	.ui-widget-header { 
	    border: 1px solid #D4D4D4;
	    background: #f00;
	}
	/* скругление для полосы слайдера */
	.ui-corner-all {
	    -moz-border-radius: 4px;
	    -webkit-border-radius: 4px;
	    border-radius: 4px;
	}
</style>
	<div class="container">
	<?php
		$cur_date = date("d.m.Y");
		$first_date = date("d.m.Y", strtotime($cur_date) + 30 * 24 * 3600);
		$second_date = date("d.m.Y", strtotime($cur_date) + 60 * 24 * 3600);
		$trird_date = date("d.m.Y", strtotime($cur_date) + 90 * 24 * 3600); 
		$curDate = new DateTime($cur_date);
		//$firstDate = new DateTime($)
		echo '<p>Текущая дата: '.$cur_date.'</p>';
	?>
		<form action="" method="POST">
			<input type="text" name="count" id="count" value="80000">
			<div id="slider"></div>
			<input type="submit" value="Клац клац">
		</form>
	<?php
		$count = $_POST['count'];
		$creditRate = 0.9/100;
		$days = 90;
		echo "<br>";
		echo "Кредитная ставка: ";
		echo $creditRate *= $count;
		echo "<br>";
		$count = $creditRate * $days + $count ;
		echo "<br>";
		echo ceil($count1 = $count/3).' первая оплата: '.$first_date;
		echo "<br>";
		echo ceil($count2 = $count/3+$creditRate).' вторая оплата: '.$second_date;
		echo "<br>";
		echo ceil($count3 = $count/3+$creditRate+$creditRate).' третья оплата: '.$trird_date;
	?>
	<script type="text/javascript" src="js/jquery-1.6.1.min.js" ></script>
	<script type="text/javascript" src="js/jquery.ui-slider.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#slider").slider({
			    animate: true,
			    min: 80000,
			    max: 160000,
			    value:80000,
			    range: "min",
			    stop: function(event, ui) {
			        jQuery("input#count").val(jQuery("#slider").slider("value"));
			    },
			    slide: function(event, ui){
			        jQuery("input#count").val(jQuery("#slider").slider("value"));
			        
			    }
			});
		});
	</script>
</body>
</html>