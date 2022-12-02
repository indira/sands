<?php get_header();
?>
<div class="page-banner ">
      <div class="page-banner__image" style="background-image:url(<?php echo get_theme_file_uri('/app/assets/images/ocean.jpg');?>)">

      </div>
      <div class="page-banner__text-content">
          <div class="wrapper">
            <h1 class="page-banner__title">Past Events</h1>
            <p class="page-banner__description"> A re-cap of our past events.</p>
          </div>
      </div>  
</div>
<div class="page-section--small wrapper wrapper--medium"> 
<?php 
$today = date('Ymd');
$pastEvents = new WP_Query(array(
  'pagged' => get_query_var('paged',1),//This line is also for the pagination
  'post_type' => 'event',
  'meta_key' => 'event_date',
  'orderby' => 'meta_value_num',
  'order' => 'DEC',
  'meta_query' => array(
    array(
      'key' => 'event_date',
      'compare' => '<',
      'value' => $today,
      'type' => 'numeric'
    ))
));

while($pastEvents->have_posts()){
  $pastEvents->the_post();?>
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
 /*For the custom page for pagination to work we need to ass the array as shown in below. The
 default pagination code will only work for the wordpress default pages*/
 echo paginate_links(array(
  'total' => $pastEvents->max_num_pages 
 ));
 ?>

</div>
<?php  get_footer();
?>23