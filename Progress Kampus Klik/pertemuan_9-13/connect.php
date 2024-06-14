<?php
$hostname = 'localhost';
$user = 'root';
$password = '';
$db = "data_mahasiswa";

$connect = mysqli_connect($hostname, $user, $password, $db) or die('Gagal terkoneksi');
