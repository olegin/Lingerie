<?php
/**
 * Template Name: Контакты
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
<!--[if lte IE 11]>
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

<div id="page" class="hfeed contpage ">  
<div class="contsubheader">
<div  class="site">
<?php dynamic_sidebar( 'sidebar-7' ); ?>  
</div>   
</div>
	<div id="main" class="wrapper">

	<div id="primary" class="site-content">
		<div id="content" role="main">
<?php
if(ICL_LANGUAGE_CODE=='en'){ ?>
 
<img src="/wp-content/uploads/2015/06/contact.jpg" alt=""></img>
 
<?php }
if(ICL_LANGUAGE_CODE=='ru'){ ?>
 
<img src="<?php echo get_template_directory_uri(); ?>/img/cont.jpg" alt=""></img>
 
<?php } ?>

		<div class="fline contfoot">
    	
      <?php dynamic_sidebar( 'sidebar-6' ); ?>     
   	 </div>

		</div>
	</div>

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
<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js" type="text/javascript"></script>
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