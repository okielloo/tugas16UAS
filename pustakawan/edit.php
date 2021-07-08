<?php
require '../koneksi.php';
$data_edit = mysqli_query($conn, "SELECT * FROM pustakawan WHERE kodepustakawan = '".$_GET['kodepustakawan']."'");
$result = mysqli_fetch_array($data_edit); 
?>


<!DOCTYPE html>
<html>
<head>
	<title>Halaman Edit Data Pustakawan</title>
</head>
<body>
	<h2 align="center">Edit Data Pustakawan</h2>
	<center>	<a href="Pustakawan.php" style="padding:0.4% 0.8%; background-color: #009900; color: #fff; border-radius: 2px; text-decoration: none;">Kembali Ke Data Pustakawan</a><br><br></center>

	<form action="" method="POST">
		<table align="center">
			<tr>
				<td>kodepustakawan</td>
				<td>:</td>
				<td><input type="text" name="kodepustakawan"  value="<?php echo $result['kodepustakawan'] ?>" required></td>
			</tr>
			<tr>
				<td>namapustakawan</td>
				<td>:</td>
				<td><input type="text" name="namapustakawan" value="<?php echo $result['namapustakawan'] ?>"  required></td>
			</tr>
			<tr>
				<td>password</td>
				<td>:</td>
				<td><input type="text" name="password" value="<?php echo $result['password'] ?>" required></td>
			</tr>
			<tr>
				<td>nomortelepon</td>
				<td>:</td>
				<td><input type="text" name="nomortelepon" value="<?php echo $result['nomortelepon'] ?>" required></td>
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
		$update = mysqli_query($conn, "UPDATE pustakawan SET kodepustakawan = '".$_POST['kodepustakawan']."',
		namapustakawan =  '".$_POST['namapustakawan']."',
		password = '".$_POST['password']."',
		nomortelepon = '".$_POST['nomortelepon']."'
		WHERE kodepustakawan = '".$_GET['kodepustakawan']."'");
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