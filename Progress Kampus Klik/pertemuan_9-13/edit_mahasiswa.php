<?php
include_once('connect.php');

if (isset($_POST['submit'])) {
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $program_studi = $_POST['program_studi'];

    $query = mysqli_query($connect, "UPDATE mahasiswa SET npm='$npm', nama='$nama', program_studi='$program_studi' WHERE npm='$npm'") or die(mysqli_error($connect));

    if ($query) {
        echo
        "<script>
            alert('Data mahasiswa berhasil diperbarui')
            window.location.href = 'index.php'
        </script>";
    } else {
        echo
        "<script>
            alert('Data mahasiswa gagal diperbarui')
            window.location.href = 'index.php'
        </script>";
    }
}
?>
