<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bower_components/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/modernizr-2.8.3.min.js"></script>
      
        <?php wp_head(); ?>
  </head>
    <body <?php body_class(); ?>>
      
  <div id="loading">
      <img id="loading-logo" src="<?php echo get_template_directory_uri(); ?>/images/Aquatica-Logo-Dark.svg" width="200">
  </div>
      
  <div class="container-fluid hidden-md hidden-lg no-padding" id="top-nav-mobile" style="background-color: #001826;">
    <div class="row no-margin">
      <div class="col-md-12 text-center">
        <img id="mobile-nav-logo" src="<?php echo get_template_directory_uri(); ?>/images/Aquatica-Logo-Dark.svg" width="200">
      </div>
    </div>    
  </div>
  
  <div class="container-fluid no-padding hidden-xs hidden-sm <?php echo is_home() ? 'home-nav' : 'navbar-fixed' ?>" id="top-nav" >
    <div class="row no-margin">
      <div class="col-md-12">
        <img id="corner-logo" src="<?php echo get_template_directory_uri(); ?>/images/Aquatica-Logo.svg" width="300">
        
        <?php

        $defaults = array(
            'theme_location'  => '',
            'menu'            => '',
            'container_class' => '',
            'container_id'    => '',
            'menu_class'      => 'menu',
            'menu_id'         => '',
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth'           => 0,
            'walker'          => ''
        );

          wp_nav_menu( $defaults );

        ?>
        
        <span class="pull-right" style="font-size: 36px; line-height: 80px;">813.839.5000</span>
        
      </div>
    </div>
  </div>