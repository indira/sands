<?php
get_header();
  while(have_posts()){
    the_post();?>
    <div class="page-banner ">
      <div class="page-banner__image" style="background-image:url(<?php echo get_theme_file_uri('/app/assets/images/ocean.jpg');?>)">

      </div>
      <div class=" page-banner__text-content ">
          <div class="wrapper">
            <h1 class="page-banner__title"><?php the_title()?></h1>
            <p class="page-banner__description">DONT FORGET TO REPLACE ME LATER.</p>
          </div>
      </div>  
   </div>
   <div class="wrapper wrapper--medium"> 
      <div class="metabox metabox--with-home-link">
        <p>
          <a class="metabox__blog-home-link" 
          href="<?php echo get_post_type_archive_link('event');?>">
          <i class="fa fa-home" aria-hidden="true"></i>Events Home</a> 
          <span class="metabox__main"><?php the_title();?></span>
        </p>
      </div>  
    </div>
    <div class="page-section--small wrapper wrapper--medium"> 
      <div class=" generic-content-container">
        <?php the_content();?>
      </div>
    </div>   
   <?php
  }
get_footer();
?>