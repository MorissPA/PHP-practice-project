<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>15</title>
    <style>
        body {
            background: rgb(198, 228, 35);
            background: linear-gradient(90deg, rgba(198, 228, 35, 1) 0%, rgba(200, 209, 31, 1) 35%, rgba(137, 193, 80, 1) 66%, rgba(0, 212, 255, 1) 100%);
        }

        a {
            color: black;
        }

        input {
            background-color: aliceblue;
        }

        table {
            border-collapse: collapse;
            border: 2px solid black;
            background: rgb(244, 235, 172);
            background: radial-gradient(circle, rgba(244, 235, 172, 1) 0%, rgba(209, 168, 31, 1) 35%, rgba(193, 102, 80, 1) 66%, rgba(242, 199, 148, 1) 100%);
        }

        td {
            border: 1px solid black;
            width: 5em;
            text-align: center;

        }

        tr {
            border: 1px solid black;

        }
    </style>
</head>

<body>

    <?php

    $conn = mysqli_connect("localhost", "root", "", "piasek");

    if (mysqli_connect_errno()) {
        echo "Błąd połączenia nr: " . mysqli_connect_errno();
        echo "Opis błędu: " . mysqli_connect_error();
        exit();
    }



    mysqli_query($conn, 'SET NAMES utf8');
    mysqli_query($conn, 'SET CHARACTER SET utf8');
    mysqli_query($conn, "SET collation_connection = utf8_polish_ci");

    session_start();



    if (isset($_GET['Zmien'])) {
        $ID = $_GET['Zmien'];
        $result = mysqli_query($conn, "SELECT * FROM reprezentacja WHERE ID = '$ID'");
        $row = mysqli_fetch_assoc($result);
        $LP = $row["LP"];
        $Imie = $row["Imie"];
        $Nazwisko = $row["Nazwisko"];
        $Data_ur = $row["Data_ur"];
    }
    ?>


    <form>

        <p>Lp: </p> <input type="text" value="<?php if (isset($_GET['Zmien']))
                                                    echo $LP; ?>" name="Lp" id="Lp">
        <p>Imie: </p><input type="text" value='<?php if (isset($_GET['Zmien']))
                                                    echo $Imie; ?>' name="Imie" id="imie">
        <p>Nazwisko: </p><input type="text" value='<?php if (isset($_GET['Zmien']))
                                                        echo $Nazwisko; ?>' name="Nazwisko" id="Nazwisko">
        <p>Data_Ur: </p><input type="Date" value='<?php if (isset($_GET['Zmien']))
                                                        echo $Data_ur; ?>' name="Data_ur" id="Data_ur">
        <input type="submit" name="submit">
        <input type="hidden" name="ID" value="<?php if (isset($_GET['Zmien'])) {
                                                    echo $_GET['Zmien'];
                                                } else {
                                                    echo 0;
                                                } ?>">


    </form><br>

    <?php

    if (isset($_GET['ID']) && $_GET['ID'] != 0) {
        $ID = $_GET['ID'];
        $Lp = $_GET['Lp'];
        $Imie = $_GET['Imie'];
        $Nazwisko = $_GET['Nazwisko'];
        $Data = $_GET['Data_ur'];

        mysqli_query($conn, "UPDATE  reprezentacja SET LP = '$Lp', Imie = '$Imie', Nazwisko = '$Nazwisko', Data_ur = '$Data' WHERE ID = '$ID'");
    }
    if (isset($_GET['Delete'])) {
        $Delete =  $_GET["Delete"];
        mysqli_query($conn, "DELETE FROM reprezentacja WHERE ID = '$Delete'");
    }
    if (isset($_GET['ID']) && $_GET['ID'] == 0) {
        $Lp = $_GET['Lp'];
        $Imie = $_GET['Imie'];
        $Nazwisko = $_GET['Nazwisko'];

        $Data_ur = $_GET['Data_ur'];
        $wysylka = "INSERT INTO reprezentacja VALUES (null,'$Lp','$Imie','$Nazwisko','$Data_ur')";
        mysqli_query($conn, $wysylka);
        $Imie = null;
    }

    echo "<table>
        <thead>
            <tr>
            <th>ID</th>
            <th><a href='?sort=lp'>LP</a></th>
            <th><a href='?sort=imie'>Imie</a></th>
            <th><a href='?sort=nazwisko'>Nazwisko</a></th>
            <th>Wiek</th>
            <th><a href='?sort=data_ur'>Data_ur</a></th>
            <th>Delete</th>
            <th>Zmien</th>
                
            </tr>
        </thead>";


    if (!isset($_SESSION['sort'])) {
        $_SESSION['sort'] = 'LP';
    }
    if (isset($_GET['sort'])) {
        $_SESSION['sort'] = $_GET['sort'];
    }
    $result = mysqli_query($conn, "SELECT * FROM reprezentacja ORDER BY " . $_SESSION['sort']);
    $obecna = new DateTime(date("y-m-d"));


    while ($row = mysqli_fetch_assoc($result)) {
        $data = new DateTime($row["Data_ur"]);
        $wiek = $obecna->diff($data);
        echo "
        <tr>
            <td>" . $row["ID"] . "</td>
            <td>" . $row["LP"] . "</td>
            <td>" . $row["Imie"] . "</td>
            <td>" . $row["Nazwisko"] . "</td>
            <td>" . $wiek->y . "</td>
            <td>" . $row["Data_ur"] . "</td>
            <td> <a href=\"Piasek.php?Delete=" . $row['ID'] . "\" onclick=\"return confirm('Potwierdz')\">Delete</a>  </td>
            <td> <a href=\"Piasek.php?Zmien=" . $row['ID'] . "\"> Zmien </a> </td>
        </tr>";
    }
    //    }
    echo "
        
            ";

    /* Zamknięcie połączenia z serwerem MySQL*/
    mysqli_close($conn);
    ?>



    </table>

</body>

</html>