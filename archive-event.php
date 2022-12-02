<?php get_header();
?>
<div class="page-banner ">
      <div class="page-banner__image" style="background-image:url(<?php echo get_theme_file_uri('/app/assets/images/ocean.jpg');?>)">

      </div>
      <div class="page-banner__text-content">
          <div class="wrapper">
            <h1 class="page-banner__title">All Events</h1>
            <p class="page-banner__description">See what is going on in our world.</p>
          </div>
      </div>  
</div>
<div class="page-section--small wrapper wrapper--medium"> 
<?php while(have_posts()){
   the_post();?>
   <div class="event-summary">
   <a class="event-summary__date event-summary--beige event-summary--center" href="#">
      <span class="event-summary__month"><?php
        $eventDate = new DateTime(get_field('event_date'));
        echo $eventDate->format('M');
        ?></span>
        <span class="event-summary__day"><?php echo $eventDate -> format('d')?></span>  
        </a>
        <h5 class="event-summary__title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
        <p><?php echo wp_trim_words(get_the_content(),18);?><a href="<?php the_permalink();?>" class="nu gray">Learn more</a></p>
    </div>
 <?php } 
 echo paginate_links();
 ?>
 <hr class="section-break">
<p>Looking for a recap of past events?<a href="<?php echo site_url('/past-events')?>"> Check out our past events archive.</a></p>
</div>
<?php  get_footer();
?>