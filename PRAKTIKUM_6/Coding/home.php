<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="home-container">
    <h1>Selamat Datang, <?php echo $_SESSION['username']; ?>!</h1>
    <p>Gender: <?php echo $_SESSION['gender']; ?></p>

    <a class="logout-btn" href="logout.php">Logout</a>
</div>

</body>
</html>
