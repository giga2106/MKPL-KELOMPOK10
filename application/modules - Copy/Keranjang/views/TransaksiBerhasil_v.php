<div class="container"><br>
  <div class="alert alert-success">
    <h2 class="text-center">TERIMA KASIH</h2><br>
    <h3 class="text-center">anda telah berhasil checkout dengan no pemesanan : <?php echo $data_OrderId; ?></h3><br>
    <div class="alert alert-warning text-center">
    <h3 class="text-center">Jumlah yang harus dibayar</h3><br>
    <h2 class="text-center" >Rp. <?php echo number_format($data_TotPembayaran) ?></h2><br>
  </div>
  <h3 class="text-center">Silahkan melakukan pembayaran pada rekening berikut</h3><br>
  <h3 class="text-center">9999 - 99999 - 999999</h3><br>
</div>
  <div class="text-center">
    <h3><a class="add align-center" href="<?php echo base_url()."Peralatan/"; ?>">Belanja Lagi</a></h3>
  </div><br>
</div>
