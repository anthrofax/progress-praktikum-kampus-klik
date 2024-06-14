<?php
include_once("./connect.php");

$npm = $_GET['npm'];

$proses_hapus = mysqli_query($connect, "DELETE FROM mahasiswa WHERE npm=$npm");

if ($proses_hapus) {
    echo
    "<script>
        alert('Data mahasiswa berhasil dihapus')
        window.location.href = 'index.php'
    </script>";

} else {
    echo
    "<script>
        alert('Data mahasiswa gagal dihapus')
        window.location.href = 'index.php'
    </script>";
}
