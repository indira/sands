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
	//Adding Menu to the dashboard
	register_nav_menu('headerMenuLocation',"Header Menu Location");
	register_nav_menu('footerLocationOne',"Footer Location One");
	register_nav_menu('footerLocationTwo',"Footer Location Two");
	add_theme_support('title-tag');

}
add_action('after_setup_theme','sands_features');

function sands_adjust_queries($query){
	//run only for the front end of the page not in the admin dashboard
	//If post type archive is event show only one post per page
	//Same like in the front-page-Upcoming Events 
	if(!is_admin() AND is_post_type_archive('event') AND $query-> is_main_query()){
		//$query -> set('posts_per_page', 1);
		$today = date('Ymd');
		$query-> set('meta_key','event_date');
		$query-> set('orderby','meta_value_num');
		$query->set('order','ASC');
		$query->set('meta_query', array(
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
