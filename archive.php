<?php get_header();
?>
<div class="page-banner ">
      <div class="page-banner__image" style="background-image:url(<?php echo get_theme_file_uri('/app/assets/images/ocean.jpg');?>)">

      </div>
      <div class="page-banner__text-content">
          <div class="wrapper">
            <h1 class="page-banner__title"><?php 
              the_archive_title();
            ?></h1>
            <p class="page-banner__description"><?php the_archive_description();?></p>
          </div>
      </div>  
</div>
<div class="page-section--small wrapper wrapper--medium"> 
<?php while(have_posts()){
   the_post();?>
   <div class="post-item">
      <h2 class="headline headline--no-t-margin headline--w-b--margin"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
      <div class="metabox metabox--m-bottom">
        <p>Posted by <?php the_author_posts_link();?> on <?php the_time('n.j.y');?> in <?php echo get_the_category_list(', ');?></p>
      </div>
      <div class= "generic-content-container">
        <?php the_excerpt();?>
        <a class="btn btn--small open-modal" href="<?php the_permalink()?>">Continue reading &raquo;</a>
      </div>
    </div>
 <?php } 
 echo paginate_links();
 ?>

</div>
<?php  get_footer();
?>