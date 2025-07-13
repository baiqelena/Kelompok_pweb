<?php
include 'koneksi.php';

$nama = $_POST['nama_lengkap'];
$hp = $_POST['no_hp'];
$barang = $_POST['jenis_barang'];
$taksiran = $_POST['nilai_taksiran'];

$query = "INSERT INTO pengajuan_gadai (nama_lengkap, no_hp, jenis_barang, nilai_taksiran) 
          VALUES ('$nama', '$hp', '$barang', '$taksiran')";

if (mysqli_query($koneksi, $query)) {
  header("Location: sukses.php");
  exit();
} else {
  echo "Gagal menyimpan: " . mysqli_error($koneksi);
}
?>
