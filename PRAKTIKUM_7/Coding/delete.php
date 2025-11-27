<?php
include 'koneksi.php';
$id = $_GET['id'];


$data = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM namasiswa WHERE id=$id"));
unlink("gambar/".$data['foto']);


mysqli_query($koneksi, "DELETE FROM namasiswa WHERE id=$id");


echo "<script>alert('Foto dihapus!'); window.location='tampil.php';</script>";
?>