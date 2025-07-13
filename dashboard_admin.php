<?php
session_start();
if (!isset($_SESSION['admin'])) {
  header('Location: login_admin.php');
  exit;
}
?>
<?php
include 'koneksi.php';

$result = mysqli_query($koneksi, "SELECT * FROM pengajuan_gadai ORDER BY tanggal_pengajuan DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard Admin</title>
  <link rel="stylesheet" href="style.css" />
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f6fa;
      padding: 20px;
    }

    h2 {
      text-align: center;
      color: #002b6c;
      margin-bottom: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background-color: white;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    th, td {
      padding: 12px;
      text-align: center;
      border: 1px solid #ddd;
    }

    th {
      background-color: #007b5e;
      color: white;
    }

    .btn-hapus {
      background-color: #d9534f;
      color: white;
      border: none;
      padding: 6px 12px;
      border-radius: 4px;
      cursor: pointer;
      text-decoration: none;
    }

    .btn-hapus:hover {
      background-color: #c9302c;
    }
  </style>
</head>
<body>
  <h2>Dashboard Admin - Data Pengajuan Gadai</h2>

  <table>
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Lengkap</th>
        <th>No. HP</th>
        <th>Jenis Barang</th>
        <th>Nilai Taksiran</th>
        <th>Tanggal Pengajuan</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no = 1;
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
          <td>{$no}</td>
          <td>{$row['nama_lengkap']}</td>
          <td>{$row['no_hp']}</td>
          <td>{$row['jenis_barang']}</td>
          <td>Rp " . number_format($row['nilai_taksiran'], 0, ',', '.') . "</td>
          <td>{$row['tanggal_pengajuan']}</td>
          <td><a href='hapus_pengajuan.php?id={$row['id']}' class='btn-hapus' onclick=\"return confirm('Yakin ingin menghapus?')\">Hapus</a></td>
        </tr>";
        $no++;
      }
      ?>
    </tbody>
  </table>
</body>
</html>
