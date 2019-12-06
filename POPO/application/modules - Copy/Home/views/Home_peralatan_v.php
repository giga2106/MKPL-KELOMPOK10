<!--banner-->
<div class="banner-w3">
  <div class="demo-1">
    <div id="example1" class="core-slider core-slider__carousel example_1">
      <div class="core-slider_viewport">
        <div class="core-slider_list">
          <div class="core-slider_item">
            <img src="<?php echo base_url()."assets/"; ?>mainpage/images/slide1.jpg" class="img-responsive" alt="">
          </div>
           <div class="core-slider_item">
             <img src="<?php echo base_url()."assets/"; ?>mainpage/images/slide2.jpg" class="img-responsive" alt="">
           </div>
          <div class="core-slider_item">
              <img src="<?php echo base_url()."assets/"; ?>mainpage/images/slide3.jpg" class="img-responsive" alt="">
          </div>
          <div class="core-slider_item">
              <img src="<?php echo base_url()."assets/"; ?>mainpage/images/slide4.jpg" class="img-responsive" alt="">
          </div>
         </div>
      </div>
      <div class="core-slider_nav">
        <div class="core-slider_arrow core-slider_arrow__right"></div>
        <div class="core-slider_arrow core-slider_arrow__left"></div>
      </div>
      <div class="core-slider_control-nav"></div>
    </div>
  </div>
  <link href="<?php echo base_url()."assets/"; ?>mainpage/css/coreSlider.css" rel="stylesheet" type="text/css">
  <script src="<?php echo base_url()."assets/"; ?>mainpage/js/coreSlider.js"></script>
  <script>
  $('#example1').coreSlider({
    pauseOnHover: false,
    interval: 3000,
    controlNavEnabled: true
  });

  </script>

</div>
<!--banner-->
  <!--content-->
<div class="content">
  <!--Products-->
  <div class="latest-w3">
    <div class="container">
      <h3 class="tittle1">Kategori Yang Sering Dicari</h3>
      <div class="latest-grids">
        <div class="col-md-4 latest-grid">
          <div class="latest-top">
            <img  src="<?php echo base_url()."assets/"; ?>mainpage/images/kat1.jpg" class="img-responsive"  alt="">
            <a href="<?php echo base_url()."Peralatan/Kategori/2"; ?>">
              <div class="latest-text">
                <h4>Sepatu Fulsal</h4>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4 latest-grid">
          <div class="latest-top">
            <img  src="<?php echo base_url()."assets/"; ?>mainpage/images/kat3.jpg" class="img-responsive"  alt="">
            <a href="<?php echo base_url()."Peralatan/Kategori/4"; ?>">
              <div class="latest-text">
                <h4>Jersey Sepak Bola</h4>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4 latest-grid">
          <div class="latest-top">
            <img  src="<?php echo base_url()."assets/"; ?>mainpage/images/kat2.jpg" class="img-responsive"  alt="">
            <a href="<?php echo base_url()."Peralatan/Kategori/1"; ?>">
              <div class="latest-text">
                <h4>Sepatu Sepak Bola</h4>
              </div>
            </a>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
      <!-- <div class="latest-grids"> -->
        <!-- <div class="clearfix"></div> -->
      <!-- </div> -->
    </div>
  </div>

  <!--akhir promo-->
    <div class="new-arrivals-w3agile">
      <div class="container">
        <h3 class="tittle1">Peralatan Terbaru</h3>
        <div class="arrivals-grids">
          <?php
          foreach ($data_peralatan as $key => $pecah) {

           ?>
          <div class="col-md-3 arrival-grid simpleCart_shelfItem">
            <div class="grid-arr">
              <div  class="grid-arrival">
                <figure>
                  <a href="<?php echo base_url()."Peralatan/Detail/"; ?><?php echo $pecah->id_peralatan ?>" class="new-gri" >
                    <div class="grid-img">
                      <img src="<?php echo base_url()."foto_peralatan/"; ?><?php echo $pecah->foto_peralatan; ?>" class="img-responsive" alt="">
                    </div>
                  </a>
                </figure>
              </div>
              <div class="women">
                <h6 ><a class="judul" href="<?php echo base_url()."Peralatan/Detail/"; ?><?php echo $pecah->id_peralatan ?>"><?php echo $pecah->nama_peralatan; ?></a></h6>
                <p ><em class="item_price format-number" >Rp <?php echo number_format($pecah->harga_peralatan); ?></em></p>
                <a href="<?php echo base_url()."Peralatan/Detail/"; ?><?php echo $pecah->id_peralatan ?>" data-text="Add To Cart" class="add ">Lihat detail</a>
              </div>
            </div>
          </div>
          <?php //if (++$i == 4) break;
        } ?>
          <div class="clearfix"></div>
          <br><br><br><br>
          <h3><a class="add" href="<?php echo base_url()."Peralatan/"; ?>">Lihat Semua Peralatan</a></h3>
        </div>
      </div>
    </div>
  <!--new-arrivals-->
</div>
<!--content-->
