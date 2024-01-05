<?php
	@include 'config.php';
	session_start();
	
	if (isset($_SESSION['admin']) && $_SESSION['admin'] == 1) {
		header('Location:login_server');
	}
?>

<!DOCTYPE html>
<html>
    <head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <title>Gadana - Home</title>
        <link rel="icon" type="image/x-icon" href="assets/Logo.ico">
        <link rel="stylesheet" href="styles/main.css">
		<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
		<script src="scripts/main.js"></script>
    </head>
    <body style="background-image: url('assets/backgrounds/settings.png');background-size: cover;">
		<div id="navbar">
			<div id="navbarclose" class="navbarcontent" onclick="window.location.href='home'" style="align-items:center;margin-top:25px">
				<button onclick="closeNav()" style="background-color:#F52525;border:5px solid #F52525;color:white;padding:5px 10px;margin-left:10px;"><b>X</b></button>
			</div>
			<div class="navbarcontent" onclick="window.location.href='home'" style="display:flex;align-items:center;padding:5px;padding-left:20px;margin-top:25px">
				<img src="assets/icons/home.png" width="36px" height="36px" style="margin-right:10px;">Beranda
			</div>
			<div class="navbarcontent" onclick="window.location.href='normal'" style="display:flex;align-items:center;padding:5px;padding-left:20px;margin-top:10px">
				<img src="assets/icons/normal_mode.png" width="36px" height="36px" style="margin-right:10px;">Mode Biasa
			</div>
			<?php if (!isset($_SESSION['email'])) : ?>
				<div class="grab" onclick="window.location.href='register'" style="display:flex;align-items:center;margin-top:auto;margin-left:20px;margin-right:20px;background-color:#2C9AFF;border:5px solid #2C9AFF;border-radius:5px;">
				<img src="assets/icons/register.png" width="36px" height="36px" style="margin-right:10px;"><span style="color:white;">Daftar</span>
				</div>
				<div class="grab" onclick="window.location.href='login'" style="display:flex;align-items:center;margin-top:20px;margin-left:20px;margin-right:20px;background-color:#2AC87C;border:5px solid #2AC87C;border-radius:5px;">
					<img src="assets/icons/login.png" width="36px" height="36px" style="margin-right:10px;"><span style="color:white;">Masuk</span>
				</div>
				<div class="navbarcontent" onclick="window.location.href='settings'" style="display:flex;align-items:center;margin-top:20px;padding:5px;padding-left:20px;background-color:#FFFFFF;">
					<img src="assets/icons/settings.png" width="36px" height="36px" style="margin-right:10px;">Pengaturan
				</div>
				<img src="assets/Gadana.png" style="object-fit:cover;margin-top:20px;margin-bottom:20px;">
			<?php else: ?>
				<div class="navbarcontent" onclick="window.location.href='duel'" style="display:flex;align-items:center;padding:5px;padding-left:20px;margin-top:10px">
					<img src="assets/icons/duel_mode.png" width="36px" height="36px" style="margin-right:10px;">Mode Duel
				</div>
				<div class="navbarcontent" onclick="window.location.href='leaderboard'" style="display:flex;align-items:center;padding:5px;padding-left:20px;margin-top:10px">
					<img src="assets/icons/leaderboard.png" width="36px" height="36px" style="margin-right:10px;">Papan Peringkat
				</div>
				<div class="grab" onclick="window.location.href='logout'" style="display:flex;align-items:center;margin-top:auto;margin-left:20px;margin-right:20px;background-color:#E8E8E8;border:5px solid #E8E8E8;border-radius:5px;">
				<img src="assets/icons/logout.png" width="36px" height="36px" style="margin-right:10px;">Keluar
				</div>
				<div class="navbarcontent" onclick="window.location.href='settings'" style="display:flex;align-items:center;margin-top:20px;padding:5px;padding-left:20px;background-color:#FFFFFF;">
					<img src="assets/icons/settings.png" width="36px" height="36px" style="margin-right:10px;">Pengaturan
				</div>
				<img src="assets/Gadana.png" style="object-fit:cover;margin-top:20px;margin-bottom:20px;">
			<?php endif; ?>
		</div>
		<div id="main">
			<div style="display:inline-block;">
				<div style="display:flex;margin-left:20px;margin-top:20px;">
					<center style="padding:64px 64px;background-color:#D8D8D8;border:5px solid #D8D8D8;border-radius:5px;color:black;">
						<img src="assets/icons/guest.png">
					</center>
					<div style="display:inline-block">
						<h1 style="margin-left:25px;">
							<?php 
								if (isset($_SESSION['username'])) {
									echo $_SESSION['username'];
								} else {
									echo 'Tidak diketahui';
								}
							?>
						</h1>
						<div style="margin-left:25px;padding:5px;background-color:#D8D8D8;border:5px solid #D8D8D8;border-radius:5px;">
							Tentang Saya
							<?php if (!isset($_SESSION['email'])) : ?>
								<div style="margin:5px;padding:40px 5px;background-color:#E8E8E8;border:5px solid #E8E8E8;border-radius:5px;">
									Hai! Saya tidak dapat merubah ini karena saya tidak menggunakan akun.
								</div>
							<?php else: ?>
								<div style="margin:5px;padding-top:5px;padding-bottom:75px;padding-left:5px;padding-right:550px;background-color:#E8E8E8;border:5px solid #E8E8E8;border-radius:5px;">
									Tentang saya... Ya!
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
				<div style="display:flex;margin-left:20px;margin-top:20px;">
					<div style="padding-bottom:200px;background-color:#D8D8D8;border:5px solid #D8D8D8;border-radius:5px;color:black;">
						<div style="padding:2px 40px;background-color:#FFFFFF;color:black">
							<h2>Akun</h2>
						</div>
					</div>
					<?php if (!isset($_SESSION['email'])) : ?>
						<div style="margin-left:40px;padding-bottom:200px;padding-right:105px;background-color:#D8D8D8;border:5px solid #D8D8D8;border-radius:5px;color:black;">
							<img style="margin-top:100px;margin-left:200px" src="assets/icons/locked.png"><br>
							<h3 style="margin-left:100px">Gunakan sebuah akun untuk mengakses bagian ini.</h3>
						</div>
					<?php else: ?>
						<div style="margin-left:40px;padding-top:10px;padding-bottom:200px;padding-left:50px;background-color:#D8D8D8;border:5px solid #D8D8D8;border-radius:5px;color:black;">
							<div style="display:flex;align-items:center;">
								Nama 
								<div style="margin:5px;margin-left:42px;padding:5px 5px;padding-right:257px;background-color:#E8E8E8;border:5px solid #E8E8E8;border-radius:5px;">
									<?php 
										if (isset($_SESSION['username'])) {
											echo $_SESSION['username'];
										} else {
											echo 'Tidak diketahui';
										}
									?>
								</div>
							</div>
							<div style="display:flex;align-items:center;">
								E-Mail 
								<div style="margin:5px;margin-left:35px;padding:5px 5px;padding-right:97px;background-color:#E8E8E8;border:5px solid #E8E8E8;border-radius:5px;">
									<?php 
										if (isset($_SESSION['email'])) {
											echo $_SESSION['email'];
										} else {
											echo 'Tidak diketahui';
										}
									?>
								</div>
							</div>
							<div style="display:flex;align-items:center;">
								Password 
								<div style="margin:5px;margin-left:20px;padding:5px 5px;padding-right:200px;margin-right:350px;background-color:#E8E8E8;border:5px solid #E8E8E8;border-radius:5px;">
									**********
								</div>
							</div>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
    </body>
</html>