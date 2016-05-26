<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <!--<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">-->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/vendor.min.css">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

	 <header>

		<div class="wrapper">

		  <a href="<?php echo home_url(); ?>" id="logo">
			<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Professional Webcare"/>
			<span>Professional Webcare</span>
		  </a>

		   <nav id="nav">
			 <a href="javascript:" class="nav-toggle"><i class="fa fa-bars" aria-hidden="true"></i></a>
			 <ul class="nav-list">
			   <li><a href="#section01">About us</a></li>
			   <li><a href="#section02">Services</a></li>
			   <li><a href="#section03">FAQ</a></li>
			   <li><a href="#section04">Contact Us</a></li>
			 </ul>
		   </nav>

		</div>

	  </header>


