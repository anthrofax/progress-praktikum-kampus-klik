<?php
include 'connect.php';
include 'tampilkan_mahasiswa.php';

$npm = $_GET['npm'];

$get_data_edit = mysqli_query($connect, "SELECT * FROM mahasiswa WHERE npm='$npm'");

$data_edit = mysqli_fetch_assoc($get_data_edit);


if (isset($_POST['submit'])) {
    $cari_npm = $_POST['cari_npm'];

    if (!is_numeric($cari_npm) && $cari_npm !== '') {
        echo "<script>
                alert('Data yang diinputkan harus berupa angka!');
              </script>";
    } else if (strlen($cari_npm) > 13) {
        echo "<script>
                alert('Data yang anda inputkan lebih dari 13 digit!');
              </script>";
    } else if (strlen($cari_npm) < 13 && $cari_npm !== '') {
        echo "<script>
                alert('Data yang anda inputkan kurang dari 13 digit!');
              </script>";
    } else {
        $get_data_cari = mysqli_query($connect, "SELECT * FROM mahasiswa WHERE npm LIKE '$cari_npm%'");

        if (mysqli_num_rows($get_data_cari) === 0) {
            echo "<script>
                    alert('Data yang anda cari tidak ditemukan!');
                  </script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="library/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="library/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="library/assets/styles.css" rel="stylesheet" media="screen">

    <title>Pertemuan 9</title>
</head>

<body>
    <!--/span-->
    <div class="span9" id="content">
        <!-- morris stacked chart -->
        <div class="row-fluid">
            <!-- block -->
            <div class="block">
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left">Input Nilai Mahasiswa</div>
                </div>
                <div class="block-content collapse in">
                    <div class="span12">
                        <?= ($npm) ? "<form class='form-horizontal' action='edit_mahasiswa.php' method='POST'>" : "<form class='form-horizontal' action='tambah_mahasiswa.php' method='POST'>" ?>
                        <fieldset>
                            <legend>Input Nilai Mahasiswa</legend>
                            <div class="control-group">
                                <label class="control-label" for="focusedInput">NPM</label>
                                <div class="controls">
                                    <input class="input-xlarge focused" type="text" id="npm" name="npm" value="<?php if ($data_edit['npm']) echo $data_edit['npm'] ?>" <?php if ($npm) echo "disabled" ?>>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="focusedInput">Nama</label>
                                <div class="controls">
                                    <input class="input-xlarge focused" type="text" id="nama" name="nama" value="<?php if ($data_edit['nama']) echo $data_edit['nama'] ?>">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="focusedInput">Program Studi</label>
                                <div class="controls">
                                    <input class="input-xlarge focused" type="text" id="program_studi" name="program_studi" value="<?php if ($data_edit['program_studi']) echo $data_edit['program_studi'] ?>">
                                </div>
                            </div>

                            <div class="form-actions">
                                <button name="submit" type="submit" class="btn btn-primary"><?= $npm ? "Edit Mahasiswa" : "Tambah Mahasiswa" ?></button>
                            </div>

                        </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row-fluid">

            <!-- block -->
            <div class="block">
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left">Data Mahasiswa</div>
                </div>

                <br>

                <form method="POST" class='form-horizontal'>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Cari Mahasiswa (Berdasarkan NPM)</label>
                        <div class="controls">
                            <input class="input-xlarge focused" type="text" id="cari_npm" name="cari_npm">
                            <button name="submit" type="submit" class="btn btn-primary">Cari Mahasiswa</button>
                        </div>
                    </div>
                </form>

                <div class="block-content collapse in">
                    <div class="span12">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>NPM</th>
                                    <th>Nama</th>
                                    <th>Program Studi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (isset($cari_npm)) {
                                    while ($data = mysqli_fetch_assoc($get_data_cari)) {
                                ?>
                                        <tr>
                                            <td><?= $data['npm'] ?></td>
                                            <td><?= $data['nama'] ?></td>
                                            <td><?= $data['program_studi'] ?></td>
                                            <td>
                                                <p>
                                                    <a href="?npm=<?= $data['npm'] ?>">
                                                        <button class="btn btn-info">Edit</button>
                                                    </a>
                                                    <a href="hapus_mahasiswa.php?npm=<?= $data['npm'] ?>">
                                                        <button class="btn btn-danger">Hapus</button>
                                                    </a>
                                                </p>
                                            </td>
                                        </tr>

                                    <?php } ?>
                                    <?php } else {
                                    while ($data = mysqli_fetch_assoc($proses)) { ?>
                                        <tr>
                                            <td><?= $data['npm'] ?></td>
                                            <td><?= $data['nama'] ?></td>
                                            <td><?= $data['program_studi'] ?></td>
                                            <td>
                                                <p>
                                                    <a href="?npm=<?= $data['npm'] ?>">
                                                        <button class="btn btn-info">Edit</button>
                                                    </a>
                                                    <a href="hapus_mahasiswa.php?npm=<?= $data['npm'] ?>">
                                                        <button class="btn btn-danger">Hapus</button>
                                                    </a>
                                                </p>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /block -->
        </div>
    </div>
</body>

</html>