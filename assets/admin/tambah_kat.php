<?php

	$sql = query("INSERT INTO kategori (id_kategori, nama_kategori) VALUES ('','$_POST[nama_kategori]')") or die (mysql_error());

	if($sql) {
		echo "<h2>PROSES INPUT KATEGORI BERHASIL</h2><p><a href='sub.php'>Klik Disini Untuk Melihat</a></p>";
	}
?>