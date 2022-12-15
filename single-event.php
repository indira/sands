<?php
get_header();
  while(have_posts()){
    the_post();
    pageBanner(array(
      'title' => '',
      'subtitle' => '',
      'photo'=> ''
  
    ));
    ?>
   
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
      <?php 
      $relatedPrograms = get_field('related_programs');
      if($relatedPrograms){
        echo '<hr class="section-break">';
        echo ' <h2 class="headline headline--no-t-margin">Related Program(s)</h2>';
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