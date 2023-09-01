<?php
$Model=$_POST['Model'];
$Marka=$_POST['Marka'];
$IdKoloru=$_POST['kolor'];
$Cena=$_POST['Cena'];

include('laczenie.php');

if(mysqli_query($db, "INSERT INTO auta VALUES (NULL,'$Marka', '$Model', '$IdKoloru', '$Cena');")) 
	echo('<p>Dodano rekord</p>');
else 
	echo('<p>Nie udało się dodać rekordu</p>');
?>