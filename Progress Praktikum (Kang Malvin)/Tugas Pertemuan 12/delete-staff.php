<?php
include_once ("./connect.php");

$id = $_GET['id'];

mysqli_query($db, "DELETE FROM staff WHERE id=$id");

echo
    "<script language='javascript'>
            alert('Staff berhasil ditambahkan')
        </script>";

header('Location: ./staff.php');
?>