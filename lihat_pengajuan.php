<?php
include 'koneksi.php';
$result = mysqli_query($koneksi, "SELECT * FROM pengajuan_gadai");
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Data Pengajuan</title>
  <link rel="stylesheet" href="style.css" />
  <style>
    table {
      width: 90%;
      margin: 50px auto;
      border-collapse: collapse;
    }
    th, td {
      padding: 12px;
      border: 1px solid #ccc;
      text-align: center;
    }
    th {
      background-color: #007b5e;
      color: white;
    }
    h2 {
      text-align: center;
      color: #002b6c;
    }
  </style>
</head>
<body>
  <h2>Daftar Pengajuan Gadai</h2>
  <table>
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Lengkap</th>
        <th>No. HP</th>
        <th>Jenis Barang</th>
        <th>Nilai Taksiran</th>
        <th>Tanggal</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no = 1;
      while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
          <td>{$no}</td>
          <td>{$row['nama_lengkap']}</td>
          <td>{$row['no_hp']}</td>
          <td>{$row['jenis_barang']}</td>
          <td>Rp " . number_format($row['nilai_taksiran'], 0, ',', '.') . "</td>
          <td>{$row['tanggal_pengajuan']}</td>
        </tr>";
        $no++;
      }
      ?>
    </tbody>
  </table>
</body>
</html>
