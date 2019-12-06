
<h2 class="text-center"> Tambah Peralatan </h2>
<?php //if($this->session->flashdata('msg')): ?>
	<!-- <div class="text-center alert alert-success alert-dismissible" ><?php// echo $this->session->flashdata('msg'); ?></div> -->
<?php //endif; ?>
<?php if (validation_errors()) : ?>
		 <div class="alert alert-danger">
			 <?php echo validation_errors(); ?>
		 </div>
 <?php endif; ?>
<form method="post" action="<?php echo base_url()."Peralatan/Tambah_Peralatan" ?>" enctype="multipart/form-data">
	<?php
	    //$sql = "SELECT * FROM kategori where id_parent=0";
	    //$result3 = $this->db->query($sql);
	?>

	<!-- first select list -->

	<div class="form-group">
		<label for="Nama"> Nama </label>
		<input type="text" class="form-control" name="nama_peralatan">
	</div>
	<div class="form-group">
		<label> Kategori </label>
	    <select class="form-control select2" id="category" name="id_kategori">
				<option value="NULL"></option>
				<?php echo $kategori ?>
	    </select>
	</div>
	<div class="form-group">
		<label for="Merek"> Merek </label>
		<select class='form-control' name='id_merek'>
			<option value="NULL"></option>
			<?php echo $merek; ?>
		</select>
	</div>
	<div class="form-group">
		<label for="Harga"> Harga (Rp)</label>
		<input type="number" min="0" class="form-control" name="harga_peralatan">
	</div>
	<div class="form-group">
		<label for="Stock"> Stock</label>
		<input type="number" min="0" class="form-control" name="stock_peralatan">
	</div>
	<div class="form-group">
		<label for="Berat"> Berat (Gr) </label>
		<input type="number" min="0" class="form-control" name="berat_peralatan">
	</div>
	<div class="form-group">
		<label for="Deskripsi"> Deskripsi </label>
		<textarea name="deskripsi_peralatan" id="deskripsi" cols="30" rows="5" class="form-control"></textarea>
	</div>

	<div class="form-group">
		<?php// echo $error;?>
		<label for="Foto"> Foto </label>
		<?php echo form_open_multipart('Peralatan/do_upload');?>
		<input class="form-control" type="file" name="foto_peralatan" multiple />
		<!-- <input id="file-0" name="foto_peralatan" class="file" type="file" multiple="true" /> -->
		<br /><br />
		<!-- </form> -->
		<!-- <input type="file" class="form-control" name="foto_peralatan"> -->
	</div>

	<button class="btn btn-primary" type="submit" name="tombol"> Simpan </button>
  <!-- <a href="<?php echo base_url()."Peralatan/Tambah"; ?>" class="btn btn-primary" name"submit"> Simpan </a> -->
	<a href="<?php echo base_url()."Admin/Peralatan"; ?>" class="btn btn-warning"> Kembali </a>
</form>
