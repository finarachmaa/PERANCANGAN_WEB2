<?php
$conn = mysqli_connect("localhost", "root", "", "web_login");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
