<div class="login">
<div class="main-agileits">
  <div class="form-w3agile form1">
    <h3>Registrasi</h3>
    <?php if (validation_errors()) : ?>
         <div class="alert alert-danger">
           <?php echo validation_errors(); ?>
         </div>
     <?php endif; ?>
     <?php if($this->session->flashdata('reg')): ?>
       <div class="text-center alert alert-danger alert-dismissible" ><?php echo $this->session->flashdata('reg'); ?></div>
   <?php endif; ?>
    <form action="register" method="post">
      <div class="key">
        <i class="fa fa-user" aria-hidden="true"></i>
        <input  type="text" placeholder="Nama" name="nama"  required="">
        <div class="clearfix"></div>
      </div>
      <div class="key">
        <i class="fa fa-user" aria-hidden="true"></i>
        <input  type="text" placeholder="Username" name="username"  required="">
        <div class="clearfix"></div>
      </div>
      <div class="key">
        <i class="fa fa-envelope" aria-hidden="true"></i>
        <input  type="email" placeholder="Email" name="email" required="">
        <div class="clearfix"></div>
      </div>
      <div class="key">
        <i class="fa fa-lock" aria-hidden="true"></i>
        <input  type="password" placeholder="Password" name="password" required="">
        <div class="clearfix"></div>
      </div>
      <div class="key">
        <i class="fa fa-lock" aria-hidden="true"></i>
        <input  type="password" placeholder="Konfirmasi Password" name="repassword" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Confirm Password';}" required="">
        <div class="clearfix"></div>
      </div>
      <input type="submit" value="Daftar">
    </form>
  </div>

</div>
</div>
