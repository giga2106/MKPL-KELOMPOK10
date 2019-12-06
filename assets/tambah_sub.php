<?php
 $koneksi = new mysqli("localhost" , "root" , "" , "popo");
	$sql = query("INSERT INTO sub_kategori (id_sub_kategori, id_kategori, nama_sub_kategori) VALUES ('','$_POST[nama_kategori]','$_POST[nama_sub_kategori]')") or die (mysql_error());

	if($sql) {
		echo "<h2>PROSES INPUT SUB KATEGORI BERHASIL</h2><p><a href='sub.php'>Klik Disini Untuk Melihat</a></p>";
	}
?>