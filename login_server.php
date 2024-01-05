<?php
	@include 'config.php';
	session_set_cookie_params(0);
	session_start();
	
	if (!isset($_SESSION['admin']) || $_SESSION['admin'] == 0) {
		header('Location:home');
	}
	
	if (isset($_POST['submit'])) {
		$email = $_SESSION['email'];
		$pass = md5($_POST['password']);
		
		$select = " SELECT * FROM tbl_admin WHERE email='$email' ";
		$result = mysqli_query($conn, $select);
		
		if (mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_row($result);
			if (password_verify($pass, $row[1])) {
				$_SESSION['key'] = $row[1];
				header('location:dashboard');
			} else {
				$error[] = "Sandi salah";
			}
		} else {
			header('Location:home');
		}
	}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Gadana - Login 2 Step</title>
        <link rel="icon" type="image/x-icon" href="assets/Logo.ico">
        <link rel="stylesheet" href="styles/main.css">
		<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
		<script src="scripts/main.js"></script>
    </head>
    <body>
		<button onclick="window.location.href='logout'" class="beranda" style="background-color:#D8D8D8;border-color:#D8D8D8;color:black;">Keluar</button>
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
					<img src="assets/icons/password.png" width="40px" height="40px">
					<input name="password" type="password" size="40" placeholder="Masukkan sandi server" style="margin-left:10px;line-height:2em;" required>
				</div>
				<input type="submit" name="submit" class="lanjut" value="Lanjut" style="padding-left:20px;padding-right:20px"><br>
				<img src="assets/Gadana.png" width="192px" height="32px" style="position:fixed;bottom:32px;left:32px;">
			</form>
		</div>
    </body>
</html>