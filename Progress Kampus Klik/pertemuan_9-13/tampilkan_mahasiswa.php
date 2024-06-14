<?php 
include "connect.php";

$proses = mysqli_query($connect, "SELECT * FROM mahasiswa") or die(mysqli_error($connect));


?>