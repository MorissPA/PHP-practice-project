<?php
$IdAuta=$_GET['IdAuta'];

include('laczenie.php');

$Auta = mysqli_query($db, "SELECT * FROM auta WHERE IdAuta='$IdAuta';");
$row = mysqli_fetch_array($Auta);

echo('<h3>Edytuj auto</h3>
			<form action="index.php?Wybor=6&&IdAuta='.$IdAuta.'" method="post">
				Model: <input type="text" name="Model" value="'.$row['Model'].'"><br>
				Marka: <input type="text" name="Marka" value="'.$row['Marka'].'"><br>
				
				Cena: <input type="text" name="Cena" value="'.$row['Cena'].'"><br>
				');
			echo 'Kolor: <select name="kolor">';
			$Kolor = mysqli_query($db, "SELECT * FROM Kolory");
			while($row1 = mysqli_fetch_array($Kolor)){
			echo "<option value=" . $row1['IdKoloru'] . ">" . $row1['Kolor'] . "</option>";
			}
			echo '</select><br>
				<input type="submit" value="Zapisz">
			</form>';

?>