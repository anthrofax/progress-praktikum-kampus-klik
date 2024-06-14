<?php
include_once('connect.php');

if (isset($_POST['submit'])) {
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $program_studi = $_POST['program_studi'];

    if (!is_numeric($npm) && $npm !== '') {
        echo "<script>
                alert('Data yang diinputkan harus berupa angka!');
              </script>";
    } else if (strlen($npm) > 13) {
        echo "<script>
                alert('Data yang anda inputkan lebih dari 13 digit!');
              </script>";
    } else if (strlen($npm) < 13 && $npm !== '') {
        echo "<script>
                alert('Data yang anda inputkan kurang dari 13 digit!');
              </script>";
    } else {
        $query = mysqli_query($connect, "INSERT INTO mahasiswa VALUES(
        '$npm', '$nama', '$program_studi')") or die(mysqli_error($connect));


        if ($query) {
            echo
            "<script>
            alert('Data mahasiswa berhasil ditambahkan')
        </script>";
        } else {
            echo
            "<script>
            alert('Data mahasiswa gagal ditambahkan')
        </script>";
        }
    }

    echo
    "<script>
        window.location.href = 'index.php'
    </script>";
}
