<?php
$IdKoloru=$_GET['IdKoloru'];

include('laczenie.php');

if(mysqli_query($db, "DELETE FROM Kolory WHERE IdKoloru='$IdKoloru';")) 
	echo('<p>Usunięto rekord o Id '.$IdKoloru.'</p>');
else 
	echo('<p>Nie udało się usunąć rekordu</p>');
?>