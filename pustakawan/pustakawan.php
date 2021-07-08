<!DOCTYPE html>
<html>
<head>
	<title>Halaman Pustakawan</title>
</head>
<body>
	<h2 align="center">Data Pustakawan</h2>
	<center><a href="form-input.php" style="padding:0.4% 0.8%; background-color: #009900; color: #fff; border-radius: 2px; text-decoration: none;">Tambah Data</a><br><br></center>
	<table border="1" cellspacing="0" width="70%" align="center">
		<tr style="text-align:center; font-weight:bold;background-color: #eee;">
			<td>no</td>
			<td>kodepustakawan</td>
			<td>namapustakawan</td>
			<td>password</td>
			<td>nomortelepon</td>
			<td>opsi</td>
		</tr>
		<?php
		require '../koneksi.php';
		$no = 1;
		$select = mysqli_query($conn, "SELECT * FROM pustakawan");
		if (mysqli_num_rows($select) > 0) {
		while($hasil = mysqli_fetch_array($select)){
		?>

        <tr style="text-align:center">
			<td><?php echo $no++ ?></td>
			<td><?php echo $hasil['kodepustakawan'] ?></td>
			<td><?php echo $hasil['namapustakawan'] ?></td>
			<td><?php echo $hasil['password'] ?></td>
			<td><?php echo $hasil['nomortelepon'] ?></td>
			<td>
				<a href="edit.php?kodepustakawan=<?php echo $hasil['kodepustakawan'] ?>">Edit</a> ||
				<a href="delete.php?kodepustakawan=<?php echo $hasil['kodepustakawan'] ?>">Hapus</a>
			</td>
		</tr>
        <?php }}else{ ?>
        <tr>
        	<td colspan="6" align="center">Data Kosong</td>
        </tr>

        <?php } ?>
	</table>
	<br><br><br><br><br>
	<center><p><a href="../index.html" style="padding:0.4% 0.8%; background-color: #0dcaf0; color: #000; border-radius: 2px; text-decoration: none;">Kembali Ke Halaman Awal</a></p></center>
	<footer style="text-align:center">
    <br><br><br><br><br><br><br><br><br><br><br><br>
      <a style=" font-size: 15px; padding: 10px 20px;" align="center">&copy;Copyright 2021 || Programing by M.OKI Npm : 1955201004 </a>
    </footer>
</body>
</html>