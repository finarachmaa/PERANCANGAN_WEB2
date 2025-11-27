<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Upload Gambar</title>
<style>
body {
font-family: Arial;
background: #f3f6ff;
padding: 40px;
}
.container{
width: 420px;
margin: auto;
background: white;
padding: 25px;
border-radius: 12px;
box-shadow: 0 0 12px rgba(0,0,0,0.1);
}
input[type=text], input[type=file] {
width: 100%;
padding: 12px;
margin-top: 10px;
border-radius: 8px;
border: 1px solid #ccc;
}
button{
margin-top: 15px;
width: 100%;
padding: 12px;
background: #4a6cf7;
border: none;
border-radius: 8px;
color: white;
font-size: 16px;
cursor: pointer;
}
button:hover{ background: #3957d0; }
</style>
</head>
<body>
<div class="container">
<h2>Upload Foto Siswa</h2>
<form action="proses.php" method="post" enctype="multipart/form-data">
<label>Nama:</label>
<input type="text" name="nama" required>


<label>Pilih Foto:</label>
<input type="file" name="foto" required>


<button type="submit">Upload</button>
</form>
<br>
<a href="tampil.php">➡ Lihat Semua Foto</a>
</div>
</body>
</html>