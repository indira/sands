<?php 
/**
 * Enqueue bundle.js.
 */
function SandS_files(){
	wp_enqueue_script('parent-js', get_stylesheet_directory_uri().'/app/bundled.js', array('jquery'), '1.0', true);
	wp_enqueue_style('custom-google-fonts','//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700');
	wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
}
add_action('wp_enqueue_scripts','SandS_files');


//Adding title tag on the top of the page
function sands_features(){
	/*title-tag*/
  add_theme_support('title-tag');
  /*Adding Post-thumbnails to the post type*/
  add_theme_support('post-thumbnails');
  add_image_size('professorLandscape',400,260, true);
  add_image_size('professorPortrait',480,650,true);
  add_image_size('pageBanner',1500,350,true);
	//Adding Menu to the dashboard
	register_nav_menu('headerMenuLocation',"Header Menu Location");
	register_nav_menu('footerLocationOne',"Footer Location One");
	register_nav_menu('footerLocationTwo',"Footer Location Two");
	
}
add_action('after_setup_theme','sands_features');

function sands_adjust_queries($query){
	/*Program Archive Posts*/
  /*set the no of posts equal to 1 only on the program posts*/
  if(!is_admin() AND is_post_type_archive('program') AND is_main_query()){
    $query -> set('orderby', 'title');
    $query -> set('order','ASC');
  $query -> set('posts_per_page', -1);
  } 
  /*Event Archive Posts*/
  if(!is_admin() AND is_post_type_archive('event') AND is_main_query()){
    $today = date('Ymd');
    $query -> set('meta_key','event_date');
    $query -> set('orderby','meta_value_num');
    $query -> set('order','ASC');
    $query -> set('meta_query',array(
              array(
                'key' => 'event_date',
                'compare' => '>=',
                'value' => $today,
                'type' => 'numeric'
              )
            ));
  } 
}
add_action('pre_get_posts','sands_adjust_queries');
