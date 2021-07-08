<?php
require '../koneksi.php';
$data_edit = mysqli_query($conn, "SELECT * FROM transaksi WHERE idtransaksi = '".$_GET['idtransaksi']."'");
$result = mysqli_fetch_array($data_edit); 
?>


<!DOCTYPE html>
<html>
<head>
	<title>Halaman Edit Transaksi</title>
</head>
<body>
	<h2 align="center">Edit Data Ttransaksi</h2>
		<center><a href="Transaksi.php" style="padding:0.4% 0.8%; background-color: #009900; color: #fff; border-radius: 2px; text-decoration: none;">Kembali Ke Data Transaksi</a><br><br></center>

	<form action="" method="POST">
		<table align="center">
			<tr>
				<td>idtransaksi</td>
				<td>:</td>
				<td><input type="id" name="idtransaksi"  value="<?php echo $result['idtransaksi'] ?>" required></td>
			</tr>
			<tr>
				<td>kodepustaka</td>
				<td>:</td>
				<td><input type="text" name="kodepustaka" value="<?php echo $result['kodepustaka'] ?>"  required></td>
			</tr>
			<tr>
				<td>nomoranggota</td>
				<td>:</td>
				<td><input type="text" name="nomoranggota" value="<?php echo $result['nomoranggota'] ?>" required></td>
			</tr>
			<tr>
				<td>kodepustakawanpinjam</td>
				<td>:</td>
				<td><input type="text" name="kodepustakawanpinjam" value="<?php echo $result['kodepustakawanpinjam'] ?>" required></td>
			</tr>
			<tr>
				<td>tanggalpinjam</td>
				<td>:</td>
				<td><input type="datetime" name="tanggalpinjam" value="<?php echo $result['tanggalpinjam'] ?>" required></td>
			</tr>
			<tr>
				<td>kodepustakawankembali</td>
				<td>:</td>
				<td><input type="text" name="kodepustakawankembali" value="<?php echo $result['kodepustakawankembali'] ?>" required></td>
			</tr>
			<tr>
				<td>tanggalkembali</td>
				<td>:</td>
				<td><input type="datetime" name="tanggalkembali" value="<?php echo $result['tanggalkembali'] ?>" required></td>
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
		$update = mysqli_query($conn, "UPDATE transaksi SET idtransaksi = '".$_POST['idtransaksi']."',
		kodepustaka =  '".$_POST['kodepustaka']."',
		nomoranggota = '".$_POST['nomoranggota']."',
		kodepustakawanpinjam = '".$_POST['kodepustakawanpinjam']."',
		tanggalpinjam = '".$_POST['tanggalpinjam']."',
		kodepustakawankembali = '".$_POST['kodepustakawankembali']."',
		tanggalkembali = '".$_POST['tanggalkembali']."'
		WHERE idtransaksi = '".$_GET['idtransaksi']."'");
	if ($update) {
		echo 'berhasil di edit';
	}else{
		echo 'gagal di edit';
	}
	
	}
	?>
	<footer style="text-align:center">
    <br><br><br><br><br><br><br><br>
      <a style=" font-size: 15px; padding: 10px 20px;" align="center">&copy;Copyright 2021 || Programing by M.OKI Npm : 1955201004 </a>
    </footer>
</body>
</html>