<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Добавим шуточку?</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="content">
			<form action="" method="POST">
				<textarea name="message" class="form-control" rows="5" placeholder="Введем шуточку?"></textarea>
				<input name="add" type="submit" value="Добавляем">
			</form>
		</div>
		<?php
			include('connect_to_db.php');
			if(isset($_POST['add'])){
				$text = $_POST['message'];
				$add = mysqli_query($dbcnx,"INSERT INTO joke (`joke`) VALUES('$text')");
			}
		?>
	</div>
	
</body>
</html>