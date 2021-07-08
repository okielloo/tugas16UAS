<!DOCTYPE html>
<html>
<head>
	<title>Halaman Input Transaksi</title>
</head>
<body>
	<h2 align="center">Input Data Transaksi</h2>
		<center><a href="transaksi.php" style="padding:0.4% 0.8%; background-color: #009900; color: #fff; border-radius: 2px; text-decoration: none;">Kembali Ke Data Transaksi</a><br><br></center>

	<form action="" method="POST">
		<table align="center">
			<tr>
				<td>idtransaksi</td>
				<td>:</td>
				<td><input type="text" name="idtransaksi" placeholder="" required></td>
			</tr>
			<tr>
				<td>kodepustaka</td>
				<td>:</td>
				<td><input type="text" name="kodepustaka" placeholder=""  required></td>
			</tr>
			<tr>
				<td>nomoranggota</td>
				<td>:</td>
				<td><input type="text" name="nomoranggota" placeholder="" required></td>
			</tr>
			<tr>
				<td>kodepustakawanpinjam</td>
				<td>:</td>
				<td><input type="text" name="kodepustakawanpinjam" placeholder="" required></td>
			</tr>
			<tr>
				<td>tanggalpinjam</td>
				<td>:</td>
				<td><input type="date" name="tanggalpinjam" placeholder="" required></td>
			</tr>
			<tr>
				<td>kodepustakawankembali</td>
				<td>:</td>
				<td><input type="text" name="kodepustakawankembali" placeholder="" required></td>
			</tr>
			<tr>
				<td>tanggalkembali</td>
				<td>:</td>
				<td><input type="date" name="tanggalkembali" placeholder="" required></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="Simpan" placeholder="Simpan" required></td>
			</tr>
		</table>
	</form>
	<br><br><br><br><br>
	<center><p><a href="../index.html" style="padding:0.4% 0.8%; background-color: #0dcaf0; color: #000; border-radius: 2px; text-decoration: none;">Kembali Ke Halaman Awal</a></p></center>
	<?php
	require '../koneksi.php';
	if (isset($_POST['Simpan'])) {
	$insert = mysqli_query($conn, "INSERT INTO transaksi VALUES 
				('".$_POST['idtransaksi']."', 
				'".$_POST['kodepustaka']."', 
				'".$_POST['nomoranggota']."', 
				'".$_POST['kodepustakawanpinjam']."', 
				'".$_POST['tanggalpinjam']."',
				'".$_POST['kodepustakawankembali']."',
				'".$_POST['tanggalkembali']."')");
		if($insert){
			echo 'berhasil disimpan';
		}else{
			echo 'gagal disimpan';
		}
	}
	?>
	<footer style="text-align:center">
    <br><br><br><br><br><br><br><br>
      <a style=" font-size: 15px; padding: 10px 20px;" align="center">&copy;Copyright 2021 || Programing by M.OKI Npm : 1955201004 </a>
    </footer>
</body>
</html>