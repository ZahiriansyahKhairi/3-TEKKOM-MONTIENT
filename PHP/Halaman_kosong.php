<?php
session_start();
if (empty($_SESSION['Username']) and empty($_SESSION['Password'])) {
	echo "<script type='text/javascript'>
	alert('SILAKAN LOGIN TERLEBIH DAHULU!')
	window.location='index.php';
	</script>";
} else {
?>

	<!doctype html>
	<html>

	<head>
		<meta charset="utf-8">
		<title>Montient</title>
		<link rel="stylesheet" type="text/css" href="css/print.css">
		<link href='logo/icon.ico' rel='SHORTCUT ICON' />
	</head>

	<body>

    <div id="headerr">
			</div>

        <br>
        <img src="icon.png" alt="">
			<?php

			$pdf_dokter = "code/pdf/pdf_dokter.php";
			$pdf_pasien = "code/pdf/pdf_pasien.php";
			$pdf_obat = "code/pdf/pdf_obat.php";
			$pdf_pendaftaran = "code/pdf/pdf_pendaftaran.php";
			$pdf_poli = "code/pdf/pdf_poli.php";
			$pdf_resep = "code/pdf/pdf_resep.php";
			$pdf_detail = "code/pdf/pdf_detail.php";
			$pdf_login = "code/pdf/pdf_login.php";
			$pdf_pendaftaran = "code/pdf/pdf_pendaftaran.php"

			?>

			<div id="konten">
				<?php
			     if (isset($_GET['pdf_dokter'])) {
					require_once $pdf_dokter;
				} else if (isset($_GET['pdf_pasien'])) {
					require_once $pdf_pasien;
				} else if (isset($_GET['pdf_obat'])) {
					require_once $pdf_obat;
				} else if (isset($_GET['pdf_pendaftaran'])){
					require_once $pdf_pendaftaran;
				} else if (isset($_GET['pdf_poli'])) {
					require_once $pdf_poli;
				} else if (isset($_GET['pdf_resep'])) {
					require_once $pdf_resep;
				} else if (isset($_GET['pdf_detail'])) {
					require_once $pdf_detail;
				} else if (isset($_GET['pdf_login'])){
					require_once $pdf_login;
				} else if (isset($_GET['pdf_pendaftaran'])){
					require_once $pdf_pendaftaran;
				}
				?>
			</div>
            <br>
	</body>

	</html>

<?php } ?>