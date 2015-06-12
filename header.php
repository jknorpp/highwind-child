<?php
/**
 * The header template.
 * @package highwind
 * @since 1.0
 */
?>
<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?><?php highwind_html_before(); ?><!doctype html><!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html <?php language_attributes(); ?> class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html <?php language_attributes(); ?> class="no-js"> <!--<![endif]-->
<head>

	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	
<!-- font for varification of efficacy of font setting in css -->	
<!--	<link href='http://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'> -->
	<link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:300italic,300,400&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

	<?php highwind_head_top(); ?>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />

	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<!-- Gets page title from entry in WP admin panel (Settings/General).
	Disabled for fixed page title (see below).
	<title><?php wp_title( '/', true, 'right' ); ?></title>-->

	<title>Shop Name</title>

	<!--  Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php highwind_head_bottom(); ?>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php highwind_body_top(); ?>


<div class="outer-wrap" id="top">

<div class="header-bg hidden" style="background-image:url(<?php echo header_image(); ?>);">
	
	<div class="inner-wrap translucent img-header-logo">
		
		<div class="right left"><img class="fixed-ratio-resize" src="<?php bloginfo('stylesheet_directory'); ?>/images/AdCo_Logo_250px.png" class="img-responsive" alt="Shop-Logo"></div>
	
	</div>
</div>

	<div class="inner-wrap">

	<?php highwind_header_before(); ?>

	<header class="header content-wrapper" role="banner">

		<!-- <div class="img-header-logo img-header-container">
			
		</div> -->
		<?php highwind_header(); ?>  <!-- generates navbar and the possibility to show page title and subtitle -->

	</header>

	<div class="content-wrapper content-wrapper-margin">

	<?php highwind_header_after(); ?>