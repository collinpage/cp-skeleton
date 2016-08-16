<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<!-- FAVICON -->
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory(); ?>/media/images/logo/apple-touch-icon.png">
	<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory(); ?>/media/images/logo/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory(); ?>/media/images/logo/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="<?php echo get_stylesheet_directory(); ?>/media/images/logo/manifest.json">
	<link rel="mask-icon" href="<?php echo get_stylesheet_directory(); ?>/media/images/logo/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="theme-color" content="#ffffff">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>

	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div class="stickyFooter">
		<header id="masthead" class="site-header" role="banner">
			<div class="container">
				<div class="site-header-main center">
					<div class="site-branding">

						<?php if ( is_front_page() && is_home() ) : ?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php else : ?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php endif; ?>

						<div class="container-menu-lang">
							<?php wp_nav_menu( array( 'theme_location' => 'H-main-menu', 'container_class' => 'h-main-menu center' ) ); ?>
							<?php do_action('wpml_add_language_selector'); ?>
							<a href="#" class="social fb"><i class="fa fa-facebook-square fa-lg" aria-hidden="true"></i></a>
							<a href="#" class="social tw"><i class="fa fa-twitter-square fa-lg" aria-hidden="true"></i></a>
							<a href="#" class="social yt"><i class="fa fa-youtube-square fa-lg" aria-hidden="true"></i></a>
						</div>
						<i class="fa fa-bars fa-2x mobile_button" aria-hidden="true"></i>
					</div><!-- .site-branding -->
				</div><!-- .site-header-main -->

				<?php if ( get_header_image() ) : ?>
					<?php
						/**
						 * Filter the default twentysixteen custom header sizes attribute.
						 *
						 * @since Twenty Sixteen 1.0
						 *
						 * @param string $custom_header_sizes sizes attribute
						 * for Custom Header. Default '(max-width: 709px) 85vw,
						 * (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px'.
						 */
						$custom_header_sizes = apply_filters( 'twentysixteen_custom_header_sizes', '(max-width: 709px) 85vw, (max-width: 909px) 81vw, (max-width: 1362px) 8vw, 1200px' );
					?>
					<div class="header-image">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img src="<?php header_image(); ?>" srcset="<?php echo esc_attr( wp_get_attachment_image_srcset( get_custom_header()->attachment_id ) ); ?>" sizes="<?php echo esc_attr( $custom_header_sizes ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
						</a>
					</div><!-- .header-image -->
				<?php endif; // End header image check. ?>

				<?php
			if ( is_front_page() ) {	
				if ( function_exists('icl_object_id') ) {
					if( ICL_LANGUAGE_CODE == "fr") {
					 masterslider(2);
					} else {
						masterslider(3);
					}
				}
	    	}?>
			<div> <!-- .container -->
		</header><!-- .site-header -->
