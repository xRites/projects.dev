<?php 
	$dblocation = "localhost";
	$dbname = "dev.loc";
	$dbuser = "root";
	$dbpasswd = "125605";
	$dbcnx = @mysqli_connect($dblocation,$dbuser,$dbpasswd);
	mysqli_query($dbcnx, "SET NAMES 'utf8'"); 
	mysqli_query($dbcnx, "SET CHARACTER SET 'utf8'");
	mysqli_query($dbcnx, "SET SESSION collation_connection = 'utf8_general_ci'");

	if (!$dbcnx)
	{
		echo("<P>В настоящий момент сервер базы данных не доступен, поэтому 
			корректное отображение страницы невозможно.</P>");
		exit();
	}
	if (!@mysqli_select_db($dbcnx, $dbname)) 
	{
		echo( "<P>В настоящий момент база данных не доступна, поэтому
			корректное отображение страницы невозможно.</P>" );
		exit();
	}
?>