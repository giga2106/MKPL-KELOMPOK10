<?php include 'header.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="conten container-fluid">
      <?php  
      if (isset($_GET['halaman'])) {
        if ($_GET['halaman'] == "produk") {
          include 'produk.php';
        }elseif ($_GET['halaman'] == "pelanggan") {
          include 'pelanggan.php';
        }elseif ($_GET['halaman'] == "pembelian") {
          include 'pembelian.php';
        }elseif ($_GET['halaman'] == "detail") {
          include 'detail.php';
        }elseif ($_GET['halaman'] == "tambah_produk") {
          include 'tambah_produk.php';
        }elseif ($_GET['halaman'] == "hapus_produk") {
          include 'hapus_produk.php';
        }elseif ($_GET['halaman'] == "edit_produk") {
          include 'tambah_produk.php';
        }
      }else {
        include 'home.php';
      }
      ?>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include 'footer.php'; ?>