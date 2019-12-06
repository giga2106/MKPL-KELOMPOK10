<!--
Au<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>POPO | Toko Penjualan Online Peralatan Olahraga</title>
<!--css-->
<style media="screen">
.add:link, a:visited {
  background-color: #1A7CEC;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}
.kategori{
  background-color: #0D59AF;
}
.add:hover, a:active {
  color: white;
  background-color: #F19E1F;
}
.hov:hover{
  color: #0D59AF;
}
.judul:hover, a:active{
	color: #F19E1F;
}
.textkuning:hover{
  color: #F19E1F;
}
</style>
<link href="<?php echo base_url()."assets/"; ?>mainpage/css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="<?php echo base_url()."assets/"; ?>mainpage/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url()."assets/"; ?>mainpage/css/font-awesome.css" rel="stylesheet">
<!--css-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="New Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="<?php echo base_url()."assets/"; ?>mainpage/js/jquery.min.js"></script>
<link href='//fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!--search jQuery-->
	<script src="<?php echo base_url()."assets/"; ?>mainpage/js/main.js"></script>
<!--search jQuery-->
<script src="<?php echo base_url()."assets/"; ?>mainpage/js/responsiveslides.min.js"></script>
 <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
 </script>
 <!--mycart-->
<script type="text/javascript" src="<?php echo base_url()."assets/"; ?>mainpage/js/bootstrap-3.1.1.min.js"></script>
 <!-- cart -->
<script src="<?php echo base_url()."assets/"; ?>mainpage/js/simpleCart.min.js"></script>
<!-- cart -->
  <!--start-rate-->
<script src="<?php echo base_url()."assets/"; ?>mainpage/js/jstarbox.js"></script>
	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>mainpage/css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
		<script type="text/javascript">
			jQuery(function() {
			jQuery('.starbox').each(function() {
				var starbox = jQuery(this);
					starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: starbox.hasClass('ghosting'),
					autoUpdateAverage: starbox.hasClass('autoupdate'),
					buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
					stars: starbox.attr('data-star-count') || 5
					}).bind('starbox-value-changed', function(event, value) {
					if(starbox.hasClass('random')) {
					var val = Math.random();
					starbox.next().text(' '+val);
					return val;
					}
				})
			});
		});
		</script>
