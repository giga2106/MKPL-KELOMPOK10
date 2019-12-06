<?php $koneksi = new mysqli("localhost" , "root" , "" , "popo"); ?>
<html>
	<head>
		<title>Membuat Sub Kategori Dinamis PHP dan MySQL</title>
		<script src="js/prototype.js" type="text/javascript"></script>
		<script src="js/Menu.js" type="text/javascript"></script>
		<script type="text/javascript">
			Menu.init("menu", {"orientation": Menu.VERTICAL});
		</script>

		<style type="text/css">
			a {
				text-decoration: none;
				}
			table {
				position: absolute;
				margin-top: 10px;
				}
			table tr td {
				background-color: #EDEDED;
				}
			/* reset default styles */
			#menu,
			#menu ul { margin: 0; padding: 0; }
			#menu li { list-style-type: none; }

			/* first level */
			#menu { width: 100px; float: left; margin-top: 100px; }
			#menu li,
			#menu a { float: left; width: 100px; }
			#menu a { display: block; background: #EEE; }
			#menu a:hover,
			#menu a.menu_open { background: #DDD; }

			/* second level */
			#menu ul { visibility: hidden; position: absolute; width: 100px; }
			#menu ul a { background: #DDD; }
			#menu ul a:hover,
			#menu ul a.menu_open { background: #CCC; }

			/* third level (colors) */
			#menu ul ul a { background: #CCC; }
			#menu ul ul a:hover { background: #BBB; }
		</style>
	</head>
	<body>
	<ul id="menu">
	<?php
			 
		$sql = $koneksi->query("SELECT id_kategori, nama_kategori FROM kategori");

		while($r=mysqli_fetch_array($sql)) {

			echo "<li><a href='#'>".$r['kategori']."</a>";

			$sql2 = query("SELECT * FROM nama_sub_kategori WHERE id_kategori = '".$r['id_kategori']."'");

			if($sql2) {
				echo "<ul>";
				while($d=mysqli_fetch_array($sql2)) {
					echo "<li><a href='#'>".$d['nama_sub_kategori']."</a></li>";

				}
				echo "</ul>";
			} else {
				echo "</li>";
			}
		}
	?>
	</ul>
	<table>
	<tr><td><a href="input.php?aksi=tambahkategori">Tambah Kategori</a></td><td><a href="input.php?aksi=tambahsub">Tambah Sub Kategori</a></td></tr>
	</table>
	</body>
</html>