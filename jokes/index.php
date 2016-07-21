<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Шутки и выражения</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	<div class="add_joke">
		<label for=""> Хочешь <a href="joke_add.php">добавить</a> шутку? </label>
	</div>
		<div class="joke_content">
				<?php
					include('connect_to_db.php');
					$show_all = mysqli_query($dbcnx,"SELECT * FROM joke ORDER BY RAND() LIMIT 0,1");
					while($row = mysqli_fetch_array($show_all))
					{
						echo "<div>".$row['joke']."</div>";
					}
				?>
		</div>
	</div>
</body>
</html>