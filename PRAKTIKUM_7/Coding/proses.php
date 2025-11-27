<?php
include 'koneksi.php';


$nama = $_POST['nama'];
$file = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
$ukuran = $_FILES['foto']['size'];


$folder = 'gambar/';
$ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
$valid = ['jpg','jpeg','png','gif'];
$namaBaru = rand(1000,9999) . time() . '.' . $ext;


if(!in_array($ext, $valid)){
echo "<script>alert('Format file tidak valid!'); window.location='index.php';</script>";
exit;
}


if($ukuran > 1000000){
echo "<script>alert('Ukuran gambar terlalu besar!'); window.location='index.php';</script>";
exit;
}


move_uploaded_file($tmp, $folder.$namaBaru);


mysqli_query($koneksi, "INSERT INTO namasiswa VALUES(NULL, '$nama', '$namaBaru')");


echo "<script>alert('Berhasil Upload!'); window.location='tampil.php';</script>";
?>