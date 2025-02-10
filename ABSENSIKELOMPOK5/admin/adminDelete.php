<?php
session_start();
include('../koneksi/koneksi.php');

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}


?>
<?php

	if (isset($_GET["nip"])) {
		$nip = $_GET["nip"]; 
		$delAdm = "DELETE FROM pegawai WHERE nip='$nip'"; 
		$resultAdm = mysqli_query($koneksi, $delAdm); 

    if ($resultAdm) {
        echo "<script>alert('Data pegawai Berhasil Dihapus');</script>";
        echo "<script type='text/javascript'>window.location ='adminView.php';</script>";
    } else {
        echo "<script>alert('Data pegawai Gagal Dihapus');</script>"; 
        echo "<script type='text/javascript'>window.location='adminView.php';</script>"; 
    }
	} else {
    echo "<script>alert('nip tidak ditemukan.');</script>";
    echo "<script type='text/javascript'>window.location='adminView.php';</script>";
	}
	?>

		<br><br><br>
		<div class="button-container">
			<a href="./?adm=login">LOGIN NOW</a>
			<a href="./?adm=home">↩</a>