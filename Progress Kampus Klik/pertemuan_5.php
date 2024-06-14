<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan PHP</title>
</head>
<body>
<?php
  $nama = "Ariel Tatum";
  $alias = "Nanang";

  if($nama == "Ariel Tatum"){
    $jenisKelamin = "perempuan";
  }else if($nama == "Nanang"){
    $jenisKelamin = "Laki-Laki";
  }

  echo ("Halo ".$nama." Selamat</br> datang, Saya ".$alias." jenis kelamin kamu ".$jenisKelamin);
?>
<p>Hari ini saya ingin makan nasi</p>
  
</body>
</html>