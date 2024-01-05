<?php
	@include 'config.php';
	session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Gadana - Home</title>
        <link rel="icon" type="image/x-icon" href="assets/Logo.ico">
        <link rel="stylesheet" href="styles/main.css">
		<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
		<script src="\scripts/main.js"></script>
    </head>
    <body style="background-image: url('assets/backgrounds/play/normal.png');background-size: cover;">
		<div>
			<div style="display:flex;">
				<div>
					<center><h3>Saya</h3></center>
					<div style="display:flex;align-items:center">
						<img src="assets/icons/time.png" width="36px" height="36px"><b style="margin-left:5px;">0:00</b>
					</div>
					<div style="display:flex;align-items:center">
						<img src="assets/icons/checkmark.png" width="36px" height="36px"><b style="margin-left:5px;">0</b>
					</div>
				</div>
				<div style="margin-left:250px">
					<center style="padding-left:260px;padding-right:260px;padding-top:5px;padding-bottom:200px;background-color:#D8D8D8;border:5px solid #D8D8D8;border-radius:5px;color:black;">
						<h1>Soal</h1>
					</center>
				</div>
				<div style="margin-left:250px;">
					<div>
						<center><h3>Lawan</h3></center>
						<div style="display:flex;align-items:center">
							<img src="assets/icons/time.png" width="36px" height="36px"><b style="margin-left:5px;">0:00</b>
						</div>
						<div style="display:flex;align-items:center">
							<img src="assets/icons/checkmark.png" width="36px" height="36px"><b style="margin-left:5px;">0</b>
						</div>
					</div>
					<button onclick="window.location.href='home'" style="margin-top:100px;background-color:#FF3C3C;border:5px solid #FF3C3C;border-radius:5px;color:white;">Menyerah</button
					<br>
				</div>
			</div>
			<div style="display:flex;margin-top:30px;">
				<div style="margin-left:320px;padding:5px 90px;background-color:#D8D8D8;border:5px solid #D8D8D8;border-radius:5px;color:black;">
					<h4>Jawaban A</h4>
				</div>
				<div style="margin-left:50px;padding:5px 90px;background-color:#D8D8D8;border:5px solid #D8D8D8;border-radius:5px;color:black;">
					<h4>Jawaban B</h4>
				</div>
			</div>
			<div style="display:flex;margin-top:30px;">
				<div style="margin-left:320px;padding:5px 90px;background-color:#D8D8D8;border:5px solid #D8D8D8;border-radius:5px;color:black;">
					<h4>Jawaban C</h4>
				</div>
				<div style="margin-left:50px;padding:5px 90px;background-color:#D8D8D8;border:5px solid #D8D8D8;border-radius:5px;color:black;">
					<h4>Jawaban D</h4>
				</div>
			</div>
		</div>
    </body>
</html>