<!--//End-rate-->
</head>
<body>
	<!--header-->
		<div class="header">
			<div class="header-top">
				<div class="container">
					 <div class="top-left">
						<!-- <a href="<?php echo base_url()."assets/"; ?>mainpage/#"> <i class="glyphicon glyphicon-phone" aria-hidden="true"></i> +0123-456-789</a> -->
					</div>
					<div  class="top-right">
					<ul>
            <?php $this->load->library('session');
						if ($nav_cek != 0) {?>
							<li><a href="<?php echo base_url()."Login/"; ?>">Login</a></li>
							<li><a href="<?php echo base_url()."Register/"; ?>">Registrasi </a></li>
						<?php } else {?>
							<!-- <li><a class="textkuning" href="<?php echo base_url()."Home/Profil"; ?>"> <?php echo $this->session->userdata('nama_pelanggan'); ?> <b class="caret"></b></a></li> -->
              <li class="dropdown">
                <a href="" class="dropdown-toggle" data-toggle="dropdown"><?php echo $this->session->userdata('nama_pelanggan'); ?> <b class="caret"></b></a>
                <ul class="dropdown-menu">
                      <ul class=" multi-column-dropdown">
                        <li><a class="textkuning" href="<?php echo base_url()."Ubah-Profil/"; ?><?php echo $this->session->userdata('id_pelanggan'); ?>"><span>Ubah Profil</span></a></li>
                        <li><a class="textkuning" href="<?php echo base_url()."Ubah-Password/"; ?><?php echo $this->session->userdata('id_pelanggan'); ?>">Ubah Password</a></li>
                        <li><a class="textkuning" href="<?php echo base_url()."Transaksi/";?>">Lihat Transaksi</a></li>
                      </ul>
                    <div class="clearfix"></div>
                </ul>
              </li>
              <!-- akhir dropdown -->
              <li><a class="textkuning" href="<?php echo base_url()."Home/Logout_pengguna"; ?>"> Logout</a></li>
					<?php } ?>
					</ul>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="heder-bottom">
				<div class="container">
					<div class="logo-nav">
						<div class="logo-nav-left">
							<h1><a href="<?php echo base_url().""; ?>">POPO<span>olahraga</span></a></h1>
						</div>
						<div class="logo-nav-left1">
							<nav class="navbar navbar-default">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header nav_2">
								<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
								<ul class="nav navbar-nav">
									<li class="active"><a href="<?php echo base_url().""; ?>" class="act">Home</a></li>
									<!-- Mega Menu -->
									<li class="dropdown">
										<a href="" class="dropdown-toggle" data-toggle="dropdown">Kategori<b class="caret"></b></a>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="col-sm-3  multi-gd-img">
													<ul class="multi-column-dropdown">
														<h6>Fulsal</h6>
														<li><a class="textkuning" href="<?php echo base_url()."Peralatan/Kategori/2"; ?>">Sepatu Futsal</a></li>
														<li><a class="textkuning" href="<?php echo base_url()."Peralatan/Kategori/4"; ?>">Jersey Bola</a></li>
														<li><a class="textkuning" href="<?php echo base_url()."Peralatan/Kategori/8"; ?>">Tas Futsal</a></li>
														<li><a class="textkuning" href="<?php echo base_url()."Peralatan"; ?>">Lain-lain</a></li>
													</ul>
												</div>
												<div class="col-sm-3  multi-gd-img">
														<a href="<?php echo base_url()."assets/"; ?>mainpage/products.html"><img src="<?php echo base_url()."assets/"; ?>mainpage/images/sepatu.jpg" alt="center"/></a>
												</div>
												<div class="col-sm-3  multi-gd-img">
														<a href="<?php echo base_url()."assets/"; ?>mainpage/products.html"><img src="<?php echo base_url()."assets/"; ?>mainpage/images/jersey.jpg" alt=" "/></a>
												</div>
												<div class="col-sm-3  multi-gd-img">
														<a href="<?php echo base_url()."assets/"; ?>mainpage/products.html"><img src="<?php echo base_url()."assets/"; ?>mainpage/images/tas.jpg" alt=" "/></a>
												</div>
												<div class="clearfix"></div>
											</div>
										</ul>
									</li>
									<li class="dropdown">
										<a href="" class="dropdown-toggle" data-toggle="dropdown">Brand <b class="caret"></b></a>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="col-sm-3  multi-gd-img">
													<ul class="multi-column-dropdown">
                            <h6>Brand</h6>
														<li><a class="textkuning" href="<?php echo base_url()."Peralatan/Merek/2"; ?>">Adidas</a></li>
														<li><a class="textkuning" href="<?php echo base_url()."Peralatan/Merek/4"; ?>">Puma</a></li>
														<li><a class="textkuning" href="<?php echo base_url()."Peralatan/Merek/1"; ?>">Nike</a></li>
														<li><a class="textkuning" href="<?php echo base_url()."Peralatan"; ?>">lain-lain</a></li>
													</ul>
												</div>
												<div class="col-sm-3  multi-gd-img">
														<a href="<?php echo base_url()."assets/"; ?>mainpage/products1.html"><img src="<?php echo base_url()."assets/"; ?>mainpage/images/adidas.jpg" alt=" "/></a>
												</div>
												<div class="col-sm-3  multi-gd-img">
														<a href="<?php echo base_url()."assets/"; ?>mainpage/products1.html"><img src="<?php echo base_url()."assets/"; ?>mainpage/images/puma.jpg" alt=" "/></a>
												</div>
												<div class="col-sm-3  multi-gd-img">
														<a href="<?php echo base_url()."assets/"; ?>mainpage/products1.html"><img src="<?php echo base_url()."assets/"; ?>mainpage/images/nike.jpg" alt=" "/></a>
												</div>
												<div class="clearfix"></div>
											</div>
										</ul>
									</li>
									<!-- <li><a href="<?php echo base_url()."assets/"; ?>mainpage/codes.html">Short Codes</a></li> -->
									<!-- <li><a href="<?php echo base_url()."assets/"; ?>mainpage/mail.html">Mail Us</a></li> -->
								</ul>
							</div>
							</nav>
						</div>
						<div class="logo-nav-right">
							<ul class="cd-header-buttons">
								<li><a class="cd-search-trigger" href="<?php echo base_url()."assets/"; ?>mainpage/#cd-search"> <span></span></a></li>
							</ul> <!-- cd-header-buttons -->
							<div id="cd-search" class="cd-search">
								<?php //echo form_open('Pencarian/') ?>
								<form action="<?php echo base_url()."Pencarian" ?>" method="post">
									<input type="search" name="keyword" placeholder="Pencarian...">
								</form>
								<?php //echo form_close() ?>
							</div>
						</div>
						<div class="header-right2">
							<div class="cart box_1">
								<a href="<?php echo base_url()."Keranjang"; ?>">
									<h3>
                  <div class="total">
										<span><?php echo $cek_harga; ?></span>
                  </div>
										<img src="<?php echo base_url()."assets/"; ?>mainpage/images/bag.png" alt="" />
									</h3>
								</a>
                  <p><a href="<?php echo base_url()."Keranjang"; ?>" class="simpleCart_empty"><?php echo $cek_beli ?></a></p>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
		<!--header-->


  <?php $this->load->view($content); ?>




		<!---footer--->
					<div class="footer-w3l">
						<div class="container">
							<div class="footer-grids">
								<div class="col-md-3 footer-grid">
									<h4>Tentang Kami </h4>
									<p>Merupakan sebuah website yang menjual barang-barang perlengkapan untuk menunjang aktifitas olahraga</p>
									<div class="social-icon">
										<a href="<?php echo base_url()."assets/"; ?>mainpage/#"><i class="icon"></i></a>
										<a href="<?php echo base_url()."assets/"; ?>mainpage/#"><i class="icon1"></i></a>
										<a href="<?php echo base_url()."assets/"; ?>mainpage/#"><i class="icon2"></i></a>
										<a href="<?php echo base_url()."assets/"; ?>mainpage/#"><i class="icon3"></i></a>
									</div>
								</div>
								<div class="col-md-3 footer-grid">
									<h4>My Account</h4>
									<ul>
										<li><a href="<?php echo base_url()."assets/"; ?>mainpage/checkout.html">Checkout</a></li>
										<li><a href="<?php echo base_url()."Login/logout"; ?>">Login</a></li>
										<li><a href="<?php echo base_url()."assets/"; ?>mainpage/registered.html"> Register </a></li>
									</ul>
								</div>
								<div class="col-md-3 footer-grid">
									<h4>Information</h4>
									<ul>
										<li><a href="<?php echo base_url()."assets/"; ?>mainpage/index.html">Home</a></li>
										<li><a href="<?php echo base_url()."assets/"; ?>mainpage/products.html">Produk</a></li>
										<!-- <li><a href="<?php echo base_url()."assets/"; ?>mainpage/codes.html">Short Codes</a></li> -->
										<!-- <li><a href="<?php echo base_url()."assets/"; ?>mainpage/mail.html"></a></li> -->
										<!-- <li><a href="<?php echo base_url()."assets/"; ?>mainpage/products1.html">products1</a></li> -->
									</ul>
								</div>
								<div class="col-md-3 footer-grid foot">
									<h4>Kontak</h4>
									<ul>
										<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i><a href="<?php echo base_url()."assets/"; ?>mainpage/#">JL. Malang, Kota Malang</a></li>
										<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i><a href="<?php echo base_url()."assets/"; ?>mainpage/#">0855555555555</a></li>
										<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="<?php echo base_url()."assets/"; ?>mainpage/mailto:example@mail.com"> popo@gmail.com</a></li>

									</ul>
								</div>
							<div class="clearfix"> </div>
							</div>

						</div>
					</div>
					<!---footer--->
					<!--copy-->
					<div class="copy-section">
						<div class="container">
							<div class="copy-left">
								<p>&copy; 2018 POPO . All rights reserved | Design by <a href="<?php echo base_url()."assets/"; ?>mainpage/http://w3layouts.com">Kelompok 4 RPL</a></p>
							</div>
							<div class="copy-right">
								<img src="<?php echo base_url()."assets/"; ?>mainpage/images/card.png" alt=""/>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				<!--copy-->

</body>
</html>
