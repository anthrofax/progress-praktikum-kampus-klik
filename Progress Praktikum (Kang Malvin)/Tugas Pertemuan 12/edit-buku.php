<?php
include_once ('./connect.php');

$id = $_GET['id'];

$get_buku = mysqli_query($db, "SELECT * FROM buku WHERE id=$id");

$buku = mysqli_fetch_assoc($get_buku);

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $isbn = $_POST['isbn'];
    $unit = $_POST['unit'];

    $query = mysqli_query($db, "UPDATE buku SET nama='$nama', isbn='$isbn', unit='$unit' WHERE id='$id'");

    echo
        "<script>
            alert('Buku berhasil diperbarui')
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
    <title>Edit Buku</title>
</head>
<body>
    <div class="container py-3">
        <h1>Form Update Data Buku</h1>

        <form method="post">
        <div class="mb-3">
            <label class="form-label" for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" value="<?php echo $buku['nama'] ?>">
        </div>
        
        <div class="mb-3">
            <label class="form-label" for="isbn">ISBN</label>
            <input type="text" name="isbn" class="form-control" value="<?php echo $buku['isbn'] ?>">
        </div>
        
        <div class="mb-3">
            <label class="form-label" for="unit">Unit</label>
            <input type="text" name="unit" class="form-control" value="<?php echo $buku['unit'] ?>">
        </div>
        
        <button type="submit" name="submit" class="btn btn-primary">Edit Buku</button>
        </form>
        
        <br>
        <a href="./buku.php"><button type="button" class="btn btn-secondary">Kembali</button>
</a>
    </div>

</body>
</html>