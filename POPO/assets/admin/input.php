<html>
	<head>
		<title>Membuat Sub Kategori Dinamis PHP dan MySQL</title>
	</head>
	<body>
<?php
	if($_GET['halaman'] == 'pelanggan') { ?>
		<form method="POST" action="tambah_sub.php">
			<input name="nama_sub_kategori" type="text" /><br />
			<select name="kategori">
				<option value="0">Pilih Kategori</option>
			<?php
				$sql = query("SELECT id_kategori, nama_kategori FROM kategori");

				while($r=mysqli_fetch_array($sql)) {

					echo "<option value=".$r['id_kategori'].">".$r['nama_kategori']."</option>";

				}
			?>
			</select>*)Silahkan Masukan Nama kategori
			<p><input type="submit" value="Submit" name="submit" /></p>
		</form>
<?php }
	else if($_GET['halaman'] == 'pelanggan') { ?>
		<p>Masukan Nama Kategori</p>
		<form method="POST" action="tambah_kat.php">
			<input type="text" name="nama_category" />
			<input type="submit" value="Submit" />
		</form>
<?php } ?>
	</body>
</html>