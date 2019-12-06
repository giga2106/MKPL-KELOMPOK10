<h2 class="text-center"> Ubah Peralatan </h2>
  <?php if (validation_errors()) : ?>
  		 <div class="alert alert-danger">
  			 <?php echo validation_errors(); ?>
  		 </div>
   <?php endif; ?>

<form method="post" action="<?php echo base_url()."Peralatan/Update_Peralatan/".$data->id_peralatan ?>" enctype="multipart/form-data">
	<div class="form-group">
		<label for="Nama"> Nama </label>
		<input type="text" class="form-control" value="<?php echo $data->nama_peralatan ?>" name="nama_peralatan">
	</div>
	<div class="form-group">
		<label> Kategori </label>
	    <select class="form-control select2" id="category" name="id_kategori">
        <option value="<?php echo $data->id_kategori ?>"><?php echo $value_kategori->nama_kategori ?></option>
        <?php
        foreach ($kategori as $key => $value) {
            echo "<option value='{$value->id_kategori}'>{$value->nama_kategori}</option>";
          }
         ?>
	    </select>
	</div>
	<div class="form-group">
		<label for="Merek"> Merek </label>
		<select class='form-control' name='id_merek'>
      <option value="<?php echo $data->id_merek ?>"><?php echo $value_merek->nama_merek ?></option>
      <?php
      foreach ($merek as $key => $value) {
        echo "<option value='{$value->id_merek}'>{$value->nama_merek}</option>";
      }?>
		</select>
	</div>
	<div class="form-group">
		<label for="Harga"> Harga (Rp)</label>
		<input type="number" class="form-control" value="<?php echo $data->harga_peralatan ?>"name="harga_peralatan">
	</div>
	<div class="form-group">
		<label for="Stock"> Stock</label>
		<input type="number" class="form-control" value="<?php echo $data->stock_peralatan ?>"name="stock_peralatan">
	</div>
	<div class="form-group">
		<label for="Berat"> Berat (Gr) </label>
		<input type="number" class="form-control" value="<?php echo $data->berat_peralatan ?>"name="berat_peralatan">
	</div>
	<div class="form-group">
		<label for="Deskripsi"> Deskripsi </label>
		<textarea name="deskripsi_peralatan" id="deskripsi"  cols="30" rows="5" class="form-control"> <?php echo $data->deskripsi_peralatan ?></textarea>
	</div>

	<div class="form-group">
		<?php// echo $error;?>
		<label for="Foto"> Foto </label>
    <br>
    <?php
    if (isset($data->foto_peralatan)) {
       echo '<input type="hidden" name="old_pict" value="'.$data->foto_peralatan.'">';
       echo '<img src="'.base_url().'foto_peralatan/'.$data->foto_peralatan.'" width="20%">';
       echo '<div class="clear-fix"></div><br />';
    }
    ?>
		<input class="form-control" type="file" value="Tidak" name="foto_peralatan" enctype="multiple/form-data" />
		<br /><br />
	</div>

	<button class="btn btn-primary" type="submit" name="update"> Simpan </button>
	<a href="<?php echo base_url()."Admin/Peralatan"; ?>" class="btn btn-warning"> Kembali </a>
</form>
<?php //endforeach;  ?>
