<?php
get_header();
  while(have_posts()){
    the_post();?>
    <div class="page-banner ">
      <div class="page-banner__image" style="background-image:url(<?php 
      
      $pageBannerImage = get_field('page_banner_background_image');
      echo $pageBannerImage['sizes']['pageBanner'];
      ?>)">
      </div>
      <div class=" page-banner__text-content ">
          <div class="wrapper">
            <h1 class="page-banner__title"><?php the_title()?></h1>
            <p class="page-banner__description"><?php the_field('page_banner_subtitle');?></p>
          </div>
      </div>  
  </div>
    <div class="page-section--small wrapper wrapper--medium"> 
        <div class="row row--gutters-large generic-content-container"">
          <div class='row__medium-4'>
            <?php the_post_thumbnail('professorPortrait');?>
          </div>
          <div class='row__medium-8'>
           <?php the_content();?>
          </div>

      </div>
      <?php 
      $relatedPrograms = get_field('related_programs');
      if($relatedPrograms){
        echo '<hr class="section-break">';
        echo ' <h2 class="headline headline--no-t-margin">Subject(s) Taught</h2>';
        echo '<ul class="link-list min-list">';
        foreach($relatedPrograms as $program){?>
        <li><a href="<?php echo get_the_permalink($program);?>" ><?php echo get_the_title($program);?></a></li>
        <?php }
        echo '</ul>';
      }
      ?>
    </div>   
   <?php
  }
get_footer();
?>