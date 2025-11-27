<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Galeri Foto</title>
<style>
body{ background:#eef2ff; font-family: Arial; padding:20px; }
.container{
width:90%; margin:auto;
}
.card{
width:200px; padding:10px; background:white;
border-radius:10px; margin:10px; display:inline-block;
box-shadow:0 0 10px rgba(0,0,0,0.1); text-align:center;
}
img{ width:100%; height:180px; object-fit:cover; border-radius:8px; }
a.delete{
display:block; margin-top:10px; padding:6px;
background:#ff4d4d; color:white; text-decoration:none;
border-radius:6px;
}
a.delete:hover{ background:#d63838; }
</style>
</head>
<body>
<div class="container">
<h2>Galeri Foto Siswa</h2>
<a href="index.php">⬅ Upload Baru</a>
<br><br>
<?php
$query = mysqli_query($koneksi, "SELECT * FROM namasiswa ORDER BY id DESC");
while($row = mysqli_fetch_assoc($query)){
?>
<div class="card">
<img src="gambar/<?php echo $row['foto']; ?>">
<h4><?php echo $row['nama']; ?></h4>
<a class="delete" href="delete.php?id=<?php echo $row['id']; ?>">Hapus</a>
</div>
<?php } ?>
</div>
</body>
</html>