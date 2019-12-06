<script type="text/javascript">
window.onload = function() {
  document.getElementById('mylink').onclick = function() {
      document.getElementById('myform').submit();
      return false;
  };
}
</script>
<br><br>
<div class="container">
  <div class="">
    <div class="form-w3agile form1">
        <h3 class="tittle1">Alamat Pengiriman</h3>
        <?= validation_errors('<p style="color:red">','</p>'); ?>
          <?php foreach ($data_profil as $key => $value): ?>
            <?php $cek = $value->alamat_pelanggan; ?>
          <?php endforeach; ?>
           <?php if ($cek == null){ ?>
             <div class="alert alert-danger text-center">
               <h4 class="">Silahkan Melengkapi Profil Anda Terlebih Dahulu</h4> <br>
               <a href="<?=base_url();?>Ubah-Profil/<?php echo $this->session->userdata('id_pelanggan') ?>" class="add align-center"> Lengkapi Profil</a>
              <br>
             </div>
           <?php } else { ?>
          <?php foreach ($data_profil as $key => $value): ?>
          <form id="myform" action="<?= base_url(); ?>Keranjang/pembayaran" method="post" >
            <div class="row">
              <div class="mb-5">
                <label for="firstName">Nama lengkap</label>
                <input type="text" class="col-md-auto form-control" id="firstName" placeholder="Nama Lengkap" value="<?php echo $value->nama_pelanggan ?>" name="nama_pelanggan">
              </div>
              <br>
              <div class="mb-5">
                <label for="number">No Hp</label>
                <input type="number" class="col-md-auto form-control" id="email" placeholder="No Hp" value="<?php echo $value->telepon_pelanggan ?>" name="telepon_pelanggan">
              </div>
              <br>
              <div class="mb-3">
                <label for="address">Alamat Lengkap</label>
                <input type="text" class="form-control" id="address" placeholder="JL Nama Jalan No.01 RT01/Rw02" value="<?php echo $value->alamat_pelanggan ?>" name="alamat_pelanggan">
              </div>
              <br>
          <?php endforeach; ?>
      <?php } ?>
              <!-- <div class="mb-3">
                <label for="address">Provinsi</label>
                <input type="text" class="form-control" id="address" placeholder="Provinsi" required>
              </div>
              <br>
              <div class="mb-3">
                <label for="address">Kabupaten/Kota</label>
                <input type="text" class="form-control" id="address" placeholder="kabupaten/kota" required>
              </div>
              <br>
              <div class="mb-3">
                <label for="address">Kode POS</label>
                <input type="text" class="form-control" id="address" placeholder="kode POS" required>
              </div>
              <br> -->
            </div>
        </div>
      </div>
    </div>
    <br>
    <div class="container">
      <br>
       <h3 class="tittle1">Barang Yang Dibeli</h3>
       <br><br>
        <table class="table table-striped">
          <thead>
             <tr>
                <th width="5%" class="center">No</th>
                <th width="40%" class="center">Nama Barang</th>
                <th width="10%" class="center">Berat</th>
                <th width="5%" class="text-center">Jumlah</th>
                <th width="15%" class="text-center">Harga Total</th>
             </tr>
          </thead>
          <tbody>
             <?php
             $i = 1;
             foreach($this->cart->contents() as $key) {
                ?>
             <tr>
                <td class="center"><?= $i++; ?></td>
                <td><?= $key['name']; ?></td>
                <td><?= number_format($key['weight'], 0, ',', '.').' gram'; ?></td>
                <td class="text-center"><?= $key['qty']; ?></td>
                <td style="text-align:right">Rp. <?= number_format(($key['qty'] * $key['price']), 0, ',', '.'); ?>,-</td>
             </tr>
           <?php } ?>
          <tr>
             <td colspan="4" class="center"><b>Total</b></td>
             <td colspan="1" style="text-align:right">Rp. <?= number_format($this->cart->total(), 0, ',','.'); ?>,-</td>
          </tr>
          </tbody>
       </table>
     </div>
     <div class="container">
       <br />
      <div class="text-right">
       <a href="<?=base_url();?>" class="add align-left"> Kembali</a>
        <?php if ($cek != null){ ?>
          <?php if ($this->cart->total() != NULL): ?>
            <a href="<?=base_url();?>save_order" class="add align-right" id="mylink"> Bayar </a>
          <?php endif; ?>
        <?php } ?>
      </div>
      <br/>
    </form>
    </div>
