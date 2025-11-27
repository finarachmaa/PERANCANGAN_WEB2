<?php
$koneksi = mysqli_connect("localhost", "root", "", "foto");
if(!$koneksi){
die("Koneksi gagal: " . mysqli_connect_error());
}
?>