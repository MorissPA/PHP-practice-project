<?php
$IdKoloru=$_GET['IdKoloru'];
$Kolor=$_POST['Kolor'];

include('laczenie.php');

if(mysqli_query($db, "UPDATE Kolory SET Kolor='$Kolor' WHERE IdKoloru='$IdKoloru';")) 
	echo('<p>Zapisano zmiany</p>');
else 
	echo('<p>Nie udało się zapisać zmian</p>');
?>