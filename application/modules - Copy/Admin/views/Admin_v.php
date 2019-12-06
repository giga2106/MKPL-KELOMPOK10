<section class="content-header">
  <h1> Dashboard</h1>
</section>
<div class="content">
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-aqua">
      <div class="inner">
        <h3><?php echo $data_transaksi ?></h3>
        <p>Total Transaksi</p>
      </div>
      <div class="icon">
        <i class="ion ion-stats-bars"></i>
      </div>
      <a href="<?php echo base_url()."Admin/Transaksi"; ?>" class="small-box-footer">Info lebih lanjut <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <div class="col-lg-3 col-xs-6">
          <!-- small box -->
    <div class="small-box bg-yellow">
      <div class="inner">
        <h3><?php echo $data_pelanggan ?></h3>
        <p>Total Pelanggan</p>
      </div>
      <div class="icon">
        <i class="ion ion-person"></i>
      </div>
      <a href="<?php echo base_url()."Admin/Pelanggan"; ?>" class="small-box-footer">Info lebih lanjut <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-green">
      <div class="inner">
        <h3><?php echo $data_peralatan ?></sup></h3>
        <p>Total Peralatan</p>
      </div>
      <div class="icon">
        <i class="ion ion-bag"></i>
      </div>
      <a href="<?php echo base_url()."Admin/Peralatan"; ?>" class="small-box-footer">Info lebih lanjut <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
</div>
