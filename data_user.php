<?php
	@include 'config.php';
	session_start();
	
	if (!isset($_SESSION['admin']) || $_SESSION['admin'] == 0) {
		header('Location:home');
	}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Gadana - Data User</title>
        <link rel="icon" type="image/x-icon" href="assets/Logo.ico">
        <link rel="stylesheet" href="styles/main.css">
		<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
		<script src="scripts/main.js"></script>
    </head>
    <body>
		<div id="navbar">
			<div id="navbarclose" class="navbarcontent" onclick="window.location.href='home'" style="align-items:center;margin-top:25px">
				<button onclick="closeNav()" style="background-color:#F52525;border:5px solid #F52525;color:white;padding:5px 10px;margin-left:10px;"><b>X</b></button>
			</div>
			<div class="navbarcontent" onclick="window.location.href='dashboard'" style="display:flex;align-items:center;padding:5px;padding-left:20px;margin-top:25px">
				Beranda
			</div>
			<div class="navbarcontent" onclick="window.location.href='data_kuis'" style="display:flex;align-items:center;padding:5px;padding-left:20px;margin-top:10px">
				Data Kuis
			</div>
			<div class="navbarcontent" onclick="window.location.href='data_user'" style="display:flex;align-items:center;padding:5px;padding-left:20px;margin-top:10px;background-color:#FFFFFF">
				Data User
			</div>
			<div class="navbarcontent" onclick="window.location.href='logout'" style="display:flex;align-items:center;margin-top:auto;margin-left:20px;margin-right:20px;background-color:#E8E8E8;border:5px solid #E8E8E8;border-radius:5px;">
				<img src="assets/icons/logout.png" width="36px" height="36px" style="margin-right:10px;">Keluar
			</div>
			<img src="assets/Gadana.png" style="object-fit:cover;margin-top:20px;margin-bottom:20px;">
		</div>
		<div id="main">
			<div style="display:flex;align-items:center;padding:10px;background-color:#D8D8D8;border:5px solid #D8D8D8;border-radius:5px;">
				<img src="assets/icons/search.png" width="36px" height="36px">
				<div style="display:flex;align-items:center;margin-left:10px;padding-right:75%;margin-bottom:10px;align-items:center;background-color:#C8C8C8;border:5px solid #C8C8C8;border-radius:5px;">
					<input style="background-color:#C8C8C8;border:5px solid #C8C8C8">
				</div>
			</div>
			<div style="display:flex;align-items:center;margin-top:20px;padding:10px;background-color:#D8D8D8;border:5px solid #D8D8D8;border-radius:5px;">
				<div style="background-color:#C8C8C8;padding-right:85%;border:5px solid #C8C8C8;border-radius:5px;">
					Belum ada user
				</div>
			</div>
		</div>
    </body>
</html>