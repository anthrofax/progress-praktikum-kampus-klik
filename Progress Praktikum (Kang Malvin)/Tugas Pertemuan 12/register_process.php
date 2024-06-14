<?php
session_start();

include_once('./connect.php');

// isset (apakah ada?)

// Cek apakah ada kiriman data email dan password
if (isset($_POST['email']) && isset($_POST['password'])) {
    // Simpan email ke dalam variable email
    $email = $_POST['email'];

    // Simpan password ke dalam variable password
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    // $password = $_POST['password'];
    

    // Cek apakah email sudah terdaftar sebelumnya
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($db, $sql);

    // Jika hasilnya lebih dari 0
    if(mysqli_num_rows($result) > 0) {
        echo "Email sudah terdaftar.";
    } else {
        // Query memasukkan data email baru ke database.
        $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";

        // Jika berhasil, tampilkan "registrasi berhasil"
        if (mysqli_query($db, $sql) === TRUE) {
            echo "Registrasi berhasil. Silahkan <a href='login.php'>Login</a>";
        } else {
            echo "Registrasi gagal!";
        }
    }
}
    ?>