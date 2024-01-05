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
    <body style="background-image: url('assets/backgrounds/normal.png');background-size: cover;">
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
				<div class="navbarcontent" onclick="window.location.href='settings'" style="display:flex;align-items:center;margin-top:20px;padding:5px;padding-left:20px">
					<img src="assets/icons/settings.png" width="36px" height="36px" style="margin-right:10px;">Pengaturan
				</div>
				<img src="assets/Gadana.png" style="object-fit:cover;margin-top:20px;margin-bottom:20px;">
			<?php else: ?>
				<div class="navbarcontent" onclick="window.location.href='duel'" style="display:flex;align-items:center;padding:5px;padding-left:20px;margin-top:10px;background-color:#FFFFFF">
					<img src="assets/icons/duel_mode.png" width="36px" height="36px" style="margin-right:10px;">Mode Duel
				</div>
				<div class="navbarcontent" onclick="window.location.href='leaderboard'" style="display:flex;align-items:center;padding:5px;padding-left:20px;margin-top:10px">
					<img src="assets/icons/leaderboard.png" width="36px" height="36px" style="margin-right:10px;">Papan Peringkat
				</div>
				<div class="grab" onclick="window.location.href='logout'" style="display:flex;align-items:center;margin-top:auto;margin-left:20px;margin-right:20px;background-color:#E8E8E8;border:5px solid #E8E8E8;border-radius:5px;">
				<img src="assets/icons/logout.png" width="36px" height="36px" style="margin-right:10px;">Keluar
				</div>
				<div class="navbarcontent" onclick="window.location.href='settings'" style="display:flex;align-items:center;margin-top:20px;padding:5px;padding-left:20px;">
					<img src="assets/icons/settings.png" width="36px" height="36px" style="margin-right:10px;">Pengaturan
				</div>
				<img src="assets/Gadana.png" style="object-fit:cover;margin-top:20px;margin-bottom:20px;">
			<?php endif; ?>
		</div>
		<div id="main">
			<div>
				<button onclick="window.location.href='settings'" class="settings" style="float:right;padding:0px;"><img src="assets/icons/settings.png" width="24px" height="24px"></button>
				<?php if (!isset($_SESSION['email'])) : ?>
					<button onclick="window.location.href='login'" class="masuk" style="float:right;margin-right:20px;">Masuk</button>
					<button onclick="window.location.href='register'" class="daftar" style="float:right;margin-right:20px;">Daftar</button>
				<?php endif; ?>
				<div style="display:flex;align-items:center;">
					<img id="burger" onclick="openNav()" src="assets/icons/menu.png">
					<img src="assets/icons/guest.png" width="32px" height="32px" style="margin-right:5px;">
					<?php 
						if (isset($_SESSION['username'])) {
							echo $_SESSION['username'];
						} else {
							echo 'Guest';
						}
					?>
				</div>
			</div>
			<div>
				<div style="display:flex;margin-left:20px;margin-top:50px;">
					<center style="padding-left:20px;padding-right:500px;padding-top:5px;padding-bottom:300px;background-color:#D8D8D8;border:5px solid #D8D8D8;border-radius:5px;color:black;">
						<h1>Video</h1>
					</center>
					<div style="display:inline-block">
						<div style="padding:60px 30px;padding-top:0px;margin-left:40px;background-color:#D6B339;border:5px solid #D6B339;border-radius:5px;color:white;">
							<center>
								<h4>Tentang Mode Duel</h4>
							</center>
							Pada mode ini, anda akan melawan seseorang dalam mendapatkan skor tertinggi. Ada batas waktu berupa tiga menit. Jawab dengan salah sebanyak tiga kali dan anda tidak dapat menjawab lagi.
						</div>
						<div onclick="window.location.href='duel_game'" style="margin-top:20px;padding:40px 30px;margin-left:40px;background-color:#7FC15F;border:5px solid #7FC15F;border-radius:5px;color:white;">
							<center>
								<h1>Main</h1>
							</center>
						</div>
					</div>
				</div>
			</div>
		</div>
    </body>
</html>