<?php get_header();
?>
<div class="page-banner ">
      <div class="page-banner__image" style="background-image:url(<?php echo get_theme_file_uri('/app/assets/images/ocean.jpg');?>)">

      </div>
      <div class="page-banner__text-content">
          <div class="wrapper">
            <h1 class="page-banner__title">All Programs</h1>
            <p class="page-banner__description">There is something for everyone. Have a look around.</p>
          </div>
      </div>  
</div>
<div class="page-section--small wrapper wrapper--medium"> 
    <ul class="link-list min-list">
    <?php while(have_posts()){
      the_post();?>
      <li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
      
    <?php } 
    echo paginate_links();
    
    ?>
    </ul>
</div>
<?php  get_footer();
?>