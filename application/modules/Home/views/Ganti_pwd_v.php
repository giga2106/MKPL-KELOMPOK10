<div class="login">
<div class="main-agileits">
  <div class="form-w3agile form1">
    <h3>Ubah Password</h3>
    <?php if (validation_errors()) : ?>
         <div class="alert alert-danger">
           <?php echo validation_errors(); ?>
         </div>
     <?php endif; ?>
     <?php if($this->session->flashdata('reg')): ?>
       <div class="text-center alert alert-danger alert-dismissible" ><?php echo $this->session->flashdata('reg'); ?></div>
    <?php endif; ?>
    <?php if($this->session->flashdata('saran')): ?>
       <div class="text-center alert alert-warning alert-dismissible" ><?php echo $this->session->flashdata('saran'); ?></div>
    <?php endif; ?>
   <?php foreach ($data_profil as $key => $value): ?>
    <form action="<?=base_url();?>Ubah_Password/<?php echo $value->id_pelanggan ?>" method="post">
      <div class="form-group">
        <label for="Harga">username :</label>
        <input type="text" class="form-control" value="<?php echo $value->username_pelanggan ?>"name="username">
      </div>
      <div class="form-group">
        <label for="Harga">password Lama:</label>
        <input type="password" class="form-control" placeholder="Password Lama"name="password">
      </div>
      <div class="form-group">
        <label for="Harga">Password Baru :</label>
        <input type="password" class="form-control" placeholder="Password Baru"name="repassword">
      </div>
    <?php endforeach; ?>
    <button onclick="window.location.href='<?=base_url();?>'" type="button" class="add btn btn-danger" data-dismiss="modal">Close</button>
    <button type="submit" name="submit" value="Submit" class="add modal-action btn btn-info">Simpan</button>
    </form>
  </div>

</div>
</div>
