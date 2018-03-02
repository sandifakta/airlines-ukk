
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tickeristic Travel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css')?>">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/icomoon.css')?>">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css')?>">
	<!-- Superfish -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/superfish.css')?>">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/magnific-popup.css')?>">
	<!-- Date Picker -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-datepicker.min.css')?>">
	<!-- CS Select -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/cs-select.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/cs-skin-border.css')?>">
	
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">


	<!-- Modernizr JS -->
	<script src="<?php echo base_url('assets/js/modernizr-2.6.2.min.js')?>"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		<div id="ticktravel-wrapper">
		<div id="ticktravel-page">

		<header id="ticktravel-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-ticktravel-nav-toggle ticktravel-nav-toggle dark"><i></i></a>
					<h1 id="ticktravel-logo"><a href="#"><i class="icon-airplane"></i>Tickeristic Travel</a></h1>
					<!-- START #ticktravel-menu-wrap -->
					
					<nav id="ticktravel-menu-wrap" role="navigation">
						<ul class="sf-menu" id="ticktravel-primary-menu">
							<li class="active"><a href="<?php echo base_url('') ?>">Home</a></li>
							<li><a href="#">Flights</a></li>
							<li><a href="#">Contact</a></li>
							<li><a href="login">login</a></li>
							<li><a href="action/daftar">sign up</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>

		<!-- end:header-top -->
	
		<div class="ticktravel">
			<div class="container">
				<div  class="col-md-12 col-sm-12" style="padding-top: 30px;">
					<h3>Penumpang 1</h3>
				</div><!-- 
				<div class="col-md-2 col-sm-6" >pesawat </div>
				<div  class="col-md-10 col-sm-6">Citilink QG-110</div>

				<div  class="col-md-2 col-sm-6">dari </div>
				<div  class="col-md-10 col-sm-6">Jakarta </div>

				<div class="col-md-2 col-sm-6" >ke </div>
				<div  class="col-md-10 col-sm-6">Yogyakarta</div>

				<div  class="col-md-2 col-sm-6">class </div>
				<div  class="col-md-10 col-sm-6">ekonomi</div>				

				<div  class="col-md-2 col-sm-6">depart at </div>
				<div  class="col-md-10 col-sm-6">27 February 2018</div>

				<div class="col-md-2 col-sm-6" >total penumpang </div>
				<div  class="col-md-10 col-sm-6">2</div>

				<div class="col-md-2 col-sm-6" >total harga </div>
				<div  class="col-md-10 col-sm-6" style="padding-bottom: 20px">120.000</div>
				 -->
					<div class="row">
						 <form class="col-md-6" action="<?php echo base_url('action/tambah_seat') ?>" method="post">
						  <div class="form-group">
						  	
						  	<?php
						  	foreach ($seat as $s) 
						  	{
						  		for ($i=1; $i < $s->seat_qty; $i++) { ?>
						  			<div class="col-md-3">
						  				<input type="checkbox" name="seat[]" value="<?php echo $i; ?>" <?php foreach($filter as $f) { if($i == $f->seat_code){ echo "disabled"; } } ?>><?php echo $i; ?>
						  			</div>
						  		<?php } ?>
						  	<?php }?>
				  	<div class="row">
				        <div class="col-md-4">
				        	<br>
				
				          <button type="submit" class="btn btn-primary btn-block btn-flat">lanjutkan pembayaran</button>
				        </div>	
				    </div>
						  
						 <!--  <a href="<?php echo base_url('') ?>" class="btn btn-primary">lanjutkan pembayaran</a> -->
						 
						</form>
					</div>
				</tr>
			</div>
		</div>
		



		<!-- ticktravel-blog-section -->
		<div id="ticktravel-testimonial" style="background-image:url(images/img_bg_1.jpg);">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center ticktravel-heading">
					<h2>Happy Clients</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="box-testimony animate-box">
						<blockquote>
							<span class="quote"><span><i class="icon-quotes-right"></i></span></span>
							<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
						</blockquote>
						<p class="author">John Doe, CEO <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a> <span class="subtext">Creative Director</span></p>
					</div>
					
				</div>
				<div class="col-md-4">
					<div class="box-testimony animate-box">
						<blockquote>
							<span class="quote"><span><i class="icon-quotes-right"></i></span></span>
							<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.&rdquo;</p>
						</blockquote>
						<p class="author">John Doe, CEO <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a> <span class="subtext">Creative Director</span></p>
					</div>
					
					
				</div>
				<div class="col-md-4">
					<div class="box-testimony animate-box">
						<blockquote>
							<span class="quote"><span><i class="icon-quotes-right"></i></span></span>
							<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
						</blockquote>
						<p class="author">John Doe, Founder <a href="#">FREEHTML5.co</a> <span class="subtext">Creative Director</span></p>
					</div>
					
				</div>
			</div>
		</div>
	</div>
		<footer>
			<div id="footer">
				<div class="container">
					<div class="row row-bottom-padded-md">
						<div class="col-md-2 col-sm-2 col-xs-12 ticktravel-footer-link">
							<h3>About Travel</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12 ticktravel-footer-link">
							<h3>Top Flights Routes</h3>
							<ul>
								<li><a href="#">Manila flights</a></li>
								<li><a href="#">Dubai flights</a></li>
								<li><a href="#">Bangkok flights</a></li>
								<li><a href="#">Tokyo Flight</a></li>
								<li><a href="#">New York Flights</a></li>
							</ul>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12 ticktravel-footer-link">
							<h3>Top Hotels</h3>
							<ul>
								<li><a href="#">Boracay Hotel</a></li>
								<li><a href="#">Dubai Hotel</a></li>
								<li><a href="#">Singapore Hotel</a></li>
								<li><a href="#">Manila Hotel</a></li>
							</ul>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12 ticktravel-footer-link">
							<h3>Interest</h3>
							<ul>
								<li><a href="#">Beaches</a></li>
								<li><a href="#">Family Travel</a></li>
								<li><a href="#">Budget Travel</a></li>
								<li><a href="#">Food &amp; Drink</a></li>
								<li><a href="#">Honeymoon and Romance</a></li>
							</ul>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12 ticktravel-footer-link">
							<h3>Best Places</h3>
							<ul>
								<li><a href="#">Boracay Beach</a></li>
								<li><a href="#">Dubai</a></li>
								<li><a href="#">Singapore</a></li>
								<li><a href="#">Hongkong</a></li>
							</ul>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12 ticktravel-footer-link">
							<h3>Affordable</h3>
							<ul>
								<li><a href="#">Food &amp; Drink</a></li>
								<li><a href="#">Fare Flights</a></li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p class="ticktravel-social-icons">
								<a href="#"><i class="icon-twitter2"></i></a>
								<a href="#"><i class="icon-facebook2"></i></a>
								<a href="#"><i class="icon-instagram"></i></a>
								<a href="#"><i class="icon-dribbble2"></i></a>
								<a href="#"><i class="icon-youtube"></i></a>
							</p>
							<p>Copyright 2016 Free Html5 <a href="#">Module</a>. All Rights Reserved. <br>Made with <i class="icon-heart3"></i> by <a href="http://freehtml5.co/" target="_blank">Freehtml5.co</a> / Demo Images: <a href="https://unsplash.com/" target="_blank">Unsplash</a></p>
						</div>
					</div>
				</div>
			</div>
		</footer>

	

	</div>
	<!-- END ticktravel-page -->

	</div>
	<!-- END ticktravel-wrapper -->

	<!-- jQuery -->


	<script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo base_url('assets/js/jquery.easing.1.3.js')?>"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
	<!-- Waypoints -->
	<script src="<?php echo base_url('assets/js/jquery.waypoints.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/sticky.js')?>"></script>

	<!-- Stellar -->
	<script src="<?php echo base_url('assets/js/jquery.stellar.min.js')?>"></script>
	<!-- Superfish -->
	<script src="<?php echo base_url('assets/js/hoverIntent.js')?>"></script>
	<script src="<?php echo base_url('assets/js/superfish.js')?>"></script>
	<!-- Magnific Popup -->
	<script src="<?php echo base_url('assets/js/jquery.magnific-popup.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/js/magnific-popup-options.js')?>"></script>
	<!-- Date Picker -->
	<script src="<?php echo base_url('assets/js/bootstrap-datepicker.min.js')?>"></script>
	<!-- CS Select -->
	<script src="<?php echo base_url('assets/js/classie.js')?>"></script>
	<script src="<?php echo base_url('assets/js/selectFx.js')?>"></script>
	
	<!-- Main JS -->
	<script src="<?php echo base_url('assets/js/main.js')?>"></script>

	</body>
</html>

<script type="text/javascript">
  	$(document).ready(function() {
        $("input[name='seat[]']").change(function(){
        	var maxSelect = <?php echo $jmlP; ?>;
        	var cnt = $("input[name='seat[]']:checked").length;
        	if (cnt > maxSelect) 
        	{
        		$(this).prop("checked", false);
        		alert("Tidak bisa memilih lebih dari " +maxSelect+ " kursi!");
        	}
        })
    });
  </script>

