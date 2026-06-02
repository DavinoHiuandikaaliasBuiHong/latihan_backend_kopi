<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "davino_latihan_backend";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi DataBase Gagal: " . mysqli_connect_error());
}

?>