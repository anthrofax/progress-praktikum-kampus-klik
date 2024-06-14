<?php
// Memulai interaksi session
session_start();

// Include koneksi database
include_once ('./connect.php');

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($db, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        if (password_verify($password, $row['password'])) {
            // Memberikan session email kepada user dan disimpan ke browser pengguna, yang nanti akan digunakan untuk mengecek apakah user yang masuk ke halaman index.php sudah login atau belum. Jika memiliki session (Yaitu session email), maka tandanya user sudah login.
            $_SESSION['email'] = $email;

            header('Location: ./index.php');

            exit;
        } else {
            echo "Password salah";
        }
    }

}
?>