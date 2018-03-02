
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>FlyTravel</title>
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
					<h1 id="ticktravel-logo"><a href="#"><i class="icon-airplane"></i>sandi Travel</a></h1>
					<!-- START #ticktravel-menu-wrap -->
					
					<nav id="ticktravel-menu-wrap" role="navigation">
						<ul class="sf-menu" id="ticktravel-primary-menu">
							<li class="active"><a href="#">Home</a></li>
							<li><a href="login">login</a></li>
							<li><a href="action/daftar">sign up</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>

		<!-- end:header-top -->
	
		<div class="ticktravel-hero">
			<div class="ticktravel-overlay"></div>
			<div class="ticktravel-cover" data-stellar-background-ratio="0.5" style="background-image: url(images/cover_bg_1.jpg);">
				<div class="desc">
					<div class="container">
						<div class="row">
							<div class="col-sm-5 col-md-5">
								<div class="tabulation animate-box">

								  <!-- Nav tabs -->
								   <ul class="nav nav-tabs" role="tablist">
								      <li role="presentation" class="active">
								      	<a href="#flights" aria-controls="flights" role="tab" data-toggle="tab">Flights</a>
								   </ul>

								   <!-- Tab panes -->
									<div class="tab-content">
									 <div role="tabpanel" class="tab-pane active" id="flights">
									 	<form action="<?php echo base_url('Search/cari_rute'); ?>">
										<div class="row">
											<!-- <div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="from">Dari</label>
													<input name="rute_from" type="text" class="form-control" id="from-place" placeholder="Semarang, Jawa tengah"/>
												</div>
											</div> -->

											<div class="col-xxs-12 col-xs-6 mt">
												<section>
													<label for="class">Dari</label>
													<select class="cs-select cs-skin-border" name="rute_from">
														<option value="jakarta" selected>jakarta</option>
														<option value="Yogyakarta">Yogyakarta</option>
														<option value="bali">bali</option>
														<option value="makasar">Makasar</option>
														<option value="solo">Solo</option>
														<option value="palembang">palembang</option>
													</select>
												</section>
											</div>

											

											<!-- <div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="from">Ke</label>
													<input name="rute_to" type="text" class="form-control" id="to-place" placeholder="Bandung, Jawa barat"/>
												</div>
											</div> -->


											<div class="col-xxs-12 col-xs-6 mt">
												<section>
													<label for="class">Ke</label>
													<select class="cs-select cs-skin-border" name="rute_to">
														<option value="makasar" selected>Makasar</option>
														<option value="jakarta">Jakarta</option>
														<option value="Yogyakarta">Yogyakarta</option>
														<option value="bali">bali</option>
														<option value="solo">Solo</option>
														<option value="palembang">palembang</option>
													</select>
												</section>
											</div>

											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="from">pergi</label>
													<input name="depart_at" type="date" class="form-control" id="to-place">
												</div>
											</div>
										<!-- 	<div class="col-xxs-12 col-xs-12 mt alternate">
												<div class="input-field">
													<label for="date-start">Pergi</label>
													<input name="depart_at" type="date" class="form-control" id="date-start" placeholder="mm/dd/yyyy"/>
												</div>
											</div> -->
											<!-- <div class="col-xxs-12 col-xs-6 mt alternate">
												<div class="input-field">
													<label for="date-end">Pulang</label>
													<input type="text" class="form-control" id="date-end" placeholder="mm/dd/yyyy"/>
												</div>
											</div> -->
											<!-- <div class="col-sm-12 mt">
												<section>
													<label for="class">Class</label>
													<select class="cs-select cs-skin-border">
														<option value="" disabled selected>Economy</option>
														<option value="economy">Economy</option>
														<option value="first">First</option>
														<option value="business">Business</option>
													</select>
												</section>
											</div> -->
											<div class="col-xxs-12 col-xs-12 mt">
												<section>
													<label for="class">kelas</label>
													<select class="cs-select cs-skin-border" name="class">
														<option value="Ekonomi" selected>Ekonomi</option>
														<option value="first">First class</option>
													</select>
												</section>
											</div>

											<div class="col-xxs-12 col-xs-12 mt">
												<section>
													<label for="class">Jumlah penumpang</label>
													<input type="number" min="1" name="jml" value="1" class="form-control">
												</section>
											</div>
											<div class="col-xs-12">
												<input type="submit" class="btn btn-primary btn-block" value="Search Flight">
											</div>
										</div>
									</form>
									 </div>


					
									</div>

								</div>
							</div>
							<div class="desc2 animate-box">
								<div class="col-sm-7 col-sm-push-1 col-md-7 col-md-push-1">
									<p>Tickeristic travel <a href="<?php echo base_url('') ?>" class="ticktravel-site-name">Register now</a></p>
									<h2>Pesan tiket penerbangan lokal di sini</h2>
									<h3>Terbang dari Jakarta, Bali, Yogyakarta, dll.</h3>
									<!-- <p><a class="btn btn-primary btn-lg" href="#">Get Started</a></p> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
		
		<div id="ticktravel-tours" class="ticktravel-section-gray">
			<div class="container">

					<div class="col-md-4 col-sm-6 ticktravel-tours animate-box" data-animate-effect="fadeIn">
						<div href="#"><img src="<?php echo base_url('assets/images/travel.jpeg')?>" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
								<div class="desc">
								<span></span>
								<h3>Hongkong</h3>
								<span>2 nights + Flight 4*Hotel</span>
								<span class="price">$1,000</span>
								<a class="btn btn-primary" href="#">pesan sekarang <i class="icon-arrow-right22"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 ticktravel-tours animate-box" data-animate-effect="fadeIn">
						<div href="#"><img src="<?php echo base_url('assets/images/place-3.jpg')?>" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
							<div class="desc">
								<span></span>
								<h3>Hongkong</h3>
								<span>2 nights + Flight 4*Hotel</span>
								<span class="price">$1,000</span>
								<a class="btn btn-primary" href="#">Book Now <i class="icon-arrow-right22"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-12 text-center animate-box">
						<p><a class="btn btn-primary btn-outline btn-lg" href="#">See All Offers <i class="icon-arrow-right22"></i></a></p>
					</div>
				</div>
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

