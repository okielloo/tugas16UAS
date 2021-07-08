<!DOCTYPE html>
<html>
<head>
	<title>Halaman Transaksi</title>
</head>
<body>
	<h2 align="center">Data Transaksi</h2>
	<center><a href="form-input.php" style="padding:0.4% 0.8%; background-color: #009900; color: #fff; border-radius: 2px; text-decoration: none;">Tambah Data</a><br><br></center>
	<table border="1" cellspacing="0" width="70%" align="center">
		<tr style="text-align:center; font-weight:bold;background-color: #eee;">
			<td>no</td>
			<td>idtransaksi</td>
			<td>kodepustaka</td>
			<td>nomoranggota</td>
			<td>kodepustakawanpinjam</td>
			<td>tanggalpinjam</td>
			<td>kodepustakawankembali</td>
			<td>tanggalkembali</td>
			<td>opsi</td>
		</tr>
		<?php
		require '../koneksi.php';
		$no = 1;
		$select = mysqli_query($conn, "SELECT * FROM transaksi");
		if (mysqli_num_rows($select) > 0) {
		while($hasil = mysqli_fetch_array($select)){
		?>

        <tr style="text-align:center">
			<td><?php echo $no++ ?></td>
			<td><?php echo $hasil['idtransaksi'] ?></td>
			<td><?php echo $hasil['kodepustaka'] ?></td>
			<td><?php echo $hasil['nomoranggota'] ?></td>
			<td><?php echo $hasil['kodepustakawanpinjam'] ?></td>
			<td><?php echo $hasil['tanggalpinjam'] ?></td>
			<td><?php echo $hasil['kodepustakawankembali'] ?></td>
			<td><?php echo $hasil['tanggalkembali'] ?></td>
			<td>
				<a href="edit.php?idtransaksi=<?php echo $hasil['idtransaksi'] ?>">Edit</a> ||
				<a href="delete.php?idtransaksi=<?php echo $hasil['idtransaksi'] ?>">Hapus</a>
			</td>
		</tr>
        <?php }}else{ ?>
        <tr>
        	<td colspan="9" align="center">Data Kosong</td>
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