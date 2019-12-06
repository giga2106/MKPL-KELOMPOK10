<?php 
if (isset($_GET['id'])) {
	$ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk=".$_GET["id"]);
$detail = $ambil->fetch_assoc();
	

	$nama = $detail['nama_produk'];
	// $merek = $detail['nama_merek'];
	$subKategori = $detail['id_kategori'];
	$kategori = $detail['id_parent'];
	$ambil2 = $koneksi->query("SELECT * FROM kategori WHERE id_kategori=".$subKategori);
$detail2 = $ambil2->fetch_assoc();
	$kategoriHasil =$detail2['nama_kategori'];
	$ambil3 = $koneksi->query("SELECT * FROM kategori WHERE id_kategori=".$kategori);
$detail3 = $ambil3->fetch_assoc();
	$subKategoriHasil = $detail3['nama_kategori'];
	// $subKategori
} else {
	$nama = '';
}

 ?>
    <script type="text/javascript">
       $(document).ready(function() {
        $("#category").change(function() {
            var selectVal = $('#category :selected').val();
            $.ajax({                                      
              url: 'getsub.php',                         
              data: "groupid="+selectVal,                                                     
              type:'post',
              //dataType: 'json',                
              success: function(data)    
              { 
                $('#subcat').html('<option value="">'+data+'</option>');
              }
            });
        });
      });
    </script>

<h2 class="text-center"> Tambah Produk </h2>    
<form method="POST" enctype="multipart/form-data">
	<?php
	    $sql = "SELECT * FROM kategori where id_parent=0";
	    $result3 = $koneksi->query($sql);	    
	?>

	<!-- first select list -->

	<div class="form-group">
		<label for="Nama"> Nama </label>
		<input type="text" class="form-control" value="<?=$nama?>" name="nama">
	</div>
	<div class="form-group">    
		<label>Kategori Utama </label>
	    <select class="form-control" id="category" name="kategori">
	      <option value ="null"></option>
	    	<?php            		
		      while($row = $result3->fetch_array(MYSQLI_ASSOC)) {
		        echo '<option value='.$row['id_kategori'].'>'.$row['nama_kategori'].'</option>'; 
		    }
	    	?> 
	    </select>
	</div>

	<div class="form-group"> 

	      <label> Sub Kategori </label>
	      <select class="form-control" id="subcat"  name="subKategori">
	        <option value = ""></option>        
	      ?>
	     </select>
	</div>
	<div class="form-group">
		<label for="Merek"> Merek </label>
		<select class='form-control' name='merek'>
		<option value='belum milih' selected> </option>
		<?php $ambil = $koneksi->query("SELECT * FROM merek"); 
		while ($pecah = $ambil->fetch_assoc()) 
		{ 
			echo "<option value='".$pecah["id_merek"]."'>".$pecah["nama_merek"]."</option>";
		} 
		?>
		</select>
	</div>
	<div class="form-group">
		<label for="Harga"> Harga (Rp)</label>
		<input type="number" class="form-control" name="harga">
	</div>
	<div class="form-group">
		<label for="Berat"> Berat (Gr) </label>
		<input type="number" class="form-control" name="berat">
	</div>
	<div class="form-group">
		<label for="Deskripsi"> Deskripsi </label>
		<textarea name="deskripsi" id="deskripsi" cols="30" rows="5" class="form-control"></textarea>
	</div>
	<div class="form-group">
		<label for="Foto"> Foto </label>
		<input type="file" class="form-control" name="foto">
	</div>
	<button class="btn btn-primary" name="tombol"> Simpan </button>
	<a href="index.php?halaman=produk" class="btn btn-warning"> Kembali </a>
</form>

<?php

if (isset($_POST['tombol'])) {
	if (isset($_GET['id'])) {

	} else {
		$queryInsertEdit = "INSERT INTO produk 	(id_produk, id_kategori, id_parent, id_merek, nama_produk, harga_produk, berat_produk, foto_produk, deskripsi_produk) 
		VALUES 				(NULL,'$_POST[subKategori]','$_POST[kategori]', '$_POST[merek]', '$_POST[nama]', '$_POST[harga]', '$_POST[berat]', '$nama' , '$_POST[deskripsi]')";
	}
	
	$nama = $_FILES['foto']['name'];
	$lokasi = $_FILES['foto']['tmp_name'];
	move_uploaded_file($lokasi, "../foto_produk/" . $nama);
	$koneksi->query($queryInsertEdit);
	 
	 echo "<br><div class='alert alert-success text-center'> Data berhasil Disimpan </div>";
	 echo "<meta http-equiv='refresh' content='1:url=index.php?halaman=produk'>";
	}
	
 ?>
 <?php
	if ($_POST)
	{
		echo '<pre>'; 
		print_r($_POST);
	}
	?>

	<!-- UPLOAD FOTO GAGAL -->
