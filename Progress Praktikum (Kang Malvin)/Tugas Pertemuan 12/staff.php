<?php
include_once ('./connect.php');

$query = mysqli_query($db, 'SELECT * FROM staff')
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Daftar Staff</title>
</head>
<body>
    <div class="container py-3">
    <h1>Daftar Staff</h1>

    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">ID.</th>
            <th scope="col">Nama</th>
            <th scope="col">Telp</th>
            <th scope="col">Email</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($query as $staff): ?>
                    <tr>
                    <td><?php echo $staff['id'] ?></td>
                    <td><?php echo $staff['nama'] ?></td>
                    <td><?php echo $staff['telp'] ?></td>
                    <td><?php echo $staff['email'] ?></td>
                    <td>
                        <a href=<?php echo "./edit-staff.php?id=" . $staff['id']  ?>>
                            EDIT
                        </a>
                    </td>
                    <td>
                        <a href=<?php echo "./delete-staff.php?id=" . $staff['id']  ?>>
                            HAPUS
                        </a>
                    </td>
                </tr>
        <?php endforeach ?>
        </tbody>
    </table>

    <br>
    <a href="./create-staff.php"><button type="button" class="btn btn-success">Tambah staff</button></a>
    <br>
    <br>
    <a href="./index.php"><button type="button" class="btn btn-outline-secondary">Kembali ke halama utama</button></a>
    </div>
</body>
</html>