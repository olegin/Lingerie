<?php
/**
 * Template Name: imap
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

 ?>
<!DOCTYPE html>
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
<script src="<?php echo get_template_directory_uri(); ?>/js/imagemapster.js" type="text/javascript"></script>
<script type="text/javascript">
jQuery(document).ready(function(){
 jQuery('img').mapster({
    fillOpacity: 0.5,
    render_highlight: {
        fillColor: '666666',
        stroke: false
        
    },
    render_select: {
        fillColor: '666666',
        stroke: false
        
        
    },
    fadeInterval: 50,
    mapKey: 'class',
    areas: [    
    {
        key: 'st01',
        selected: true
    },
    {
        key: 'st02',
        selected: true
    },
    {
        key: 'st03',
        selected: true
    },
    {
        key: 'st04',
        selected: true
    },
       {
        key: 'st05',
        selected: true
    },
    
	{
        key: 'st06',
        selected: true
    },
    {
        key: 'st07',
        selected: true
    }, 
    {
        key: 'st08',
        selected: true
    }, 
    {
        key: 'st09',
        selected: true
    }, 
    {
        key: 'st10',
        selected: true
    }, 
    {
        key: 'st11',
        selected: true
    },
       {
        key: 'st12',
        selected: true
    },
       {
        key: 'st13',
        selected: true
    },
       {
        key: 'st14',
        selected: true
    },
    {
        key: 'st15',
        selected: true
    },
    {
        key: 'st16',
        selected: true
    },
    {
        key: 'st17',
        selected: true
    },
    {
        key: 'st18',
        selected: true
    },
       {
        key: 'st19',
        selected: true
    },
    {
        key: 'st20',
        selected: true
    },    
    {
        key: 'st22',
        selected: true
    },
    {
        key: 'st23',
        selected: true
    },
    {
        key: 'st24',
        selected: true
    },
    {
        key: 'st26',
        selected: true
    },
    {
        key: 'st27',
        selected: true
    },
    {
        key: 'st28',
        selected: true
    },
    {
        key: 'st29',
        selected: true
    },
    {
        key: 'st30',
        selected: true
    },
    {
        key: 'st31',
        selected: true
    },
{
        key: 'st32',
        selected: true
    },
       {
        key: 'st33',
        selected: true
    },
    {
        key: 'st34',
        selected: true
    },
    {
        key: 'st35',
        selected: true
    },
    {
        key: 'st36',
        selected: true
    },
    {
        key: 'st37',
        selected: true
    },
    {
        key: 'st38',
        selected: true
    },
     {
        key: 'st39',
        selected: true
    },
    {
        key: 'st40',
        selected: true
    },
    {
        key: 'st41',
        selected: true
    },
    {
        key: 'st42',
        selected: true
    },
    {
        key: 'st43',
        selected: true
    },
    
    {
        key: 'st46',
        selected: true
    },
    {
       key: 'st50',
       selected: true
    }]
});
    });


</script>
<style type="text/css">
.st01, .st02,.st03,.st04,.st05,.st06,.st07,
.st08,.st09,.st10,
.st11,.st12,.st13,.st14,.st15,.st16,
.st17,.st18,.st19,.st22, .st23, .st24, .st26,.st27,.st28,.st29,
.st30,.st31,.st32,.st33,
.st34,.st35,.st36,.st37,.st38,.st39,.st40,
.st41,.st42,.st43,.st46,
.st50{
cursor: not-allowed;
}
</style>

</head>

<body <?php body_class(); ?>>
<div class="hcont cleanprint-exclude">
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

<div id="page" class="hfeed jspdf ">  
	<div id="main" class="wrapper">

	<div id="primary" class="site-content ">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>