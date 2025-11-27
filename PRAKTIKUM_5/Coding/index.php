<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Pendaftaran Sekolah</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
  <h2 class="text-center mb-4">📚 Data Pendaftaran Siswa Baru</h2>

  <div class="d-flex justify-content-end mb-3">
    <a href="tambah.php" class="btn btn-success">+ Tambah Data</a>
  </div>

  <table class="table table-bordered table-hover shadow-sm bg-white">
    <thead class="table-dark">
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Tanggal Lahir</th>
        <th>Alamat</th>
        <th>Asal Sekolah</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $result = mysqli_query($conn, "SELECT * FROM siswa ORDER BY id_siswa DESC");
      $no = 1;
      while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>
                  <td>$no</td>
                  <td>{$row['nama']}</td>
                  <td>{$row['jenis_kelamin']}</td>
                  <td>{$row['tanggal_lahir']}</td>
                  <td>{$row['alamat']}</td>
                  <td>{$row['asal_sekolah']}</td>
                  <td>
                    <a href='edit.php?id={$row['id_siswa']}' class='btn btn-warning btn-sm'>Edit</a>
                    <a href='hapus.php?id={$row['id_siswa']}' class='btn btn-danger btn-sm' onclick='return confirm(\"Yakin mau hapus?\")'>Hapus</a>
                  </td>
                </tr>";
          $no++;
      }
      ?>
    </tbody>
  </table>
</div>

</body>
</html>
