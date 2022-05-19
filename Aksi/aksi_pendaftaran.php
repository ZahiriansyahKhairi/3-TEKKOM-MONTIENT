<body>
<?php
include "koneksi.php";
$aksi = strtolower($_POST['proses']);
$NoDaftar = $_POST['NoDaftar'];

if ($aksi == "delete") {
	
		$delete_pendaftaran = "DELETE from pendaftaran where NoDaftar='$NoDaftar'";
		$delete_pendaftaran_query = mysqli_query($connect,$delete_pendaftaran);

	if ($delete_pendaftaran_query)
	{
		header("location:halaman_utama.php?tabel_pendaftaran=$tabel_pendaftaran");
	}
	else
	{
		echo "Delete gagal dijalankan";
	}
}
	else {

		include "koneksi.php";

		$query = mysqli_query($connect, "select * from pendaftaran where NoDaftar='$NoDaftar'");
	
	}


?>