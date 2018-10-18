<?php
   /**
    * The header for our theme.
    *
    * Displays all of the <head> section and everything up till <div id="content">
    *
    * @package understrap
    */
   
   $container = get_theme_mod( 'understrap_container_type' );
   ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
   <head>
      <meta charset="<?php bloginfo( 'charset' ); ?>">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="mobile-web-app-capable" content="yes">
      <meta name="apple-mobile-web-app-capable" content="yes">
      <meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
      <link rel="profile" href="http://gmpg.org/xfn/11">
      <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
      <link rel="stylesheet" href="https://use.typekit.net/oyi0pso.css">
      <!-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/> -->
      <?php wp_head(); ?>
   </head>
   <body <?php body_class(); ?>>
        <div class="hfeed site " id="page">
            <!-- ******************* The Navbar Area ******************* -->
            
            <div  id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">
                <a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>
            
               
                <!-- The WordPress Menu goes here -->
                <?php wp_nav_menu(
                    array(
                        'theme_location'  => 'primary',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id'    => 'navbarNavDropdown',
                        'menu_class'      => 'navbar-nav',
                        'fallback_cb'     => '',
                        'menu_id'         => 'main-menu',
                        'walker'          => new understrap_WP_Bootstrap_Navwalker(),
                    )
                    
                    
                    ); ?>
                <?php if ( 'container' == $container ) : ?>
                <?php endif; ?>
                <?php if ( !function_exists( 'responsive-header' ) || !get_sidebar('responsive-header') ) : ?>
                    <?php get_sidebar( 'responsive-header' ); ?>
                <?php endif; ?>
                </div>
		 </div>
		 <!-- .container -->
	
      <!-- .wrapper-navbar end -->