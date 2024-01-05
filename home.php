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
		<style>
			.grid-container {
				display: grid;
				grid-template-areas:
					"topleft unused topright"
					"main main main";
				grid-template-columns: auto;
			}
			.grid-container2 {
				display: grid;
				grid-template-areas:
					"normal unused duel"
					"about about about";
				grid-template-columns: auto;
			}
		</style>
		<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
		<script src="scripts/main.js"></script>
    </head>
    <body style="background-image: url('assets/backgrounds/home.png');background-size: cover;">
		<div id="navbar">
			<div id="navbarclose" class="navbarcontent" onclick="window.location.href='home'" style="align-items:center;margin-top:25px">
				<button onclick="closeNav()" style="background-color:#F52525;border:5px solid #F52525;color:white;padding:5px 10px;margin-left:10px;"><b>X</b></button>
			</div>
			<div class="navbarcontent" onclick="window.location.href='home'" style="display:flex;align-items:center;padding:5px;padding-left:20px;margin-top:25px;background-color:#FFFFFF">
				<img src="assets/icons/home.png" width="36px" height="36px" style="margin-right:10px;">Beranda
			</div>
			<div class="navbarcontent" onclick="window.location.href='normal'" style="display:flex;align-items:center;padding:5px;padding-left:20px;margin-top:10px;">
				<img src="assets/icons/normal_mode.png" width="36px" height="36px" style="margin-right:10px;">Mode Biasa
			</div>
			<?php if (!isset($_SESSION['email'])) : ?>
				<div class="grab" onclick="window.location.href='register'" style="display:flex;align-items:center;margin-top:auto;margin-left:20px;margin-right:20px;background-color:#2C9AFF;border:5px solid #2C9AFF;border-radius:5px;">
				<img src="assets/icons/register.png" width="36px" height="36px" style="margin-right:10px;"><span style="color:white;">Daftar</span>
				</div>
				<div class="grab" onclick="window.location.href='login'" style="display:flex;align-items:center;margin-top:20px;margin-left:20px;margin-right:20px;background-color:#2AC87C;border:5px solid #2AC87C;border-radius:5px;">
					<img src="assets/icons/login.png" width="36px" height="36px" style="margin-right:10px;"><span style="color:white;">Masuk</span>
				</div>
				<div class="navbarcontent" onclick="window.location.href='settings'" style="display:flex;align-items:center;margin-top:20px;padding:5px;padding-left:20px;">
					<img src="assets/icons/settings.png" width="36px" height="36px" style="margin-right:10px;">Pengaturan
				</div>
				<img src="assets/Gadana.png" style="object-fit:cover;margin-top:20px;margin-bottom:20px;">
			<?php else: ?>
				<div class="navbarcontent" onclick="window.location.href='duel'" style="display:flex;align-items:center;padding:5px;padding-left:20px;margin-top:10px;">
					<img src="assets/icons/duel_mode.png" width="36px" height="36px" style="margin-right:10px;">Mode Duel
				</div>
				<div class="navbarcontent" onclick="window.location.href='leaderboard'" style="display:flex;align-items:center;padding:5px;padding-left:20px;margin-top:10px;">
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
		<div id="main" class="grid-container">
			<div style="grid-area:topright;">
				<button onclick="window.location.href='settings'" class="settings" style="float:right;padding:0px;"><img src="assets/icons/settings.png" width="24px" height="24px"></button>
				<?php if (!isset($_SESSION['email'])) : ?>
					<button onclick="window.location.href='login'" class="masuk" style="float:right;margin-right:20px;">Masuk</button>
					<button onclick="window.location.href='register'" class="daftar" style="float:right;margin-right:20px;">Daftar</button>
				<?php endif; ?>
			</div>
			<div style="grid-area:topleft;display:flex;align-items:center;">
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
			<div class="grid-container2" style="grid-area:main;margin-top:20px;">
					<div style="grid-area:normal;display:inline-block;margin-left:100px;padding:5px 35px;background-color:#EF78B1;border:5px solid #EF78B1;border-radius:5px;color:white;">
						<center>
							<b>Mode Biasa</b><br>
							<img src="assets/icons/user.png" width="72px" height="72px" style="margin-top:10px;"><br>
							<button onclick="window.location.href='normal'" style="padding:5px 30px;background-color:#7FC15F;border:5px solid #7FC15F;border-radius:5px;color:white;"><b>Main</b></button>
						</center>
					</div>
					<?php if (!isset($_SESSION['email'])) : ?>
						<div style="grid-area:duel;display:inline-block;margin-right:100px;padding:5px 35px;background-color:#818181;border:5px solid #818181;border-radius:5px;color:white;">
							<center>
								<b style="color:#DBDBDB">Mode Duel</b><br>
								<img src="assets/icons/locked.png" width="72px" height="72px" style="margin-top:10px;"><br>
								<b>Hanya untuk yang<br> 
								menggunakan akun</b>
							</center>
						</div>
					<?php else: ?>
						<div style="grid-area:duel;display:inline-block;margin-right:100px;padding:5px 35px;background-color:#ebc034;border:5px solid #ebc034;border-radius:5px;color:white;">
							<center>
								<b>Mode Duel</b><br>
								<img src="assets/icons/vs.png" width="72px" height="72px" style="margin-top:10px;"><br>
								<button onclick="window.location.href='duel'" style="padding:5px 30px;background-color:#7FC15F;border:5px solid #7FC15F;border-radius:5px;color:white;"><b>Main</b></button>
							</center>
						</div>
					<?php endif; ?>
				<div style="grid-area:about;margin-top:20px;padding:25px;padding-top:5px;background-color:#8B4BA9;border:5px solid #8B4BA9;border-radius:5px;color:white;">
					<center>
						<h1>Apa itu Gadana?</h1>
					</center>
					Gadana adalah permainan kuis yang terkait bentuk dan warna.<br><br>
					Dalam Gadana terdapat 2 mode permainan, yaitu mode biasa dan mode duel.<br><br>
					Dalam mode biasa, anda akan menjawab pertanyaan sebanyak mungkin tanpa batas waktu. Namun anda akan kalah apabila menjawab dengan salah sebanyak 3 kali.<br><br>
					Dalam mode duel, anda akan melawan orang lain dalam menjawab pertanyaan sebanyak mungkin selama batas waktu.
					Anda tidak dapat menjawab lagi apabila menjawab dengan salah sebanyak 3 kali.
					Permainan akan berakhir apabila anda dan lawan tidak dapat menjawab lagi, atau waktunya sudah habis.
				</div>
			</div>
		</div>
    </body>
</html>