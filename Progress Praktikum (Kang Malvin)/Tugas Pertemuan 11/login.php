<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Halaman Login</h1>

<form action="./login_process.php" method="POST">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br><br>

<button type="submit" name="submit">Login</button>

</form>

<br>

<span>Belum memiliki akun? <a href="./register.php">Daftar</a> disini </span>
</body>
</html>