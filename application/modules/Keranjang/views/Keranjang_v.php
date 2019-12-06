<!-- <div class="container">
  <table class="table table-striped">
  	<thead>
  		<tr>
  			<th>ID</th>
  			<th>Foto</th>
  			<th>Nama Produk</th>
  			<th>Harga</th>
  			<th>Banyak</th>
        <th>Total</th>
  		</tr>
  	</thead>
    <?php
  //  $i = 1;
  //  foreach($this->cart->contents() as $key) :
       ?>
  	<tbody>
  		<tr>
  			<td>1</td>
  			<td>1</td>
  			<td>Mark</td>
  			<td>Otto</td>
  			<td>@mdo</td>
  			<td>@mdo</td>
  		</tr>
  		<tr>
  			<td>3</td>
  			<td colspan="2">Total Harga</td>
  			<td>@twitter</td>
  		</tr>
  	</tbody>
  </table>
</div> -->

<?= validation_errors('<p style="color:red">','</p>'); ?>
<div class="container">
  <br><br>
   <h3 class="tittle1">Keranjang Belanja</h3>
<br><br>
   <table class="table table-striped">
      <thead>
         <tr>
            <th width="5%" class="center">No</th>
            <th width="40%" class="center">Nama Barang</th>
            <th width="10%" class="center">Berat</th>
            <th width="5%" class="text-center">Jumlah</th>
            <th width="15%" class="text-center">Harga Total</th>
            <th width="14%" class="text-center">Tombol</th>
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
            <td style="text-align:right">
              <!-- <a href="#aku"  class="btn-floating orange"><i class="fa fa-edit"></i></a> -->
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#<?= $key['rowid']; ?>"> Ubah </button>
              <!-- <button href="<?= base_url(); ?>Keranjang/delete/<?= $key['rowid']; ?>" class="btn btn-danger" onclick="return confirm('Yakin Ingin menghapus item ini dari keranjang anda ?')"> Hapus </button> -->
              <a href="<?= base_url(); ?>Keranjang/delete/<?= $key['rowid']; ?>" style="background-color: #D9534F"class="btn btn-danger" onclick="return confirm('Yakin Ingin menghapus item ini dari keranjang anda ?')">Hapus<i></i></a>
            </td>
         </tr>
         <div class="modal fade " id="<?= $key['rowid']; ?>" tabindex="-1" role="dialog" aria-labelledby="<?= $key['rowid']; ?>" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content ">
              <div class="modal-header">
                <h3 class="modal-title text-center" id="<?= $key['rowid']; ?>">Edit Pesanan</h3>

              </div>
              <form action="<?= base_url(); ?>Keranjang/update " method="post">
              <div class="modal-body">

                  <div class="form-group row text-right">
                    <label for="name<?= $key['rowid']; ?>" class="col-sm-5 col-form-label">Nama Barang</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" value="<?= $key['name']; ?>" id="name<?= $key['rowid']; ?>" readonly="readonly">
                      <input type="hidden" name="row" value="<?= $key['rowid']; ?>">
                    </div>
                  </div>
                  <div class="form-group row text-right">
                    <label for="banyak<?= $key['rowid']; ?>" class="col-sm-5 col-form-label">Jumlah Pesan</label>
                    <div class="col-sm-2">
                      <input type="number" class="form-control" name="banyak" min="0" max="<?= $key['stock']; ?>" value="<?= $key['qty']; ?>" id="banyak<?= $key['rowid']; ?>" autofocus>
                    </div>
                  </div>
                  <div class="row text-center">
                    <label for="firstName">Jumlah barang yang tersedia : <?= $key['stock']; ?></label>
                  </div>
                </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="submit" value="Submit" class="modal-action btn blue">Simpan</button>
              </div>
            </form>
            </div>
          </div>
        </div>
      <?php } ?>
      <tr>
         <td colspan="4" class="center"><b>Total</b></td>
         <td colspan="1" style="text-align:right">Rp. <?= number_format($this->cart->total(), 0, ',','.'); ?>,-</td>
         <td></td>
      </tr>
      </tbody>
   </table>
 </div>
 <div class="container">
   <br />
  <div class="text-right">
     <a href="<?=base_url();?>" class="add align-left"> Kembali</a>
     <a href="<?=base_url();?>Keranjang/Bayar" class="add align-right"> Checkout</a>
   </div>
     <!-- <a class="add" onclick="window.history.go(-1)">Kembali</a> -->
  <br/>
</div>
