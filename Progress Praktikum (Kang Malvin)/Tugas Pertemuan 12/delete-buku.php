<?php
include_once ("./connect.php");

$id = $_GET['id'];

mysqli_query($db, "DELETE FROM buku WHERE id=$id");

echo
    "<script language='javascript'>
            alert('Buku berhasil ditambahkan')
        </script>";

header('Location: ./buku.php');
?>