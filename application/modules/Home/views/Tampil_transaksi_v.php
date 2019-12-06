<div class="container">
  <br><br>
   <h3 class="tittle1">Daftar Transaksi</h3>
<br><br>
   <table class="table table-striped">
      <thead>
         <tr>
            <th width="5%" class="text-center">No</th>
            <th width="5%" class="text-center">ID Order</th>
            <th width="10%" class="text-center">Nama Penerima</th>
            <th width="10%" class="text-center">Telepon Penerima</th>
            <th width="25%" class="text-center">Alamat Penerima</th>
            <th width="10%" class="text-center">Tanggal Pembelian</th>
            <th width="10%" class="text-center">Batas Pembayaran</th>
            <th width="10%" class="text-center">Total Harga</th>
            <th width="5%" class="text-center">Status</th>
            <th width="5%" class="text-center">Detail</th>
         </tr>
      </thead>
      <tbody>
         <?php
         $i = 1;
         foreach($data_order as $key) {
             ?>
         <tr>
            <td class="text-center"><?php echo $i++; ?></td>
            <td class="text-center"><?php echo $key->id_order; ?></td>
            <td><?php echo $key->nama_pelanggan; ?></td>
            <td><?php echo $key->telepon_pelanggan; ?></td>
            <td><?php echo $key->alamat_pelanggan; ?></td>
            <td class="text-center"><?php echo $key->tanggal_pembelian; ?></td>
            <td class="text-center"><?php echo $key->batas_bayar; ?></td>
            <td>Rp. <?php echo number_format($key->total_pembelian, 0, ',','.'); ?></td>
            <td><b><?php echo $key->status; ?></b></td>
            <td><a href="<?=base_url();?>Transaksi/Detail/<?php echo $key->id_order; ?>" class="add align-right"> Lihat</a>
         </tr>
      <?php } ?>
      </tbody>
   </table>
 </div>
 <div class="container">
   <br />
  <div class="text-right">
     <a href="<?phpbase_url();?>" class="add align-left"> Kembali</a>
   </div>
     <!-- <a class="add" onclick="window.history.go(-1)">Kembali</a> -->
  <br/>
</div>
