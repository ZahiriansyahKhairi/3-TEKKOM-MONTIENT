<!doctype html>
<html>

<head>
	<title>Login Poliklinik</title>
	<link href='logo/icon.ico' rel='SHORTCUT ICON' />
</head>

<index>
	<link rel="stylesheet" type="text/css" href="css/style2.css" />

	<body background="wallpaper/wallpaper.jpg">
		<center>
			<font size="5px" face="Calibri" color="white">MONTIENT<br></font>
			<br>

			<form action="cekLogin.php" method="post" class="expose">
				<fieldset>
					<br>
					<img src="logo/icon.png" width="130" height="100">
					<br><br>
					<input type="text" size="25px" name="Username" maxlength="20" placeholder="Masukkan Username" required><br /><br>
					<input type="password" size="25px" name="Password" id="password" maxlength="20" placeholder="Masukkan Password" required><br /><br />
					<input type="submit" class="tombol" name="login" value="" style="background-image:url(logo/tick.png); background-position:center; background-size:8%; background-repeat:no-repeat;">
					<br><br>
				</fieldset>
			</form>
		</center>
	</body>
</index>

</html>