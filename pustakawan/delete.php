<?php 
require '../koneksi.php';
if (isset($_GET['kodepustakawan'])) {
	$delete = mysqli_query($conn, "DELETE FROM pustakawan WHERE kodepustakawan = '".$_GET['kodepustakawan']."' ");
	header('location:pustakawan.php');
}
?>