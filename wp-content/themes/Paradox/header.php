<?php
/**
 * The theme header
 * 
 * @package bootstrap-basic
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>  <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>     <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>     <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<?php if( is_page_template( 'page-pricing.php' ) ){ ?>
			<!-- nothing -->	
		<?php } else { ?>
			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<?php } ?>

		<!-- <meta name="description" content="<?php // bloginfo('description'); ?>"> -->
		<meta name="author" content="Shalon Palmer">
		<title><?php wp_title('|', true, 'right'); ?></title>		
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">	

		<?php wp_head(); ?>
	
		<!--[if lte IE 8]>
			<meta http-equiv="REFRESH" content="0;url=http://www.browsehappy.com/">
		<![endif]-->	

		<!-- SMOOTH SCROLL -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script>
		$(function() {
		  $('a[href*=#]:not([href=#])').click(function() {
		    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		      var target = $(this.hash);
		      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		      if (target.length) {
		        $('html,body').animate({
		          scrollTop: target.offset().top
		        }, 300);
		        return false;
		      }
		    }
		  });
		});
		</script>
		<!-- End of SMOOTH SCROLL -->
	</head>
	<body <?php body_class(); ?>>

		<!-- Google Analytics -->	
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-63147224-1', 'auto');
		  ga('send', 'pageview');

		</script>		

		<!--[if lte IE 8]>
			<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->	
		
		<?php do_action('before'); ?> 
		<div class="bg-image bg-bg"></div>
		<header>				
			<section class="top-navbar top">				
				<nav class="navbar navbar-default" role="navigation">					
				<?php if( is_page_template( 'page-pricing.php' ) ){ ?>
					<div class="container">	
				<?php } else { ?>
					<div class="container-fluid">	
				<?php } ?>
						<div class="navbar-header">																	
							<button type="button" class="navbar-toggle navbar-right" data-toggle="collapse" data-target=".navbar-primary-collapse">
								<span class="sr-only"><?php _e('Toggle navigation', 'bootstrap-basic'); ?></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>									
							</button>
							<a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
								<!-- <?php // echo esc_attr(get_bloginfo('name', 'display')); ?> -->
								<img style="max-width:199px; margin-top: -9px;" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png">
							</a>					
						</div>						
						<div class="collapse navbar-collapse navbar-primary-collapse">
							<div class="btn-header">
								<a class="btn btn-sm btn-primary navbar-btn navbar-right hidden-xs hidden-sm" href="http://app.worshiponline.com/signin" style="margin-left:10px;">
									Sign In
								</a>  								
								<a class="btn btn-sm btn-primary navbar-btn navbar-right hidden-xs hidden-sm" href="/pricing">
									Start Free Trial
								</a>  													   						
							</div>
							<?php wp_nav_menu(array('theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav navbar-right', 'walker' => new BootstrapBasicMyWalkerNavMenu())); ?>
						</div><!--.navbar-collapse-->
					</div>
				</nav>				
			</section> <!-- section-navbar -->
		</header>		
			
			
		<div class="body-content">

			<!-- Mobile Landing Section -->
		<?php if( is_page_template( 'page-pricing.php' ) ){ ?>
			<section class="container mobile-landing visible-xs visible-sm">
		<?php } else { ?>
			<section class="container-fluid mobile-landing visible-xs visible-sm">
		<?php } ?>										
				<div class="row">
				    <div class="col-xs-6 call-to-action" style="padding-right:5px;">
					    <a class="btn btn-sm btn-primary btn-block" style="padding-left:5px; padding-right: 5px;" href="/pricing">				
					        Start Free Trial
					    </a>
				    </div>
					<div class="col-xs-6 call-to-action" style="padding-left:5px;">
						<a class="btn btn-sm btn-clear btn-block" href="http://app.worshiponline.com/signin">
							Sign in
						</a>	
				    </div>					    
				</div>				
			</section>			