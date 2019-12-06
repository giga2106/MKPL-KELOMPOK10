

<div class="banner1">
  <div class="container">
    <h3><a class="hov" href="<?php echo base_url().""; ?>">Home</a> / <span>Peralatan</span></h3>
  </div>
</div>
<!--content-->
  <div class="content">
    <div class="products-agileinfo">
        <h2 class="tittle">Women's Wear</h2>
      <div class="container">
        <div class="product-agileinfo-grids w3l">
          <div class="col-md-3 product-agileinfo-grid">
            <div class="categories">
              <h3 >Kategori</h3>
              <ul class="pad">
                <li>
                  <a href="<?php echo base_url()."Peralatan/"; ?>"><span></span>Semua Kategori</a>
                <li/>
                <?php foreach ($data_kategori as $key => $value) { ?>
                <li><a class="hov" href="<?php echo base_url()."Peralatan/Kategori/"; ?><?php echo $value->id_kategori ?>"><?php echo $value->nama_kategori ?></a></li>
              <?php } ?>
              </ul>
            </div>
            <div class="brand-w3l">
              <h3>Merek</h3>
              <ul>
              <?php foreach ($data_merek as $key => $value) { ?>
                <li><a class="hov"href="<?php echo base_url()."Peralatan/Merek/"; ?><?php echo $value->id_merek ?>"><?php echo $value->nama_merek?></a></li>
              <?php } ?>
              </ul>
            </div>
            <div class="cat-img">
              <!-- iklan -->
              <!-- <img class="img-responsive " src="<?php echo base_url()."assets/"; ?>mainpage/images/45.jpg" alt=""> -->
            </div>
          </div>
          <div class="col-md-9 product-agileinfon-grid1 w3l">
            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
              <ul id="myTab" class="nav1 nav1-tabs left-tab" role="tablist">
              <div id="myTabContent" class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                  <div class="product-tab">
                    <?php  if (count($data_peralatan)) { ?>
                      <?php foreach ($data_peralatan as $key => $pecah): ?>
                      <div class="col-md-4 prod2 product-tab-grid simpleCart_shelfItem">
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
                          <br>
                          <div class="clearfix"></div>
                        </div>
                      </div>
                      <?php endforeach; ?>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix"> </div>
        </div>
      </div>
    </div>
  </div>
<!--content-->
