<?php 
require '../koneksi.php';
if (isset($_GET['kodepustaka'])) {
	$delete = mysqli_query($conn, "DELETE FROM pustaka WHERE kodepustaka = '".$_GET['kodepustaka']."' ");
	header('location:pustaka.php');
}
?>