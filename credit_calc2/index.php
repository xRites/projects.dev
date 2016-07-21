<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Кредитный калькулятор(свободные поля)</title>
</head>
<body>
	<form action="" method="POST">
		<div class="inp_value">
			<input type="text" placeholder="Введите сумму кредита" name="value"/>
		</div>
		<div class="stavka">
			<input type="text" placeholder="Введите ставку" name="stavka"/>
		</div>
		<div class="date">
			<input type="text" placeholder="Введите количество дней" name="date"/>
		</div>
		<input type="submit" value="start" name="start">
	</form>
	<?php
	if(isset($_POST['start'])){
		$value = $_POST['value'];
		$creditRate = $_POST['stavka'];
		$date = $_POST['date'];
	echo '<br> Сумма: '.$value.' на срок: '.$date.' дней с процентной ставкой '.$creditRate.'%.<br>';
	$creditRate = ($value*$creditRate)/100;
	$creditRate *= $date;
	$result = $creditRate + $value;
	$remuneration = $result - $value;
	echo 'К оплате '.$result.' = '.$value.'<br>';
	echo 'Вознаграждение: '.$remuneration;	
	}

	?>
</body>
</html>