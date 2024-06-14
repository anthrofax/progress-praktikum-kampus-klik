<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Daftar Akun</title>
</head>
<body>
    <h1>Halaman Daftar Akun</h1>

    <form action="./register_process.php" method="POST">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br><br>

    <input type="submit" value="Register">
    </form>

    <br>

<span>Sudah memiliki akun? <a href="./login.php">Login</a> disini </span>

</body>
</html>