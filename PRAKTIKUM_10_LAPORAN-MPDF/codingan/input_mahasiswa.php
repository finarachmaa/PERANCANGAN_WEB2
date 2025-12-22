<!DOCTYPE html>
<html>
<head>
    <title>Input Data Mahasiswa</title>
    <style>
        body {
            font-family: Arial;
            background: #f4f4f4;
        }
        .container {
            width: 400px;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
        }
        h2 {
            text-align: center;
        }
        input, button {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
        }
        button {
            background: #2c3e50;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background: #34495e;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Input Data Mahasiswa</h2>
    <form action="simpan_mahasiswa.php" method="post">
        <input type="text" name="nim" placeholder="NIM" required>
        <input type="text" name="nama" placeholder="Nama Mahasiswa" required>
        <input type="text" name="jurusan" placeholder="Jurusan" required>
        <button type="submit">Simpan</button>
    </form>
</div>

</body>
</html>