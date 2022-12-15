<?php get_header();
  pageBanner(array(
    'title' => 'Past Events',
    'subtitle' => 'A re-cap of our past events.',
    'photo'=> ''

  ));
?>
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
  $pastEvents->the_post();
  get_template_part('template-parts/content-event');
} 
 /*For the custom page for pagination to work we need to ass the array as shown in below. The
 default pagination code will only work for the wordpress default pages*/
 echo paginate_links(array(
  'total' => $pastEvents->max_num_pages 
 ));
 ?>

</div>
<?php  get_footer();
?>