<?php

// if(isset($_GET["email"])){
//  $email = $_GET["email"];
//  $password = $_GET["password"];
// }

 if(isset($_POST["email"])){
    $email = $_POST["email"];
    $password = $_POST["password"];

 echo("Hallo Selamat Datang email ".$email." dan password anda ".$password);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Pertemuan 6</title>
</head>
<body>
    <form action="" method="POST">
        <div>
        <label for="email">Masukan Email</label><br>
        <input type="email" id="email" name="email" value="email">
        </div>
        <div>
        <label for="password">Masukan Password</label><br>
        <input type="password" id="password" name="password" value="password">
        </div>
        <button type="submit" name="submit">Submit</button>
    </form>
    
</body>
</html>



