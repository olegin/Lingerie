<?php
/**
 * Template Name: N Front

 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;
 ?>
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
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<link rel='stylesheet' id='twentytwelve-fonts-css'  href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700&#038;subset=latin,latin-ext' type='text/css' media='all' />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
<link rel='stylesheet' id='twentytwelve-style-css'  href='http://lingerie-show-forum.ru/wp-content/themes/lingerieshow/style.css' type='text/css' media='all' />
<?php if( $detect->isMobile() ) { ?>
<?php wp_head(); ?>


<?php } else { } ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!--[if IE]>
<style>
.hline .site-title {
  width: 610px;
  height: 70px;
  background:url(<?php echo get_template_directory_uri(); ?>/img/logoie.png) no-repeat  right top;
  }
.hline h1 * {
display:none;
}
</style>
<![endif]-->
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
 
}
#carousel-logo-v1{
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

<script>
var formlang = 1;
</script>
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
<?php if( $detect->isMobile() ) { 
echo '<div class="sq-mov-sl">';
wd_slider(3);
echo '</div>';
?>
<div id="carousel-min-heightm" class="carousel slide" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="/wp-content/uploads/slider-st/stand02.jpg" alt="">     
    </div>
    <div class="item">
      <img src="/wp-content/uploads/slider-st/stand03.jpg" alt="">      
    </div>
    <div class="item">
      <img src="/wp-content/uploads/slider-st/stand05.jpg" alt="">      
    </div>
    <div class="item">
      <img src="/wp-content/uploads/slider-st/stand06.jpg" alt="">      
    </div>
    <div class="item">
      <img src="/wp-content/uploads/slider-st/stand26.jpg" alt="">      
    </div>
    <div class="item">
      <img src="/wp-content/uploads/slider-st/stand27.jpg" alt="">      
    </div>
    <div class="item">
      <img src="/wp-content/uploads/slider-st/stand28.jpg" alt="">      
    </div>
    <div class="item">
      <img src="/wp-content/uploads/slider-st/stand29.jpg" alt="">      
    </div>
    <div class="item">
      <img src="/wp-content/uploads/slider-st/stand30.jpg" alt="">      
    </div>
    <div class="item">
      <img src="/wp-content/uploads/slider-st/stand38.jpg" alt="">      
    </div>
    <div class="item">
      <img src="/wp-content/uploads/slider-st/stand36-37.jpg" alt="">      
    </div>
    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-min-height" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-min-height" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 <div id="carousel-logo-v1m" class="carousel slide carousel-fade no-background inner-b-100" data-ride="carousel">
  <!-- Indicators -->
  <div class="container">      
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <div class="row">
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.latanya.ru/shop/brand/Sis/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo/logo_01.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://primaveramoda.com/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo/logo_02.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://onlyvips.ru/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo/logo_03.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.lowry.ru/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo/logo_04.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.latanya.ru/shop/brand/TeN/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo/logo_05.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://rosa-selvatica.ru/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo/logo_06.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://pantelemone.ru/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo/logo_07.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.nic-club.ru/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo/logo_08.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>

          </div>
         
        </div>
        
        <div class="item">
          <div class="row">
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.charmante.ru/mall/lora_grig" title="" target="_blank"><img src="/wp-content/uploads/ls-logon/logo_09.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://darsitrade.ru/catalog/corsetry/mioocchi/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo/logo_10.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://extremeintimo.ru/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo/logo_11.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://dimanchelingerie.ru/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo/logo_12.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.charmante.ru/" title="" target="_blank"><img src="/wp-content/uploads/ls-logon/logo_13.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://mia-mia.ru/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo/logo_14.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.latanya.ru/shop/brand/Cacharel/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo/logo_15.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://marlena.su/blackspade" title="" target="_blank"><img src="/wp-content/uploads/ls-logo/logo_16.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>

          </div>
         
        </div>
        
        <div class="item">
          <div class="row">
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://kolgotkimoscow.ru/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo-2/logo_47.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://viva-donna.com" title="" target="_blank"><img src="/wp-content/uploads/ls-logo-2/logo_48.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://valerialingerie.ru" title="" target="_blank"><img src="/wp-content/uploads/ls-logo/logo_19.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.shikka.com.tr/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo/logo_20.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://bwear.ru/pilyq.html" title="" target="_blank"><img src="/wp-content/uploads/ls-logo/logo_21.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.tessilgroup.it/?page_id=487" title="" target="_blank"><img src="/wp-content/uploads/ls-logo/logo_23.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://bwear.ru/cris-zarel.html" title="" target="_blank"><img src="/wp-content/uploads/ls-logo/logo_24.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://bwear.ru/nuria-ferrer.html" title="" target="_blank"><img src="/wp-content/uploads/ls-logo/logo_25.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>

          </div>
         
        </div>
        
        <div class="item">
          <div class="row">
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.naremo.ru/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo/logo_26.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.exilia.it/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo/logo_27.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.tessilgroup.it/?page_id=473" title="" target="_blank"><img src="/wp-content/uploads/ls-logo/logo_28.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.biessefashion.com/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo/logo_29.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.crool.net.ru/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo/logo_30.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.tessilgroup.it/?page_id=509" title="" target="_blank"><img src="/wp-content/uploads/ls-logo/logo_31.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.anticasartoriapositano.com/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo/logo_32.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://anabel-arto.ru/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo/logo_33.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>

          </div>
         
        </div>
		
        <div class="item">
          <div class="row">
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.twinset.com/" title="" target="_blank"><img src="/wp-content/uploads/ls-logon/logo_41.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.trussardi.com/" title="" target="_blank"><img src="/wp-content/uploads/ls-logon/logo_42.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.morgandetoi.com/mode_feminine/accessoires-morgan/maillots-de-bain-c-41.htm" title="" target="_blank"><img src="/wp-content/uploads/ls-logon/logo_43.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.cosabella.com/" title="" target="_blank"><img src="/wp-content/uploads/ls-logon/logo_44.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.clara-onweb.com/" title="" target="_blank"><img src="/wp-content/uploads/ls-logon/logo_45.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.bikinibar.fr/" title="" target="_blank"><img src="/wp-content/uploads/ls-logon/logo_46.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                   <a href="#" title="" target="_blank"><img src="/wp-content/uploads/ls-logo-2/logo_49.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://paris-club.ru/?page_id=9569" title="" target="_blank"><img src="/wp-content/uploads/ls-logo-2/logo_50.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>

          </div>
         
        </div>
        
		 <div class="item">
          <div class="row">
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.unimarbeachwear.it/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo-2/logo_51.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://kolgotkimoscow.ru/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo-2/logo_52.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                     <a href="http://paris-club.ru/?page_id=17070" title="" target="_blank"><img src="/wp-content/uploads/ls-logo-2/logo_53.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.bestcalze.com/prodotti.html" title="" target="_blank"><img src="/wp-content/uploads/ls-logo-2/logo_54.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://paris-club.ru/?page_id=21794" title="" target="_blank"><img src="/wp-content/uploads/ls-logo-2/logo_55.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://mia-mia.ru/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo-2/logo_56.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                   <a href="http://kolgotkimoscow.ru/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo-2/logo_57.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.lunadigiorno.com/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo-2/logo_58.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>

          </div>
         
        </div>

        <div class="item">
          <div class="row">
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.unimarbeachwear.it/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo-2/logo_59.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.parisgirl.ru/#!le-bourget/c207m" title="" target="_blank"><img src="/wp-content/uploads/ls-logo-2/logo_60.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                     <a href="http://laete.ru/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo-2/logo_61.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://paris-club.ru/?page_id=20352" title="" target="_blank"><img src="/wp-content/uploads/ls-logo-2/logo_62.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.giuliariva.com/index.php" title="" target="_blank"><img src="/wp-content/uploads/ls-logo-2/logo_63.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.ferruccigroup.it/homewear/index.php" title="" target="_blank"><img src="/wp-content/uploads/ls-logo-2/logo_64.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                   <a href="http://www.ferruccigroup.it/homewear/index.php" title="" target="_blank"><img src="/wp-content/uploads/ls-logo-2/logo_65.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://paris-club.ru/?page_id=1084" title="" target="_blank"><img src="/wp-content/uploads/ls-logo-2/logo_67.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>

          </div>
         
        </div>

		 <div class="item">
          <div class="row">
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.bicricami.it/house-linen/ns.asp" title="" target="_blank"><img src="/wp-content/uploads/ls-logo-2/logo_68.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://paris-club.ru/?page_id=9578" title="" target="_blank"><img src="/wp-content/uploads/ls-logo-2/logo_69.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                     <a href="http://www.bestcalze.com/prodotti.html" title="" target="_blank"><img src="/wp-content/uploads/ls-logo-2/logo_70.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.alvcasa.it/accappatoi/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo-2/logo_71.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.bestcalze.com/prodotti.html" title="" target="_blank"><img src="/wp-content/uploads/ls-logo-2/logo_72.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://kolgotkimoscow.ru/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo-2/logo_79.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                   <a href="#" title="" target="_blank"><img src="/wp-content/uploads/ls-logo-2/logo_78.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.maudandmarjorie.com/la-marque-r5.html" title="" target="_blank"><img src="/wp-content/uploads/ls-logo-2/logo_77.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>

          </div>
         
        </div>
		
		 <div class="item">
          <div class="row">
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.nativeclub.ru/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo-2/logo_76.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://olla-stp.ru/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo-2/logo_75.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                     <a href="http://www.sauvagewear.com/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo-2/logo_74.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href=" http://dimanchesrl.ru/torgovye-marki/ultramax-thermals/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo-2/logo_73.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                       <a href="#" title="" target="_blank"><img src="/wp-content/uploads/ls-logon/logo_bl.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                       <a href="#" title="" target="_blank"><img src="/wp-content/uploads/ls-logon/logo_bl.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                    <a href="#" title="" target="_blank"><img src="/wp-content/uploads/ls-logon/logo_bl.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                       <a href="#" title="" target="_blank"><img src="/wp-content/uploads/ls-logon/logo_bl.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>

          </div>
         
        </div>
        

        
      </div>
      <!-- Controls -->
     
    </div>
    <!-- /.row -->
  </div>


<?php } else { ?>
<div id="carousel-min-height" class="carousel slide" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="/wp-content/uploads/slider-st/stand02.jpg" alt="">     
    </div>
    <div class="item">
      <img src="/wp-content/uploads/slider-st/stand03.jpg" alt="">      
    </div>
    <div class="item">
      <img src="/wp-content/uploads/slider-st/stand05.jpg" alt="">      
    </div>
    <div class="item">
      <img src="/wp-content/uploads/slider-st/stand06.jpg" alt="">      
    </div>
    <div class="item">
      <img src="/wp-content/uploads/slider-st/stand26.jpg" alt="">      
    </div>
    <div class="item">
      <img src="/wp-content/uploads/slider-st/stand27.jpg" alt="">      
    </div>
    <div class="item">
      <img src="/wp-content/uploads/slider-st/stand28.jpg" alt="">      
    </div>
    <div class="item">
      <img src="/wp-content/uploads/slider-st/stand29.jpg" alt="">      
    </div>
    <div class="item">
      <img src="/wp-content/uploads/slider-st/stand30.jpg" alt="">      
    </div>
    <div class="item">
      <img src="/wp-content/uploads/slider-st/stand38.jpg" alt="">      
    </div>
    <div class="item">
      <img src="/wp-content/uploads/2015/08/stand36-37.jpg" alt="">      
    </div>
    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-min-height" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-min-height" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div id="carousel-logo-v1" class="carousel slide carousel-fade no-background inner-b-100" data-ride="carousel">
  <!-- Indicators -->
  <div class="container">      
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <div class="row">
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.latanya.ru/shop/brand/Sis/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo/logo_01.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://primaveramoda.com/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo/logo_02.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://onlyvips.ru/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo/logo_03.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.lowry.ru/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo/logo_04.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.latanya.ru/shop/brand/TeN/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo/logo_05.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://rosa-selvatica.ru/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo/logo_06.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://pantelemone.ru/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo/logo_07.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.nic-club.ru/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo/logo_08.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>

          </div>
         
        </div>
        
        <div class="item">
          <div class="row">
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.charmante.ru/mall/lora_grig" title="" target="_blank"><img src="/wp-content/uploads/ls-logon/logo_09.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://darsitrade.ru/catalog/corsetry/mioocchi/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo/logo_10.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://extremeintimo.ru/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo/logo_11.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://dimanchelingerie.ru/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo/logo_12.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.charmante.ru/" title="" target="_blank"><img src="/wp-content/uploads/ls-logon/logo_13.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://mia-mia.ru/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo/logo_14.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.latanya.ru/shop/brand/Cacharel/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo/logo_15.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://marlena.su/blackspade" title="" target="_blank"><img src="/wp-content/uploads/ls-logo/logo_16.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>

          </div>
         
        </div>
        
        <div class="item">
          <div class="row">
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://kolgotkimoscow.ru/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo-2/logo_47.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://viva-donna.com" title="" target="_blank"><img src="/wp-content/uploads/ls-logo-2/logo_48.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://valerialingerie.ru" title="" target="_blank"><img src="/wp-content/uploads/ls-logo/logo_19.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.shikka.com.tr/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo/logo_20.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://bwear.ru/pilyq.html" title="" target="_blank"><img src="/wp-content/uploads/ls-logo/logo_21.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.tessilgroup.it/?page_id=487" title="" target="_blank"><img src="/wp-content/uploads/ls-logo/logo_23.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://bwear.ru/cris-zarel.html" title="" target="_blank"><img src="/wp-content/uploads/ls-logo/logo_24.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://bwear.ru/nuria-ferrer.html" title="" target="_blank"><img src="/wp-content/uploads/ls-logo/logo_25.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>

          </div>
         
        </div>
        
        <div class="item">
          <div class="row">
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.naremo.ru/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo/logo_26.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.exilia.it/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo/logo_27.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.tessilgroup.it/?page_id=473" title="" target="_blank"><img src="/wp-content/uploads/ls-logo/logo_28.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.biessefashion.com/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo/logo_29.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.crool.net.ru/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo/logo_30.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.tessilgroup.it/?page_id=509" title="" target="_blank"><img src="/wp-content/uploads/ls-logo/logo_31.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.anticasartoriapositano.com/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo/logo_32.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://anabel-arto.ru/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo/logo_33.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>

          </div>
         
        </div>
        
         <div class="item">
          <div class="row">
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.twinset.com/" title="" target="_blank"><img src="/wp-content/uploads/ls-logon/logo_41.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.trussardi.com/" title="" target="_blank"><img src="/wp-content/uploads/ls-logon/logo_42.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.morgandetoi.com/mode_feminine/accessoires-morgan/maillots-de-bain-c-41.htm" title="" target="_blank"><img src="/wp-content/uploads/ls-logon/logo_43.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.cosabella.com/" title="" target="_blank"><img src="/wp-content/uploads/ls-logon/logo_44.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.clara-onweb.com/" title="" target="_blank"><img src="/wp-content/uploads/ls-logon/logo_45.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.bikinibar.fr/" title="" target="_blank"><img src="/wp-content/uploads/ls-logon/logo_46.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="#" title="" target="_blank"><img src="/wp-content/uploads/ls-logo-2/logo_49.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://paris-club.ru/?page_id=9569" title="" target="_blank"><img src="/wp-content/uploads/ls-logo-2/logo_50.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>

          </div>
         
        </div>
        
 <div class="item">
          <div class="row">
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.unimarbeachwear.it/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo-2/logo_51.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://kolgotkimoscow.ru/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo-2/logo_52.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                     <a href="http://paris-club.ru/?page_id=17070" title="" target="_blank"><img src="/wp-content/uploads/ls-logo-2/logo_53.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.bestcalze.com/prodotti.html" title="" target="_blank"><img src="/wp-content/uploads/ls-logo-2/logo_54.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://paris-club.ru/?page_id=21794" title="" target="_blank"><img src="/wp-content/uploads/ls-logo-2/logo_55.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://mia-mia.ru/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo-2/logo_56.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                   <a href="http://kolgotkimoscow.ru/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo-2/logo_57.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.lunadigiorno.com/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo-2/logo_58.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>

          </div>
         
        </div>

        <div class="item">
          <div class="row">
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.unimarbeachwear.it/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo-2/logo_59.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.parisgirl.ru/#!le-bourget/c207m" title="" target="_blank"><img src="/wp-content/uploads/ls-logo-2/logo_60.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                     <a href="http://laete.ru/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo-2/logo_61.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://paris-club.ru/?page_id=20352" title="" target="_blank"><img src="/wp-content/uploads/ls-logo-2/logo_62.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.giuliariva.com/index.php" title="" target="_blank"><img src="/wp-content/uploads/ls-logo-2/logo_63.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.ferruccigroup.it/homewear/index.php" title="" target="_blank"><img src="/wp-content/uploads/ls-logo-2/logo_64.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                   <a href="http://www.ferruccigroup.it/homewear/index.php" title="" target="_blank"><img src="/wp-content/uploads/ls-logo-2/logo_65.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://paris-club.ru/?page_id=1084" title="" target="_blank"><img src="/wp-content/uploads/ls-logo-2/logo_67.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>

          </div>
         
        </div>

		 <div class="item">
          <div class="row">
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.bicricami.it/house-linen/ns.asp" title="" target="_blank"><img src="/wp-content/uploads/ls-logo-2/logo_68.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://paris-club.ru/?page_id=9578" title="" target="_blank"><img src="/wp-content/uploads/ls-logo-2/logo_69.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                     <a href="http://www.bestcalze.com/prodotti.html" title="" target="_blank"><img src="/wp-content/uploads/ls-logo-2/logo_70.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.alvcasa.it/accappatoi/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo-2/logo_71.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.bestcalze.com/prodotti.html" title="" target="_blank"><img src="/wp-content/uploads/ls-logo-2/logo_72.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://kolgotkimoscow.ru/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo-2/logo_79.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                   <a href="#" title="" target="_blank"><img src="/wp-content/uploads/ls-logo-2/logo_78.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.maudandmarjorie.com/la-marque-r5.html" title="" target="_blank"><img src="/wp-content/uploads/ls-logo-2/logo_77.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>

          </div>
         
        </div>
		
		 <div class="item">
          <div class="row">
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://www.nativeclub.ru/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo-2/logo_76.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href="http://olla-stp.ru/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo-2/logo_75.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                     <a href="http://www.sauvagewear.com/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo-2/logo_74.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                      <a href=" http://dimanchesrl.ru/torgovye-marki/ultramax-thermals/" title="" target="_blank"><img src="/wp-content/uploads/ls-logo-2/logo_73.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                       <a href="#" title="" target="_blank"><img src="/wp-content/uploads/ls-logon/logo_bl.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                       <a href="#" title="" target="_blank"><img src="/wp-content/uploads/ls-logon/logo_bl.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                    <a href="#" title="" target="_blank"><img src="/wp-content/uploads/ls-logon/logo_bl.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>
            <div class="col-md-1 col-sm-2 col-xs-4">             
                <div class="team-image align-c">                  
                    <div class="image-inner">
                       <a href="#" title="" target="_blank"><img src="/wp-content/uploads/ls-logon/logo_bl.jpg" title="#" alt="#" class="img-responsive"></a>
                    </div>                    
                </div>            
            </div>

          </div>
         
        </div>
        

        

        
      </div>
      <!-- Controls -->
     
    </div>
    <!-- /.row -->
  </div>
<?php } ?>

  
  
	<div id="main" class="wrapper">

	<div id="primary" class="site-content">
		<div id="content" role="main">

			

		</div><!-- #content -->
	</div><!-- #primary -->

	</div><!-- #main .wrapper -->
</div><!-- #page -->
<div class="fline">
    <div  class="site">
      <?php dynamic_sidebar( 'sidebar-4' ); ?>
      <div  class="footersoccontainer">
	<?php dynamic_sidebar( 'sidebar-5' ); ?>
      </div>
    </div>
</div>   
<script>
$( document ).ready(function() {
  $('#carousel-logo-v1').carousel({
  interval: 0
})
  $('#carousel-min-height').carousel({
  interval: 8000
})
 $('#carousel-logo-v1m').carousel({
  interval: 7000
})
$('#carousel-min-height').on('slide.bs.carousel', function () {
  $('#carousel-logo-v1').carousel('next');
})
});

</script>
<?php if( $detect->isMobile() ) { 
 wp_footer();
} else { } 
  ?>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter30544277 = new Ya.Metrika({id:30544277,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/30544277" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<div class="langcontainer moblang"> <?php do_action('icl_language_selector'); ?> </div>
</body>
</html>