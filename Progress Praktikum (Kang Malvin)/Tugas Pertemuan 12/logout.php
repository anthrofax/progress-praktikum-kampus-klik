<?php 
// Memulai interaksi dengan Session
session_start();

// Menghancurkan SESSION["email"]
session_destroy();

// unset SESSION["email"]
session_unset();

header('Location: ./login.php');

?>