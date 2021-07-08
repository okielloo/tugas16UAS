<?php
require '../koneksi.php';
$data_edit = mysqli_query($conn, "SELECT * FROM pustaka WHERE kodepustaka = '".$_GET['kodepustaka']."'");
$result = mysqli_fetch_array($data_edit); 
?>


<!DOCTYPE html>
<html>
<head>
	<title>Halaman Edit Data Pustaka</title>
</head>
<body>
	<h2 align="center">Edit Data Pustaka</h2>
	<center>	<a href="pustaka.php" style="padding:0.4% 0.8%; background-color: #009900; color: #fff; border-radius: 2px; text-decoration: none;">Kembali Ke Data Pustaka</a><br><br></center>

	<form action="" method="POST">
		<table align="center">
			<tr>
				<td>kodepustaka</td>
				<td>:</td>
				<td><input type="text" name="kodepustaka"  value="<?php echo $result['kodepustaka'] ?>" required></td>
			</tr>
			<tr>
				<td>judulpustaka</td>
				<td>:</td>
				<td><input type="text" name="judulpustaka" value="<?php echo $result['judulpustaka'] ?>"  required></td>
			</tr>
			<tr>
				<td>pengarang</td>
				<td>:</td>
				<td><input type="text" name="pengarang" value="<?php echo $result['pengarang'] ?>" required></td>
			</tr>
			<tr>
				<td>penerbit</td>
				<td>:</td>
				<td><input type="text" name="penerbit" value="<?php echo $result['penerbit'] ?>" required></td>
			</tr>
			<tr>
				<td>tahunterbit</td>
				<td>:</td>
				<td><input type="text" name="tahunterbit" value="<?php echo $result['tahunterbit'] ?>" required></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="Edit" placeholder="Simpan" required></td>
			</tr>
		</table>
	</form>

	<br><br><br><br><br>
	<center><p><a href="../index.html" style="padding:0.4% 0.8%; background-color: #0dcaf0; color: #000; border-radius: 2px; text-decoration: none;">Kembali Ke Halaman Awal</a></p></center>
	<?php
	if (isset($_POST['Edit'])) {
		$update = mysqli_query($conn, "UPDATE pustaka SET kodepustaka = '".$_POST['kodepustaka']."',
		judulpustaka =  '".$_POST['judulpustaka']."',
		pengarang = '".$_POST['pengarang']."',
		penerbit = '".$_POST['penerbit']."',
		tahunterbit = '".$_POST['tahunterbit']."'
		WHERE kodepustaka = '".$_GET['kodepustaka']."'");
	if ($update) {
		echo 'berhasil di edit';
	}else{
		echo 'gagal di edit';
	}
	
	}
	?>
	<footer style="text-align:center">
    <br><br><br><br><br><br><br><br><br><br><br><br>
      <a style=" font-size: 15px; padding: 10px 20px;" align="center">&copy;Copyright 2021 || Programing by M.OKI Npm : 1955201004 </a>
    </footer>
</body>
</html>