<!DOCTYPE html>
<html lang="en">
<head>	
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
 	
     <!-- Site Metas -->
    <title>QuickCloud</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <?php wp_head();?>


    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body <?php body_class('host_version')?> >

    <!-- LOADER -->
	<div id="preloader">
		<div class="loader-container">
			<div class="progress-br float shadow">
				<div class="progress__item"></div>
			</div>
		</div>
	</div>
	<!-- END LOADER -->	

	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.html">
					<?php the_custom_logo()?>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-host">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="<?php echo site_url('')?>">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="<?php echo site_url('/about-us')?>">About Us</a></li>
						<li class="nav-item"><a class="nav-link" href="<?php echo site_url('/features')?>">Features </a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Hosting </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="<?php echo site_url('/web-hosting')?>">Web Hosting </a>
								<a class="dropdown-item" href="<?php echo site_url('/wordpress-hosting')?>">WordPress Hosting </a>
								<a class="dropdown-item" href="<?php echo site_url('/cloud-server')?>">Cloud Server </a>
								<a class="dropdown-item" href="<?php echo site_url('/reseller-package')?>">Reseller Package </a>
								<a class="dropdown-item" href="<?php echo site_url('/dedicated-hosting')?>">Dedicated Hosting </a>
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="<?php echo site_url('/domain')?>">Domain</a></li>
						<li class="nav-item"><a class="nav-link" href="<?php echo site_url('/pricing')?>">Pricing</a></li>
						<li class="nav-item"><a class="nav-link" href="<?php echo site_url('/contact')?>">Contact</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
                        <li><a class="hover-btn-new log" href="#" data-toggle="modal" data-target="#login"><span>Customer Login</span></a></li>
                    </ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->