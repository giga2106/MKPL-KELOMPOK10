<div class="login">
<div class="main-agileits">
  <div class="form-w3agile form1">
    <h3>Ubah Profil</h3>
    <?php if (validation_errors()) : ?>
         <div class="alert alert-danger">
           <?php echo validation_errors(); ?>
         </div>
     <?php endif; ?>
   <?php foreach ($data_profil as $key => $value): ?>
    <form action="<?=base_url();?>Ubah_Profil/<?php echo $value->id_pelanggan ?>" method="post">
      <div class="form-group">
        <label for="Harga">Nama :</label>
        <input type="text" class="form-control" value="<?php echo $value->nama_pelanggan ?>" name="nama_pelanggan">
      </div>
      <div class="form-group">
        <label for="Harga">Email :</label>
        <input type="email" class="form-control" value="<?php echo $value->email_pelanggan ?>"name="email_pelanggan">
      </div>
      <div class="form-group">
        <label for="Harga">Telepon :</label>
        <input type="number" class="form-control" value="<?php echo $value->telepon_pelanggan ?>"name="telepon_pelanggan">
      </div>
      <div class="form-group">
        <label for="Harga">Alamat :</label>
        <textarea name="alamat_pelanggan" id="deskripsi"  cols="30" rows="5" class="form-control"> <?php echo $value->alamat_pelanggan ?></textarea>
      </div>
    <?php endforeach; ?>
    <!-- <button onclick="window.location.href='<?=base_url();?>'" type="button" class="add btn btn-danger" data-dismiss="modal">Close</button> -->
    <!-- <button type="submit" name="submit" value="Submit" class="add modal-action btn btn-info">Simpan</button> -->
      <a href="<?=base_url();?>" class="add align-left"> Kembali</a>
      <a href="javascript:;" onclick="parentNode.submit();" class="add">Simpan</a>
       <input type="hidden" name="mess" value=Simpan/>
    </form>
  </div>

</div>
</div>
