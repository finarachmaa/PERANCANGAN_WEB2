<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$alamat = $_POST['alamat'];
$asal_sekolah = $_POST['asal_sekolah'];

$sql = "INSERT INTO siswa (nama, jenis_kelamin, tanggal_lahir, alamat, asal_sekolah)
        VALUES ('$nama', '$jenis_kelamin', '$tanggal_lahir', '$alamat', '$asal_sekolah')";

if (mysqli_query($conn, $sql)) {
    echo "<h3>Pendaftaran Berhasil!</h3>";
    echo "<b>Data yang Anda masukkan:</b><br>";
    echo "Nama: $nama<br>";
    echo "Jenis Kelamin: $jenis_kelamin<br>";
    echo "Tanggal Lahir: $tanggal_lahir<br>";
    echo "Alamat: $alamat<br>";
    echo "Asal Sekolah: $asal_sekolah<br><br>";
    echo "<a href='form_pendaftaran.html'>Kembali ke Form</a>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
