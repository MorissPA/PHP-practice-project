<?php
$IdAuta=$_GET['IdAuta'];

include('laczenie.php');

if(mysqli_query($db, "DELETE FROM Auta WHERE IdAuta='$IdAuta';")) 
	echo('<p>Usunięto rekord o Id '.$IdAuta.'</p>');
else 
	echo('<p>Nie udało się usunąć rekordu</p>');
?>