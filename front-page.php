<?php get_header(); ?>
<div class="large-hero">
      <picture class="large-hero__image">
        <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/app/assets/images/hero--large.jpg 1920w,
        <?php echo get_stylesheet_directory_uri(); ?>/app/assets/images/hero--large-hi-dpi.jpg 3840w"
          media="(min-width:1380px)">
        <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/app/assets/images/hero--medium.jpg 1380w,
        <?php echo get_stylesheet_directory_uri(); ?>/app/assets/images/hero--medium-hi-dpi.jpg 2760w"
          media="(min-width:990px)">
        <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/app/assets/images/hero--small.jpg 990w,
        <?php echo get_stylesheet_directory_uri(); ?>/app/assets/images/hero--medium-hi-dpi.jpg 1980w"
          media="(min-width:640px)">
        <img srcset="<?php echo get_stylesheet_directory_uri(); ?>/app/assets/images/hero--smaller.jpg 640w,
        <?php echo get_stylesheet_directory_uri(); ?>/app/assets/images/hero--medium-hi-dpi.jpg 1280w"
          alt="coastal view of ocean and mountains" class="large-hero__image">
      </picture>
      <div class="large-hero__text-content">
        <div class="wrapper">
          <h1 class="large-hero__title">Your clarity.!!</h1>
          <h2 class="large-hero__sub-title">One trip away.</h2>
          <p class="large-hero__description">We create soul restoring journeys
            that inspire you to be you.</p>
          <p><a href="#" class="btn btn--orange btn--large open-modal">Get Started Today</a></p>
        </div>
      </div>
    </div>
    <div id="our-beginning" class="page-section">
      <div class="wrapper">
          <h2 class="headline headline--centered headline--light">The first trip we planned <strong>was our own.</strong></h2>
          <h3 class="headline headline--centered headline--orange headline--small headline--narrow headline--light">Ever since, we&rsquo;ve been working to make travel <strong>better for everyone</strong>.</h3>
        <div class="wrapper wrapper--medium wrapper--b-margin">
          <img sizes="(min-width:976px) 976px, 100vw" srcset="<?php echo get_stylesheet_directory_uri(); ?>/app/assets/images/first-trip-low-res.jpg 565w,
          <?php echo get_stylesheet_directory_uri(); ?>/app/assets/images/first-trip.jpg 976w,
          <?php echo get_stylesheet_directory_uri(); ?>/app/assets/images/first-trip-hi-dpi.jpg 1952w" 
          alt="Couple walking down a street.">
        </div>
        <div class="row row--gutters">
          <div class="row__medium-4 row__medium-4--larger row__b-margin-until-medium">
            <picture>
              <source sizes="404px" srcset="<?php echo get_stylesheet_directory_uri(); ?>/app/assets/images/our-start.jpg 404w, 
              <?php echo get_stylesheet_directory_uri(); ?>/app/assets/images/our-start-hi-dpi.jpg 808w" media="(min-width:1020px)">
              <source sizes="320px" srcset="<?php echo get_stylesheet_directory_uri(); ?>/app/assets/images/our-start-portrait.jpg 382w, 
              <?php echo get_stylesheet_directory_uri(); ?>/app/assets/images/our-start-portrait-hi-dpi.jpg 764w" media="(min-width:800px)">
              <img srcset= "<?php echo get_stylesheet_directory_uri(); ?>/app/assets/images/our-start-landscape.jpg 800w,
              <?php echo get_stylesheet_directory_uri(); ?>/app/assets/images/our-start-landscape-hi-dpi.jpg 1600w" 
              alt="Our founder, Jane Doe">
            </picture>
          </div>
          <div class="row__medium-8 row__medium-8--smaller">
            <div class="generic-content-container">
              <h2 class="headline headline--no-t-margin">Here&rsquo;s how we got started&hellip;</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, <a href="#">quis nostrud exercitation</a> ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <p>Duis aute irure dolor in <strong>reprehenderit in</strong> voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum velit esse cillum <strong>dolore eu fugiat.</strong></p>
            </div>
          </div>
          </div>
      </div>
    </div>
    <div id="features" class="page-section page-section--blue">
      <div class="wrapper">
        <h2 class="section-title"> <img class="section-title__icon"src="<?php echo get_stylesheet_directory_uri(); ?>/app/assets/images/icons/star.svg">Our <strong>Features</strong></h2>
        <div class="row row--gutters-large generic-content-container">
          <div class="row__medium-6">
            <div class="feature-item">
              <img class="feature-item__icon" src="<?php echo get_stylesheet_directory_uri(); ?>/app/assets/images/icons/rain.svg">
              <h3 class="feature-item__title">We&rsquo;ll Watch the Weather</h3>
              <p>Download our app and we&rsquo;ll send you a notice if it&rsquo;s about to rain in the next 20 minutes around your current location. A good rain can be refreshing, but sometimes you just want to stay dry.</p>
           
            <img class="feature-item__icon" src="<?php echo get_stylesheet_directory_uri(); ?>/app/assets/images/icons/globe.svg">
            <h3 class="feature-item__title">Global Guides</h3>
            <p>We&rsquo;ve scoured the entire planet for the best retreats and beautiful vistas. If there&rsquo;s a corner of the world you want to escape to we know the most scenic and inspiring locations.</p>
          </div>
          </div>
          <div class="row__medium-6">
            <div class="feature-item">
              <img class="feature-item__icon" src="<?php echo get_stylesheet_directory_uri(); ?>/app/assets/images/icons/wifi.svg">
              <h3 class="feature-item__title">Wi-Fi Waypoints</h3>
              <p>We only send you on trips to places we can personally vouch for as being amazing. Which means we&rsquo;ve mapped out where local wi-fi spots are and marked them in our app&rsquo;s map view.</p>

              <img class="feature-item__icon" src="<?php echo get_stylesheet_directory_uri(); ?>/app/assets/images/icons/fire.svg">
              <h3 class="feature-item__title">Survival Kit</h3>
              <p>Everytime you book an escape with us we send you a survival kit with the finest materials. The kit will allow you to setup a tent, start a fire, scratch your own back and lower your taxes.</p>
            </div>
          </div>
        </div> 
      </div>
  </div>

  <div id="testimonials" class="page-section">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/app/assets/images/icons/comment.svg">
    <h2>Real Testimonials</h2>

    <img src="<?php echo get_stylesheet_directory_uri(); ?>/app/assets/images/testimonial-jane.jpg">
    <h3>Jane Doe</h3>
    <h3>9 Time Escaper</h3>
    <p>&ldquo;Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.&rdquo;</p>

    <img src="<?php echo get_stylesheet_directory_uri(); ?>/app/assets/images/testimonial-john.jpg">
    <h3>John Smith</h3>
    <h3>4 Time Escaper</h3>
    <p>&ldquo;Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur.&rdquo;</p>

    <img src="<?php echo get_stylesheet_directory_uri(); ?>/app/assets/images/testimonial-cat.jpg">
    <h3>Cat McKitty</h3>
    <h3>6 Time Escaper</h3>
    <p>&ldquo;Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.&rdquo;</p>
  </div>
    
  
  <?php get_footer();

?>