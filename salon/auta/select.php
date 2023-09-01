<?php
/*
Wyświetlenie zawartości tabeli kolory
*/

include('laczenie.php');

$Auta = mysqli_query($db, "SELECT *, kolory.Kolor AS Kolor FROM Auta INNER JOIN kolory ON kolory.IdKoloru = auta.IdKoloru");

echo('<br /><br /><table border="1" width="400">');

echo('<tr>
					<th>IdAuta</th>
					<th>Marka</th>
					<th>Model</th>
					<th>Kolor</th>
					<th>Cena</th>
					<th>Usuwanie</th>
					<th>Edycja</th>
			</tr>');
			
while($row = mysqli_fetch_array($Auta)){
	echo('<tr>
					<td>'.$row['IdAuta'].'</td>
					<td>'.$row['Marka'].'</td>
					<td>'.$row['Model'].'</td>
					<td>'.$row['Kolor'].'</td>
					<td>'.$row['Cena'].'</td>
					<td><a href="index.php?Wybor=4&&IdAuta='.$row['IdAuta'].'">Usuń</a></td>
					<td><a href="index.php?Wybor=5&&IdAuta='.$row['IdAuta'].'">Edytuj</a></td>
				</tr>');
}
echo('</table>');

?>