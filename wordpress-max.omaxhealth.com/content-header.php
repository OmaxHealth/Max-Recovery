<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P88345F');</script>
	<!-- End Google Tag Manager -->
	
	<title><?php wp_title(''); ?></title>
	<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" />

	<?php wp_enqueue_style('styles',get_bloginfo('template_directory').'/style.css',array(),'1.0'); ?>
	<?php wp_head(); ?>
	
</head>
<body class="page-home">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P88345F" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<header>
	<div class="upper">
		<div class="container">
			<a class="logo" href="<?php bloginfo('url'); ?>"><span>Omax3</span></a>
			<!--<a class="phone" href="tel:555-555-1212"><span>555-555-1212</span></a>-->
			<a class="button" href="<?php bloginfo('url'); ?>/select-your-plan/"><span>Order Now</span></a>
		</div>
	</div>
	<div class="lower">
		<div class="container">
			<span>Save up to 50%* + FREE SHIPPING</span>
		</div>
	</div>
</header>