<!DOCTYPE html>
<html>
<head>
	<title>Halaman Input Pustaka</title>
</head>
<body>
	<h2 align="center">Input Data Pustaka</h2>
	<center>	<a href="pustaka.php" style="padding:0.4% 0.8%; background-color: #009900; color: #fff; border-radius: 2px; text-decoration: none;">Kembali Ke Data Puataka</a><br><br></center>

	<form action="" method="POST">
		<table align="center">
			<tr>
				<td>kodepustaka</td>
				<td>:</td>
				<td><input type="text" name="kodepustaka" placeholder="" required></td>
			</tr>
			<tr>
				<td>judulpustaka</td>
				<td>:</td>
				<td><input type="text" name="judulpustaka" placeholder=""  required></td>
			</tr>
			<tr>
				<td>pengarang</td>
				<td>:</td>
				<td><input type="text" name="pengarang" placeholder="" required></td>
			</tr>
			<tr>
				<td>penerbit</td>
				<td>:</td>
				<td><input type="text" name="penerbit" placeholder="" required></td>
			</tr>
			<tr>
				<td>tahunterbit</td>
				<td>:</td>
				<td><input type="date" name="tahunterbit" placeholder="" required></td>
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
	$insert = mysqli_query($conn, "INSERT INTO pustaka VALUES 
				('".$_POST['kodepustaka']."', 
				'".$_POST['judulpustaka']."', 
				'".$_POST['pengarang']."', 
				'".$_POST['penerbit']."', 
				'".$_POST['tahunterbit']."')");
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