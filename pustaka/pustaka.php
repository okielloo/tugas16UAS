<!DOCTYPE html>
<html>
<head>
	<title>Halaman Puataka</title>
</head>
<body>
	<h2 align="center">Data Pustaka</h2>
	<center><a href="form-input.php" style="padding:0.4% 0.8%; background-color: #009900; color: #fff; border-radius: 2px; text-decoration: none;">Tambah Data</a><br><br></center>
	<table border="1" cellspacing="0" width="70%" align="center">
		<tr style="text-align:center; font-weight:bold;background-color: #eee;">
			<td>no</td>
			<td>kodepustaka</td>
			<td>judulpustaka</td>
			<td>pengarang</td>
			<td>penerbit</td>
			<td>tahunterbit</td>
			<td>opsi</td>
		</tr>
		<?php
		require '../koneksi.php';
		$no = 1;
		$select = mysqli_query($conn, "SELECT * FROM pustaka");
		if (mysqli_num_rows($select) > 0) {
		while($hasil = mysqli_fetch_array($select)){
		?>

        <tr style="text-align:center">
			<td><?php echo $no++ ?></td>
			<td><?php echo $hasil['kodepustaka'] ?></td>
			<td><?php echo $hasil['judulpustaka'] ?></td>
			<td><?php echo $hasil['pengarang'] ?></td>
			<td><?php echo $hasil['penerbit'] ?></td>
			<td><?php echo $hasil['tahunterbit'] ?></td>
			<td>
				<a href="edit.php?kodepustaka=<?php echo $hasil['kodepustaka'] ?>">Edit</a> ||
				<a href="delete.php?kodepustaka=<?php echo $hasil['kodepustaka'] ?>">Hapus</a>
			</td>
		</tr>
        <?php }}else{ ?>
        <tr>
        	<td colspan="7" align="center">Data Kosong</td>
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