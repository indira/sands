<!DOCTYPE html>
<html <?php language_attributes() ?>>
  <head>
      <meta charset="<?php bloginfo('charset')?>">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <?php wp_head(); ?>
  </head>
  <body <?php body_class();?>>
  <header class="site-header">
      <div class="wrapper">
        <div class="site-header__logo">
          <!--<div class="site-header__logo__graphic icon icon--clear-view-escapes">
            Clear View Escapes
          </div>-->
         <a href="<?php echo site_url('')?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/app/assets/images/icons/clear-view-escapes.svg" alt="svgimage" ></a>
        </div>
        <div class="site-header__menu-icon">
          <div class="site-header__menu-icon__middle">
          </div>
        </div>
        <div class="site-header__menu-content">
            <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
          
          <div class="site-header__btn-container">
            <a class="btn btn--small open-modal" href="#">Get in Touch</a>
          </div>
          <nav class="primary-nav primary-nav--pull-right">
            <?php 
              wp_nav_menu(array(
                'theme_location' => 'headerMenuLocation'

              ));
            ?>
            
           <!-- <ul>
              <li><a href="<?php echo site_url('/about-us')?>" id ="our-beginning-link">About Us</a></li>
              <li><a href="#">Programs</a></li>
              <li><a href="#">Events</a></li>
              <li><a href="#">Campuses</a></li>
              <li><a href="#">Blog</a></li>
            </ul>-->
          </nav>
          <div class="site-header__util">
            <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
          </div>
        </div>
        
      </div>
    </header>
