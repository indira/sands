<!DOCTYPE html>
<html>
  <head>
      <?php wp_head(); ?>
  </head>
  <body>
  <header class="site-header">
      <div class="wrapper">
        <div class="site-header__logo">
          <!--<div class="site-header__logo__graphic icon icon--clear-view-escapes">
            Clear View Escapes
          </div>-->
         <img src="<?php echo get_stylesheet_directory_uri(); ?>/app/assets/images/icons/clear-view-escapes.svg">
        </div>
        <div class="site-header__menu-icon">
          <div class="site-header__menu-icon__middle">
          </div>
        </div>
        <div class="site-header__menu-content">
          <div class="site-header__btn-container">
            <a class="btn btn--small open-modal" href="#">Get in Touch</a>
          </div>
          <nav class="primary-nav primary-nav--pull-right">
            <ul>
              <li><a href="#our-beginning" id ="our-beginning-link">Our Beginning</a></li>
              <li><a href="#features" id="features-link">Features</a></li>
              <li><a href="#testimonials" id="testimonials-link">Testimonials</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
