<?php
$host = "localhost";
$user = "root"; // default XAMPP
$pass = "";     // kosongkan jika belum diubah
$db   = "db_pendaftaran";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
// echo "Koneksi berhasil"; // untuk uji koneksi
?>
