<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>YSGJ - Yayasan Sunan Gunung Jati</title>
<!-- Stylesheets -->
<link href="<?= base_url(''); ?>assets/quran/css/bootstrap.css" rel="stylesheet">
<link href="<?= base_url(''); ?>assets/quran/css/style.css" rel="stylesheet">
<link href="<?= base_url(''); ?>assets/quran/css/responsive.css" rel="stylesheet">
<link href="<?= base_url(''); ?>assets/quran/css/font-awesome.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<link rel="shortcut icon" href="<?= base_url(''); ?>assets/quran/images/favicon/favicon.ico" type="image/x-icon">
<link rel="icon" href="<?= base_url(''); ?>assets/quran/images/favicon/favicon.ico" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

</head>

<body>

<div class="page-wrapper">
	
	<!-- Cursor -->
	<div class="cursor"></div>
	<div class="cursor-follower"></div>
	<!-- Cursor End -->
 	
	<!-- Preloader -->
    <div class="preloader"></div>
	<!-- End Preloader -->
	
	<!-- Main Header -->
	<header class="main-header">
		
		<!-- Header Top -->
		<div class="header-top">
			<div class="auto-container">
				<div class="inner-container">
					<div class="d-flex justify-content-between align-items-center flex-wrap">
						<div class="left-box d-flex align-items-center flex-wrap">
							<!-- Info List -->
							<ul class="header-top_list">
								<li><span class="icon fa-solid fa-envelope fa-fw"></span><?= $site['site_mail']; ?></li>
								<li><span class="icon fa-solid fa-location-dot fa-fw"></span>Yayasan Sunan Gunung Jati</li>
							</ul>
							<!-- <div>Gunung Jati</div> -->
							<div class="bismillah"><img src="<?= base_url(''); ?>assets/quran/images/icons/bismillah.png" alt="" /> </div>
						</div>
						<ul class="header-top_list-two">
							<!-- <li><span class="icon fa-regular fa-sun fa-fw"></span>Sunrise At: 5:15 AM</li> -->
							<!-- <li><span class="icon fa-solid fa-moon fa-fw"></span>Sunset At: 4:50 PM</li> -->
							<li><span class="icon fa-solid fa-phone fa-fw"></span>+<?= $site['site_wa']; ?></li>	
						</ul>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Upper -->
		<div class="header-upper">
			<div class="auto-container">
				<div class="inner-container">
					<div class="d-flex justify-content-between align-items-center flex-wrap">
						
						<div class="logo-box">
							<div class="logo"><a href="/"><img src="<?= base_url(''); ?>assets/quran/images/ysgj-logo2.png" alt="" title=""></a></div>
						</div>
						
						<div class="nav-outer">
							<!-- Main Menu -->
							<nav class="main-menu navbar-expand-sm">
								<div class="navbar-header">
									<!-- Toggle Button -->    	
									<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								
								<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
									<ul class="navigation clearfix">
										<li class="dropdown"><a href="#">Home</a>
										</li>
										<li class="dropdown"><a href="#">Tentang</a>
											<ul>
												<li><a href="/vmts">Visi Misi</a></li>
												<li><a href="/nilai2">Nilai-nilai</a></li>
												<li class="dropdown"><a href="#">Profil</a>
													<ul>
														<li><a href="/sejarah">Sejarah</a></li>
														<li><a href="/pengelola">Struktur Organisasi</a></li>
													</ul>
												</li>
											</ul>
										</li>
										<li class="dropdown"><a href="#">Program</a>
											<ul>
												<li class="dropdown"><a href="#">Pendidikan</a>
													<ul>
														<li><a href="/tk">TK</a></li>
														<li><a href="/sd">SD</a></li>
														<li><a href="/smp">SMP</a></li>
														<li><a href="/sma">SMA</a></li>
														<li><a href="#">PT</a></li>
														<!-- <li><a href="#">Pusat Talenta</a></li> -->
													</ul>
												</li>
												<li><a href="/pemberdayaan">Pemberdayaan</a></li>
												<li><a href="/sosialdakwah">Sosial dan Dakwah</a></li>
											</ul>
										</li>
										<li><a href="/kerjasama">Kerjasama</a></li>
										<li class="dropdown"><a href="#">Informasi</a>
											<ul>
												<li><a href="<?= base_url(''); ?>/post">Berita</a></li>
												<li><a href="<?= base_url(''); ?>category/artikel">Artikel</a></li>
												<li><a href="<?= base_url(''); ?>gallery">Gallery</a></li>
											</ul>
										</li>
										<li><a href="/kontak">Kontak</a></li>
									</ul>
								</div>
							</nav>
						</div>
						
						<!-- Main Menu End-->
						<div class="outer-box d-flex align-items-center flex-wrap">
							
							<!-- Search Btn -->
							<div class="search-box-btn search-box-outer"><span class="icon fa fa-search"></span></div>

							<!-- User Box -->
							<a class="user-box theme-btn" href="/login">
								<span class="fa-regular fa-user fa-fw"></span>
							</a>

							<!-- Mobile Navigation Toggler -->
							<div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
						</div>

					</div>
				</div>
			</div>
		</div>
		<!--End Header Upper-->
		
		<!-- Mobile Menu  -->
		<div class="mobile-menu">
			<div class="menu-backdrop"></div>
			<div class="close-btn"><span class="icon flaticon-close-1"></span></div>
			
			<nav class="menu-box">
				<div class="nav-logo"><a href="/"><img src="<?= base_url(''); ?>assets/quran/images/logo-ysgj.png" alt="" title=""></a></div>
				<div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
			</nav>
		</div>
		<!-- End Mobile Menu -->
	
	</header>
	<!-- End Main Header -->
	