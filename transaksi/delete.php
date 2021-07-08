<?php 
require '../koneksi.php';
if (isset($_GET['idtransaksi'])) {
	$delete = mysqli_query($conn, "DELETE FROM transaksi WHERE idtransaksi = '".$_GET['idtransaksi']."' ");
	header('location:transaksi.php');
}
?>