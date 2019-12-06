<h4><i class="fa fa-exchange"></i> Detail Transaksi</h4>
<hr />
<br />
<?php
// $data = $get->row();
foreach ($data as $value) {
?>
<div class="row">
   <div class="col-md-2">
      <b>ID Pesanan</b>
    </div>
    <div class="col-md-6">
      <b class=""> : <?php echo $value->id_order; ?></b>
    </div>
</div>
<div class="row">
   <div class="col-md-2">
      <b>Nama Penerima </b>
    </div>
      <div class="col-md-6">
        <b class=""> : <?php echo $value->nama_pelanggan; ?></b>
      </div>
</div>
<div class="row">
   <div class="col-md-2">
      <b>No Telepon Penerima</b>
    </div>
      <div class="col-md-6">
        <b class=""> : <?php echo $value->telepon_pelanggan; ?></b>
      </div>
</div>
<div class="row">
   <div class="col-md-2">
      <b>Alamat Tujuan</b>
    </div>
      <div class="col-md-6">
        <b class=""> : <?php echo $value->alamat_pelanggan  ; ?></b>
      </div>
</div>
<?php } ?>
<br>
<div class="row">
   <table class="table table-striped table-bordered dt-responsive nowrap">
      <thead>
         <tr>
            <th width="5%" class="center">No</th>
            <th width="20%" class="center">Nama Item</th>
            <th width="15%" class="center">Jumlah Pesan</th>
            <th width="15%" class="center">Harga Satuan </th>
            <th width="15%" class="center">Total Harga</th>
         </tr>
      </thead>
      <tbody>
         <?php
         $i = 1;
         $total_biaya = 0;
         foreach ($datar as $value ) {
          $total_biaya += $value->biaya;
         ?>
            <tr>
               <td class="center"><?php echo $i++; ?></td>
               <td class="center"><?=$value->nama_peralatan; ?></td>
               <td class="center"><?php echo $value->banyak; ?></td>
               <td class="center">Rp. <?php echo number_format($value->harga_peralatan, 0, ',', '.'); ?></td>
               <td class="center">Rp. <?php echo number_format($value->biaya, 0, ',', '.'); ?>,-</td>
            </tr>

         <?php } ?>
         <!-- <tr>
            <td colspan="3" class="center">Ongkos Kirim</td>
            <td style="text-align:right">Rp. <?php //echo number_format($data->total - $total_biaya,0,',','.'); ?>,-</td>
         </tr> -->
         <tr>
            <td colspan="4" class="center"><b>Total Harga Bayar</b></td>
            <td>Rp. <?php echo number_format($total_biaya,0,',','.'); ?>,-</td>
         </tr>
      </tbody>
   </table>
</div>
<br />
<div class="right">
   <button type="button" class="btn red" onclick="window.history.go(-1)">Kembali</button>
</div>
<br/>
