<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Data Siswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5 col-md-6">
  <h3 class="text-center mb-4">📝 Form Pendaftaran Siswa Baru</h3>
  <form action="" method="post" class="card p-4 shadow">
    <div class="mb-3">
      <label>Nama Lengkap</label>
      <input type="text" name="nama" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Jenis Kelamin</label>
      <select name="jenis_kelamin" class="form-control" required>
        <option value="">-- Pilih --</option>
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
      </select>
    </div>
    <div class="mb-3">
      <label>Tanggal Lahir</label>
      <input type="date" name="tanggal_lahir" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Alamat</label>
      <textarea name="alamat" class="form-control" rows="3"></textarea>
    </div>
    <div class="mb-3">
      <label>Asal Sekolah</label>
      <input type="text" name="asal_sekolah" class="form-control">
    </div>
    <div class="text-end">
      <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
      <a href="index.php" class="btn btn-secondary">Kembali</a>
    </div>
  </form>
</div>

<?php
if (isset($_POST['submit'])) {
  $nama = $_POST['nama'];
  $jk = $_POST['jenis_kelamin'];
  $tgl = $_POST['tanggal_lahir'];
  $alamat = $_POST['alamat'];
  $asal = $_POST['asal_sekolah'];

  $sql = "INSERT INTO siswa (nama, jenis_kelamin, tanggal_lahir, alamat, asal_sekolah)
          VALUES ('$nama', '$jk', '$tgl', '$alamat', '$asal')";
  if (mysqli_query($conn, $sql)) {
      echo "<script>alert('Data berhasil disimpan!');window.location='index.php';</script>";
  } else {
      echo "Error: " . mysqli_error($conn);
  }
}
?>
</body>
</html>
