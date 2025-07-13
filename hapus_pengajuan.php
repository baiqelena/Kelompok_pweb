<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM pengajuan_gadai WHERE id = $id";

  if (mysqli_query($koneksi, $query)) {
    header("Location: dashboard_admin.php");
    exit();
  } else {
    echo "Gagal menghapus data: " . mysqli_error($koneksi);
  }
} else {
  echo "ID tidak ditemukan.";
}
