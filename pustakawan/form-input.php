<!DOCTYPE html>
<html>
<head>
	<title>Halaman Input Pustakawan</title>
</head>
<body>
	<h2 align="center">Input Data Pustakawan</h2>
	<center>	<a href="Pustakawan.php" style="padding:0.4% 0.8%; background-color: #009900; color: #fff; border-radius: 2px; text-decoration: none;">Kembali Ke Data Pustakawan</a><br><br></center>

	<form action="" method="POST">
		<table align="center">
			<tr>
				<td>kodepustakawan</td>
				<td>:</td>
				<td><input type="text" name="kodepustakawan" placeholder="" required></td>
			</tr>
			<tr>
				<td>namapustakawan</td>
				<td>:</td>
				<td><input type="text" name="namapustakawan" placeholder=""  required></td>
			</tr>
			<tr>
				<td>password</td>
				<td>:</td>
				<td><input type="password" name="password" placeholder="" required></td>
			</tr>
			<tr>
				<td>nomortelepon</td>
				<td>:</td>
				<td><input type="text" name="nomortelepon" placeholder="" required></td>
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
	$insert = mysqli_query($conn, "INSERT INTO pustakawan VALUES 
				('".$_POST['kodepustakawan']."', 
				'".$_POST['namapustakawan']."', 
				'".$_POST['password']."',  
				'".$_POST['nomortelepon']."')");
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