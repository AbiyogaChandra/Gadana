<?php
	@include 'config.php';
	session_start();
	
	if (isset($_SESSION['email'])) {
		header('Location:home');
	}
	
	if (isset($_POST['submit'])) {
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$pass = md5($_POST['password']);
		
		$select = " SELECT * FROM tbl_user WHERE email='$email' ";
		$result = mysqli_query($conn, $select);
		
		if (mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_row($result);
			if (password_verify($pass, $row[3])) {
				$_SESSION['email'] = $email;
				$_SESSION['username'] = $row[1];
				$_SESSION['admin'] = $row[4];
				header('location:home');
			} else {
				$error[] = "Alamat E-Mail atau sandi salah";
			}
		} else {
			$error[] = "Alamat E-Mail atau sandi salah";
		}
	}
?>

<!DOCTYPE html>
<html>
    <head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <title>Gadana - Login</title>
        <link rel="icon" type="image/x-icon" href="assets/Logo.ico">
        <link rel="stylesheet" href="styles/main.css">
		<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
		<script src="scripts/main.js"></script>
    </head>
    <body style="background-image: url('assets/backgrounds/login.png');background-size: cover;">
		<button onclick="window.location.href='home'" class="beranda" style="border-color:8B4BA9;">Beranda</button>
		<button onclick="window.location.href='register'" class="daftar" style="float:right;">Daftar</button>
		<div class="container">
			<h1 style="margin:30px;margin-top:0px;font-size:45">Masuk</h1>
			<?php
				if (isset($error)) {
					foreach($error as $error) {
						echo '<span class="error">'.$error.'</span>';
					}
				}
			?>
			<form action="" method="post">
				<div style="display:flex;justify-content:center;align-items:center;margin:30px;">
					<img src="assets/icons/email.png" width="40px" height="40px">
					<input name="email" type="email" size="40" placeholder="Masukkan alamat E-Mail" style="margin-left:10px;line-height:2em;" required>
				</div>
				<div style="display:flex;justify-content:center;align-items:center;margin:30px;">
					<img src="assets/icons/password.png" width="40px" height="40px">
					<input name="password" type="password" size="40" placeholder="Masukkan sandi" style="margin-left:10px;line-height:2em;" required>
				</div>
				<p style="margin:30px;">Belum punya akun? <a onclick="window.location.href='register'"><b>Daftar</b></a></p>
				<input type="submit" name="submit" class="lanjut" value="Lanjut" style="padding-left:20px;padding-right:20px"><br>
				<img src="assets/Gadana.png" width="192px" height="32px" style="position:fixed;bottom:32px;left:32px;">
			</form>
		</div>
    </body>
</html>