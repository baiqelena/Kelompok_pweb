<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "pusat_gadai";

$koneksi = mysqli_connect($host, $user, $password, $db);

if (!$koneksi) {
  die("Koneksi gagal: " . mysqli_connect_error());
}
?>
