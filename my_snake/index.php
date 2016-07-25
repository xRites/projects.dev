<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Игра змейка</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	<script src="js/snake.js"></script>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">
					<img alt="xRites" src="...">
				</a>
			</div>
		</div>
	</nav>

	<ul class="breadcrumb">
		<li><a href="#">Домой</a> <span class="divider"></span></li>
		<li><a href="#">Библиотека</a> <span class="divider"></span></li>
		<li><a href="#">Игры</a> <span class="divider"></span></li>
		<li class="active">Змейка</li>
	</ul>	
	<div class="content">
		<div class="col-md-2 nav_left">
			<nav class="navbar navbar-default aside">
				<div class="container-fluid">
					<ul class="nav nav-pills nav-stacked">
						<li role="presentation"><a href="#">Главная</a></li>
						<li role="presentation"><a href="#">Типы данных</a></li>
						<li role="presentation"><a href="#">Строки</a></li>
						<li role="presentation"><a href="#">Массивы</a></li>
						<li role="presentation"><a href="#">Функции</a></li>
						<li role="presentation" class="active"><a href="#">Игры</a></li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="col-md-10 work_space">
			<div class="col-md-1">
				<div class="start">
					<button id="start" type="button" class="btn btn-primary">Начать игру</button>
				</div>
			</div>
			<div class="col-md-3"></div>
			<div class="col-md-3">
				<canvas id="canvas" width="600" height="600"></canvas>
			</div>
			<div class="col-md-3"></div>
		</div>
	</div>
</body>
</html>