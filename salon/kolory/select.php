<?php
/*
Wyświetlenie zawartości tabeli kolory
*/

include('laczenie.php');

$Kolory = mysqli_query($db, "SELECT * FROM Kolory");
$IleKolorow = mysqli_num_rows($Kolory);

echo('<br /><br /><table border="1" width="400">');

echo('<tr>
					<th>IdKoloru</th>
					<th>Kolor</th>
					<th>Usuwanie</th>
					<th>Edycja</th>
			</tr>');
			
for ($i=1; $i <= $IleKolorow; $i++)
{
	$Kolor = mysqli_fetch_array($Kolory);
	echo('<tr>
					<td>'.$Kolor['IdKoloru'].'</td>
					<td>'.$Kolor['Kolor'].'</td>
					<td><a href="index.php?Wybor=4&&IdKoloru='.$Kolor['IdKoloru'].'">Usuń</a></td>
					<td><a href="index.php?Wybor=5&&IdKoloru='.$Kolor['IdKoloru'].'">Edytuj</a></td>
				</tr>');
}
echo('</table>');

?>