<?php
echo('<h3>Dodaj Auto</h3>
			
			<form action="index.php?Wybor=3" method="post"><br>
			Marka: <input type="text" name="Marka" required><br>
			Model: <input type="text" name="Model" required><br>
			Kolor: <select name="kolor">
			');
			include('laczenie.php');
			$Kolor = mysqli_query($db, "SELECT * FROM Kolory");
			while($row = mysqli_fetch_array($Kolor)){
			echo "<option value=" . $row['IdKoloru'] . ">" . $row['Kolor'] . "</option>";
			}
			echo('
			</select><br>
			Cena: <input type="text" name="Cena" required><br>
			<input type="submit" value="Dodaj">
			</form>
			');
?>