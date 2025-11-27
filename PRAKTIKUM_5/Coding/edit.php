<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM siswa WHERE id_siswa='$id'"));
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Edit Data Siswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5 col-md-6">
  <h3 class="text-center mb-4">✏️ Edit Data Siswa</h3>
  <form action="" method="post" class="card p-4 shadow">
    <input type="hidden" name="id_siswa" value="<?= $data['id_siswa'] ?>">
    <div class="mb-3">
      <label>Nama Lengkap</label>
      <input type="text" name="nama" class="form-control" value="<?= $data['nama'] ?>" required>
    </div>
    <div class="mb-3">
      <label>Jenis Kelamin</label>
      <select name="jenis_kelamin" class="form-control">
        <option value="Laki-laki" <?= $data['jenis_kelamin']=='Laki-laki'?'selected':'' ?>>Laki-laki</option>
        <option value="Perempuan" <?= $data['jenis_kelamin']=='Perempuan'?'selected':'' ?>>Perempuan</option>
      </select>
    </div>
    <div class="mb-3">
      <label>Tanggal Lahir</label>
      <input type="date" name="tanggal_lahir" class="form-control" value="<?= $data['tanggal_lahir'] ?>">
    </div>
    <div class="mb-3">
      <label>Alamat</label>
      <textarea name="alamat" class="form-control"><?= $data['alamat'] ?></textarea>
    </div>
    <div class="mb-3">
      <label>Asal Sekolah</label>
      <input type="text" name="asal_sekolah" class="form-control" value="<?= $data['asal_sekolah'] ?>">
    </div>
    <div class="text-end">
      <button type="submit" name="update" class="btn btn-primary">Update</button>
      <a href="index.php" class="btn btn-secondary">Kembali</a>
    </div>
  </form>
</div>

<?php
if (isset($_POST['update'])) {
  $id = $_POST['id_siswa'];
  $nama = $_POST['nama'];
  $jk = $_POST['jenis_kelamin'];
  $tgl = $_POST['tanggal_lahir'];
  $alamat = $_POST['alamat'];
  $asal = $_POST['asal_sekolah'];

  $update = mysqli_query($conn, "UPDATE siswa SET
                nama='$nama',
                jenis_kelamin='$jk',
                tanggal_lahir='$tgl',
                alamat='$alamat',
                asal_sekolah='$asal'
              WHERE id_siswa='$id'");

  if ($update) {
    echo "<script>alert('Data berhasil diupdate!');window.location='index.php';</script>";
  } else {
    echo "Gagal: " . mysqli_error($conn);
  }
}
?>
</body>
</html>
