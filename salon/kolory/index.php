<!DOCTYPE html>
<html lang="pl=PL">
<head>
	<meta charset="UTF-8">
	<title>Salon samochodowy</title>
</head>
<body>
<h1>Panel administratora - tabela kolory</h1>
	<h3>Menu:</h3>
	<a href="index.php?Wybor=1">Przeglądaj</a> | 
	<a href="index.php?Wybor=2">Dodaj kolor</a> | 
	<a href="../">Powrót do panelu</a>

<?php
if(isset($_GET['Wybor']))
{
	switch($_GET['Wybor'])
	{
		case 1: include('select.php'); break;
		case 2: include('insert.php'); break;
		case 3: include('insert2.php'); break;
		case 4: include('delete.php'); break;
		case 5: include('update.php'); break;
		case 6: include('update2.php'); break;
	}
}
else
{
	include('select.php');
}
?>
</body>
</html>