<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
<!--[if lte IE 9]>
<style>
.hline .site-title {
  width: 610px;
  height: 70px;
  background:url(<?php echo get_template_directory_uri(); ?>/img/logoie.png) no-repeat  right top;
  }
.hline h1 * {
display:none;
}
.site,
.container{
width:965px;
margin:0 auto;
}
.col-md-1 {
  width: 12.5%;
  margin-bottom:20px;
}
</style>
<![endif]-->
<!--[if lte IE 8]>
<style>
.shiftnav,
.shiftnav-toggle-edge-left{
display:none;
}
</style>
<![endif]-->
</head>

<body <?php body_class(); ?>>
<div class="hcont">
  <div class="hline">
    <div  class="site">
      <div class="mainlogo-cont">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="mainlogo" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"/></a>
      <h1 class="site-title"><object type="image/svg+xml" data="<?php echo get_template_directory_uri(); ?>/img/logo.svg"><?php bloginfo( 'name' ); ?></object> </h1>
      </div>
    </div>     
  </div>
   <div class="mline">
      <div  class="site">
	  <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
	  <div class="langcontainer"> <?php do_action('icl_language_selector'); ?> </div>
      </div>
   </div>
</div>  
 
<div id="page" class="hfeed "> 
<?php if ( is_front_page() ) {
wd_slider(2);
wd_slider(3);
} ?>  
	<div id="main" class="wrapper">