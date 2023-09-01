<?php
$Kolor=$_POST['Kolor'];

include('laczenie.php');

if(mysqli_query($db, "INSERT INTO Kolory VALUES (NULL,'$Kolor');")) 
	echo('<p>Dodano rekord</p>');
else 
	echo('<p>Nie udało się dodać rekordu</p>');
?>