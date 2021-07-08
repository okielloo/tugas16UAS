<?php 
require '../koneksi.php';
if (isset($_GET['nomoranggota'])) {
	$delete = mysqli_query($conn, "DELETE FROM anggota WHERE nomoranggota = '".$_GET['nomoranggota']."' ");
	header('location:anggota.php');
}
?>