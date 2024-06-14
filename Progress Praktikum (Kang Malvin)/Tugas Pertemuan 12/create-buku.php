<?php
include_once ('./connect.php');

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $isbn = $_POST['isbn'];
    $unit = $_POST['unit'];

    $query = mysqli_query($db, "INSERT INTO buku VALUES(
        NULL, '$nama', '$isbn', '$unit'
    )");

    echo
        "<script>
            alert('Buku berhasil ditambahkan')
        </script>";


    header('Location: ./buku.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Tambah Buku</title>
</head>
<body>
    <div class="container py-3">
        <h1>Form Tambah Buku</h1>

        <form method="post">
        <div class="mb-3">
            <label class="form-label" for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" >
        </div>
        
        <div class="mb-3">
            <label class="form-label" for="isbn">ISBN</label>
            <input type="text" name="isbn" class="form-control" >
        </div>
        
        <div class="mb-3">
            <label class="form-label" for="unit">Unit</label>
            <input type="text" name="unit" class="form-control" >
        </div>
        
        <button type="submit" name="submit" class="btn btn-primary">Tambah Buku</button>
        </form>
        
        <br>
        <a href="./buku.php"><button type="button" class="btn btn-secondary">Kembali</button>
</a>
        <a href="./index.php"><button type="button" class="btn btn-outline-warning ms-2">Kembali ke halama utama</button></a>
    </div>
</body>
</html>