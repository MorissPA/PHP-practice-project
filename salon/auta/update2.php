<?php
$IdAuta=$_GET['IdAuta'];
$Model=$_POST['Model'];
$Marka=$_POST['Marka'];
$IdKoloru=$_POST['kolor'];
$Cena=$_POST['Cena'];


include('laczenie.php');

if(mysqli_query($db, "UPDATE Auta SET Marka='$Marka', Model='$Model', Cena='$Cena', IdKoloru='$IdKoloru' WHERE IdAuta='$IdAuta';")) 
	echo('<p>Zapisano zmiany</p>');
else 
	echo('<p>Nie udało się zapisać zmian</p>');
?>