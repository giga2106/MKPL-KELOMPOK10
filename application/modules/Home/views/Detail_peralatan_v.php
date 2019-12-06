<script>
$(document).ready(function(){

var quantitiy=0;
   $('.quantity-right-plus').click(function(e){

        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());

        // If is not undefined

            $('#quantity').val(quantity + 1);


            // Increment

    });

     $('.quantity-left-minus').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());

        // If is not undefined

            // Increment
            if(quantity>0){
            $('#quantity').val(quantity - 1);
            }
    });

});
</script>
</style>
<div class="banner1">
  <div class="container">
    <h3><a class="hov" href="<?php echo base_url().""; ?>">Home</a> / <a class="hov"href="<?php echo base_url()."Peralatan/"; ?>">Peralatan</a>/ <span>Detail</span></h3>
  </div>
</div>
<?php if (count($data_detail)){ ?>
  <?php foreach ($data_detail as $key => $pecah): ?>
<!-- <form class="hidden" action="index.html" method="post"> -->
  <div class="container md-5">
    <div class="modal-body">
      <div class="news-gr">
        <div class="col-md-5 new-grid"><br><br><br>
        <img src="<?php echo base_url()."foto_peralatan/"; ?><?php echo $pecah->foto_peralatan; ?>" class="img-responsive" alt="">
        </div>
          <div class="col-md-6 new-grid">
            <h1><?php echo $pecah->nama_peralatan ?></h5>
              <div class="tab-pane tab-content active">
                <h6>Deskripsi :</h6>
                <span><?php echo nl2br($pecah->deskripsi_peralatan); ?></span>
              </div>
          <div class="women">
            <!-- <span class="size">XL / XXL / S </span> -->
            <h6>Stock : <?php echo $pecah->stock_peralatan; ?></h6>
            <!-- <input type="text" class="form-control hidden" name="nama_peralatan"> -->
            </form>
            <h6>Berat : <?php echo $pecah->berat_peralatan; ?> gram</h6>
            <h6 class="format-number">Harga : Rp <?php echo number_format($pecah->harga_peralatan); ?></h6>
            <!-- <p ><em class="item_price"> $70.00 </em></p> -->
          <?php endforeach; ?>
          <?php } ?>
					<!-- <div class="color-quality">
            <div class="color-quality-left"> -->
              <!-- <h6>Quality :</h6> -->
              <!-- <div class="quantity">
                <div class="quantity-select">
                  <div class="entry value-minus1">&nbsp;</div>
                  <div class="entry value1"><span>1</span></div>
                  <div class="entry value-plus1 active">&nbsp;</div>
                </div>
              </div>
            </div>
            <div class="clearfix"> </div>
          </div> -->



            <div class="">
              <a href="<?php echo base_url()."Keranjang/add/"; ?><?php echo $pecah->id_peralatan ?>" data-text="Add To Cart" class="add ">Masukan ke keranjang</a>
               <!-- <button class="btn btn-danger my-cart-btn my-cart-b" data-id="3" data-name="Kabuli Chana" data-summary="summary 3" data-price="2.00" data-quantity="1" data-image="images/of2.png">Add to Cart</button> -->
            </div>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
      <br><br>
    </div>
  </div>






    <div class="new-arrivals-w3agile">
      <div class="container">
        <h3 class="tittle1">Peralatan Yang Mungkin Anda Cari</h3>
        <div class="arrivals-grids">
          <?php
          foreach ($data_random as $key => $pecah) {

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
        </div>
      </div>
    </div>

    <!--quantity-->
    <script>
    $('.value-plus1').on('click', function(){
      var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)+1;
      divUpd.text(newVal);
    });

    $('.value-minus1').on('click', function(){
      var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)-1;
      if(newVal>=1) divUpd.text(newVal);
    });
    </script>
    <!--quantity-->
