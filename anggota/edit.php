<?php
require '../koneksi.php';
$data_edit = mysqli_query($conn, "SELECT * FROM anggota WHERE nomoranggota = '".$_GET['nomoranggota']."'");
$result = mysqli_fetch_array($data_edit); 
?>


<!DOCTYPE html>
<html>
<head>
	<title>Halaman Edit Data Anggota</title>
</head>
<body>
	<h2 style="text-align:center">Edit Data Anggota</h2>
		<center><a href="anggota.php" style="padding:0.4% 0.8%; background-color: #009900; color: #fff; border-radius: 2px; text-decoration: none;">Kembali Ke Data Anggota</a><br><br></center>

	<form action="" method="POST">
		<table align="center">
			<tr>
				<td>nomoranggota</td>
				<td>:</td>
				<td><input type="text" name="nomoranggota"  value="<?php echo $result['nomoranggota'] ?>" required></td>
			</tr>
			<tr>
				<td>namaanggota</td>
				<td>:</td>
				<td><input type="text" name="namaanggota" value="<?php echo $result['namaanggota'] ?>"  required></td>
			</tr>
			<tr>
				<td>alamat</td>
				<td>:</td>
				<td><input type="text" name="alamat" value="<?php echo $result['alamat'] ?>" required></td>
			</tr>
			<tr>
				<td>tanggaldaftar</td>
				<td>:</td>
				<td><input type="text" name="tanggaldaftar" value="<?php echo $result['tanggaldaftar'] ?>" required></td>
			</tr>
			<tr>
				<td>tanggalkedaluarsa</td>
				<td>:</td>
				<td><input type="text" name="tanggalkedaluarsa" value="<?php echo $result['tanggalkedaluarsa'] ?>" required></td>
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
		$update = mysqli_query($conn, "UPDATE anggota SET nomoranggota = '".$_POST['nomoranggota']."',
		namaanggota =  '".$_POST['namaanggota']."',
		alamat = '".$_POST['alamat']."',
		tanggaldaftar = '".$_POST['tanggaldaftar']."',
		tanggalkedaluarsa = '".$_POST['tanggalkedaluarsa']."'
		WHERE nomoranggota = '".$_GET['nomoranggota']."'");
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