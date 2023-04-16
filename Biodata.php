<!DOCTYPE html>
<html>
<head>
	<title>Biodata Saya</title>
	<style>
		body {
			background-color: #F2CEE8;
			font-family: Arial, sans-serif;
			color: #333;
			text-align: center;
		}
css
	h1 {
		color: #FF69B4;
		text-align: center;
		margin-top: 50px;
	}

	form {
		margin-top: 70px;
		display: flex;
		flex-direction: column;
		align-items: center;
	}

	label {
		margin-top: 10px;
		font-size: 18px;
		color: #FF69B4;
	}

	input[type="text"],
	input[type="password"] {
		padding: 10px;
		border-radius: 5px;
		border: none;
		margin-top: 5px;
		font-size: 16px;
		width: 300px;
	}

	input[type="submit"] {
		background-color: #FF69B4;
		color: #fff;
		border: none;
		padding: 10px 20px;
		border-radius: 5px;
		margin-top: 20px;
		font-size: 18px;
		cursor: pointer;
	}

	input[type="submit"]:hover {
		background-color: #FF7FAB;
	}

	p {
		margin-right: 30px;
		text-align : left;
		font-size: 18px;
		color: #FF69B4;
	}

	a {
		color: #FF69B4;
		text-decoration: none;
	}

	a:hover {
		text-decoration: underline;
	}
</style>
</head>
<body>
	<?php
	// Set username dan password
	$username = 'vina';
	$password = '123';

// Cek apakah form login sudah di-submit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	// Cek username dan password
	if ($_POST['username'] === $username && $_POST['password'] === $password) {
		// Jika benar, tampilkan biodata
		echo '<h1>Biodata Saya</h1>';
		echo '<p>Nama: Vina</p>';
		echo '<p>Umur: 20 tahun</p>';
		echo '<p>Alamat: Jl. Sudirman No. 123</p>';
		echo '<p>Email: <a href="Gmail:vina@Student.com">vina@Student.com</a></p>';
		echo '<p>Pendidikan Saat ini: Universitas Pembangunan Nasional Veteran Jawa Timur</p>';
		echo '<p>Jurusan : Sistem Informasi</p>';
		exit;
	} else {
		// Jika salah, tampilkan pesan error
		echo '<h1>User Tidak Dikenali</h1>';
		exit;
	}
}
?>

<h1>Login</h1>

<form method="POST">
	<label for="username">Username:</label>
	<input type="text" id="username" name="username" required>

	<label for="password">Password:</label>
	<input type="password" id="password" name="password" required>

	<input type="submit" value="Login">
</form>
</body>
</html>