<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<title><?php wp_title(''); ?></title>
		
		<!-- meta tags should be handled by SEO plugin. I reccomend (http://yoast.com/wordpress/seo/) -->
		
		<!-- mobile optimized -->
		<!--<meta name="viewport" content="width=device-width">-->
		
		
		
		<!-- allow pinned sites -->
		<meta name="application-name" content="<?php bloginfo('name'); ?>" />
		
		<!-- icons & favicons (for more: http://themble.com/support/adding-icons-favicons/) -->
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />

  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  		
  		
  		<!-- custom fonts -->
  		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/Gentium-Basic-fontfacekit/stylesheet.css" media="all" />
  		<!-- unused fonts
  		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/open-sans-fontfacekit/stylesheet.css" media="all" />
  		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/Quicksand-fontfacekit/stylesheet.css" media="all" />
  		-->
  		
  		
		
		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
		

		
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/library/css/index.css" media="screen" />
		
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/library/css/superfish.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/library/css/superfish-vertical.css" media="screen" />
		
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/library/js/flexslider/flexslider.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/library/css/testimonials.css" media="screen" />
		
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/library/js/fancybox/jquery.fancybox.css" media="screen" />
		
		
		<!-- Print CSS -->
		<link rel="stylesheet" type="text/css" media="print" href="<?php echo get_template_directory_uri(); ?>/library/css/print.css" />
				
		<!-- Credits to
		Bones WP framework - http://themble.com/bones/
		-->
		
	</head>
	
	<body <?php body_class(); ?>>
		
		
		
		<header role="banner" id="banner">
			
			<div class="wrapper">
				<a href="<?php echo home_url(); ?>" rel="nofollow" id="logo">
					<span id="logo_img"><img src="<?php echo get_template_directory_uri(); ?>/images/Logo.png"></span>
					<span id="blog_name"><?php bloginfo('name'); ?></span>
					<span id="blog_info"><?php bloginfo('description'); ?></span>
					<span id="blog_url"><?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] ?></span>
				</a>
				<div id="buttonNav">
					<a href="/babys-development/" id="babies" title="learn more about babies"><span>Babies</span></a>
					<a href="/toddlers-and-preschoolers/" id="toddlers"><span>Toddlers &amp; Preschoolers</span></a>
					<a href="/school-age-children/" id="children"><span>Children</span></a>
					<a href="/women/" id="women"><span>Women</span></a>
				</div>
				<div id="topCTA">
					<h1>Questions</h1>
					<span class="for">for Catherine?</span>
					<span class="free">Free consultation</span>
					<span class="call">call 612-227-3071</span>
					<span class="or">or</span>
					<a href="/contact-form/" class="pinkButton">fill out my contact form</a>
				</div>
			</div>
			<img src="<?php echo get_template_directory_uri(); ?>/images/stroke1.jpg" id="stroke1">
		</header>	
		<div id="bannerBottomBar">
			<div class="wrapper">
				<?php bloginfo('description'); ?>
			</div>
		</div>
		<div id="mainContent">
			<div class="wrapper">
				<?php get_sidebar(); // sidebar 1 ?>
		
		