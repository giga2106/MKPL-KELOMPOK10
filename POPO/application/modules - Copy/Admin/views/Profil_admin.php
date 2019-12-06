<h2 class="text-center "> Pengaturan Profil </h2><br>
<?php if (validation_errors()) : ?>
     <div class="alert alert-danger text-center">
       <?php echo validation_errors(); ?>
     </div>
 <?php endif; ?>
 <?php if($this->session->flashdata('reg')): ?>
   <div class="text-center alert alert-danger alert-dismissible" ><?php echo $this->session->flashdata('reg'); ?></div>
<?php endif; ?>
<?php if($this->session->flashdata('saran')): ?>
   <div class="text-center alert alert-warning alert-dismissible" ><?php echo $this->session->flashdata('saran'); ?></div>
<?php endif; ?>
 <?php foreach ($data_profil as $key => $value){ ?>
<div class="tab-pane" id="settings">
  <form method="post" action="<?php echo base_url()."Admin/Update_profil/"?>" class="form-horizontal">
    <div class="form-group">

      <label for="inputName" class="col-sm-4 control-label">Nama Lengkap</label>

      <div class="col-sm-4">
        <input type="text" class="form-control" id="inputName" value="<?php echo $value->Nama ?>" name="nama">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-sm-4 control-label">Username</label>

      <div class="col-sm-4">
        <input type="text" class="form-control" id="inputEmail" value="<?php echo $value->username ?>" name="username">
      </div>
    </div>
    <div class="form-group">
      <label for="inputSkills" class="col-sm-4 control-label">Password Lama</label>
      <div class="col-sm-4">
        <input type="password" class="form-control" id="inputSkills" placeholder="Password lama" name="password">
      </div>
    </div>
    <div class="form-group">
      <label for="inputSkills" class="col-sm-4 control-label">Password Baru</label>
      <div class="col-sm-4">
        <input type="password" class="form-control" id="inputSkills" placeholder="Password Baru" name="repassword">
      </div>
    </div>
    <?php } ?>
    <div class="form-group">
      <div class="col-sm-offset-4 col-sm-4">
        <button type="submit" class="btn btn-success ">Simpan</button>
      <!-- <div class="col-sm-offset-2 col-sm-6"> -->
        <a href="<?php echo base_url()."Admin"; ?>" type="submit" class="btn btn-danger">Batal</a>
      <!-- </div> -->
    </div>
    </div>
  </form>
</div>
