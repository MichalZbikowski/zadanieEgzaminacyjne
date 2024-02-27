<?php

$conn = mysqli_connect("localhost", "root", "", "ee09");

$nrKaretki = $_POST['nrKaretki'];
$imie1 = $_POST['imie1'];
$imie2 = $_POST['imie2'];
$imie3 = $_POST['imie3'];


$sql = "INSERT INTO `ratownicy`(`nrKaretki`, `ratownik1`, `ratownik2`, `ratownik3`) VALUES (20, '$imie1', '$imie2', '$imie3')";
$zapytanie = mysqli_query($conn,$sql);

mysqli_close($conn);
?>