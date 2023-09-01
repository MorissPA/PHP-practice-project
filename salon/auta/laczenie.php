<?php
/*
Łączenie z bazą danych.

Użytkownik: root
Hasła brak
Nazwa bazy danych: salon

*/


$servername = "localhost";
$username = "root";
$password = "";
$basename = "salon";

// Create connection
$db = mysqli_connect($servername, $username, $password, $basename);

// Check connection
if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

?>