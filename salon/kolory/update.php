<?php
$IdKoloru=$_GET['IdKoloru'];

include('laczenie.php');

$Kolory = mysqli_query($db, "SELECT * FROM Kolory WHERE IdKoloru='$IdKoloru';");
$Kolor = mysqli_fetch_array($Kolory);

echo('<h3>Edytuj kolor</h3>
			<form action="index.php?Wybor=6&&IdKoloru='.$IdKoloru.'" method="post">
				Kolor: <input type="text" name="Kolor" value="'.$Kolor['Kolor'].'">
				<input type="submit" value="Zapisz">
			</form>
			');
?>