<?php
session_start();

if (!isset($_SESSION['email'])) {
    header('Location: ./login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Aplikasi Perpustakaan</title>
</head>
<body>
    <div class="container py-3">
    <h1 class="display-5">Aplikasi Perpustakaan</h1>
    <br>
    
    <a href="./buku.php" >
        <button type="button" class="btn btn-success">Lihat Daftar Buku</button>
    </a>
    
<br>
    <a href="./staff.php" ><button type="button" class="btn btn-info mt-3">Lihat Daftar Staff</button></a>

    <br><br>

    <form action="./logout.php" method="POST">
    <button class="btn btn-danger">Logout</button>
    </form>
    </div>
</body>
</html>