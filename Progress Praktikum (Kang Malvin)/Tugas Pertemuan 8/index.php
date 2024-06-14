<!-- 
	Nama: Afridho Ikhsan
	NPM: 2210631170002
	Kelas: 4a
	Prodi: Informatika:

	-- Praktikum Pemrograman Berbasis Web --
 -->

<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi Penghitung BMI</title>
	<style>
		body {
			padding: 10px;
			font-size: 2rem;
		}
		form > * {
			margin-bottom: 25px;
		}

		input[type="text"] {
			font-size: 36px;
			border: 2px solid black;
			height: 2rem;
			border-radius: 7px;
			padding: 8px;
		}

		button {
			padding: 10px 20px;
			border-radius: 5px;
			font-size: 1.2rem
		}
	</style>
</head>
<body>
	<h2>Aplikasi Penghitung BMI</h2>
	<form method="post">
		<label for="berat">Berat Badan (kg):</label>
		<input type="text" name="berat" id="berat" step="0.1" min="0" required><br>
		<label for="tinggi">Tinggi Badan (cm):</label>
		<input type="text" name="tinggi" id="tinggi" step="0.1" min="0" required><br>
		<button type="submit" name="submit" value="Hitung BMI">Hitung BMI</button>
	</form>

	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$berat = floatval($_POST["berat"]);
		$tinggi = floatval($_POST["tinggi"]);
		$bmi = $berat / pow($tinggi / 100, 2);

		$bmi = number_format($bmi, 2, '.');

		if ($bmi < 18.5) {
			$kategori = "Kekurangan berat badan";
		} elseif ($bmi >= 18.5 && $bmi <= 24.9) {
			$kategori = "Normal";
		} elseif ($bmi >= 25.0 && $bmi <= 29.9) {
			$kategori = "Gemuk";
		} elseif ($bmi >= 30.0) {
			$kategori = "Obesitas";
		}

		echo "<p><strong>Hasil Perhitungan:</strong></p>";
		echo "<p>Berat Badan: $berat kg<br>";
		echo "Tinggi Badan: $tinggi cm<br>";
		echo "BMI: $bmi<br>";
		echo "Kategori BMI: $kategori</p>";
	}
	?>
</body>
</html>