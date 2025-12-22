<?php
include 'koneksi.php';

// tampilkan error PHP
error_reporting(E_ALL);
ini_set('display_errors', 1);

$nim     = $_POST['nim'];
$nama    = $_POST['nama'];
$jurusan = $_POST['jurusan'];

$query = mysqli_query($koneksi,
    "INSERT INTO mahasiswa (nim, nama, jurusan)
     VALUES ('$nim', '$nama', '$jurusan')"
);

if ($query) {
    header("Location: laporan_mahasiswa.php");
} else {
    echo "Gagal menyimpan data <br>";
    echo "Error MySQL: " . mysqli_error($koneksi);
}