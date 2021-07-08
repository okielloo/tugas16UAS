<!DOCTYPE html>
<html>
<head>
	<title>Halaman Input Anggota</title>
</head>
<body>
	<h2 style="text-align:center">Input Data Anggota</h2>
		<center><a href="anggota.php" style="padding:0.4% 0.8%; background-color: #009900; color: #fff; border-radius: 2px; text-decoration: none;">Kembali Ke Data Anggota</a><br><br></center>

	<form action="" method="POST">
		<table align="center">
			<tr>
				<td>nomoranggota</td>
				<td>:</td>
				<td><input type="text" name="nomoranggota" placeholder="" required></td>
			</tr>
			<tr>
				<td>namaanggota</td>
				<td>:</td>
				<td><input type="text" name="namaanggota" placeholder=""  required></td>
			</tr>
			<tr>
				<td>alamat</td>
				<td>:</td>
				<td><input type="text" name="alamat" placeholder="" required></td>
			</tr>
			<tr>
				<td>tanggaldaftar</td>
				<td>:</td>
				<td><input type="date" name="tanggaldaftar" placeholder="" required></td>
			</tr>
			<tr>
				<td>tanggalkedaluarsa</td>
				<td>:</td>
				<td><input type="date" name="tanggalkedaluarsa" placeholder="" required></td>
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
	$insert = mysqli_query($conn, "INSERT INTO anggota VALUES 
				('".$_POST['nomoranggota']."', 
				'".$_POST['namaanggota']."', 
				'".$_POST['alamat']."', 
				'".$_POST['tanggaldaftar']."', 
				'".$_POST['tanggalkedaluarsa']."')");
		if($insert){
			echo 'berhasil disimpan';
		}else{
			echo 'gagal disimpan';
		}
	}
	?>
<footer style="text-align:center">
    <br><br><br><br><br><br><br><br><br><br><br><br>
      <a style=" font-size: 15px; padding: 10px 20px;" align="center">&copy;Copyright 2021 || Programing by M.OKI Npm : 1955201004 </a>
    </footer>
</body>
</html>