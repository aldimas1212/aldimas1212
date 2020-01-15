<?php
$host = "localhost";
$user = "id12246994_esbatu1";
$pass = "thatshouldbeme";
$name = "id12246994_esbatu";

//$koneksi = mysqli_connect($host, $user, $pass, $name);
$koneksi = mysqli_connect($host, $user, $pass, $name) or die("Koneksi ke database gagal!");
mysqli_select_db($koneksi, $name) or die("Tidak ada database yang dipilih!");
?>