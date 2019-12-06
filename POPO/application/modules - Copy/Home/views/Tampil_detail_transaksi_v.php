<div class="container">
  <br><br>
   <h3 class="tittle1">Detail Barang Transaksi</h3>
<br><br>
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
         foreach ($data_Detail_order as $value ) {
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
<!-- <div class="right">
   <button type="button" class="btn red" onclick="window.history.go(-1)">Kembali</button>
</div> -->
<div class="text-right">
   <a href="<?php echo base_url()."Transaksi/"; ?>" class="add align-left"> Kembali</a>
 </div>
<br/>
</div>
