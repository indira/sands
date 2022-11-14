<?php 
/**
 * Enqueue style.css and app.js.
 */
function SandS_files(){
	//wp_enqueue_style( 'my-style', get_stylesheet_directory_uri() . '/dist/styles/style.css', false, '1.0', 'all' );
	wp_enqueue_script('parent-js', get_stylesheet_directory_uri().'/app/bundled.js', array('jquery'), '1.0', true);
	wp_enqueue_style('custom-google-fonts','//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700');
	wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
}
add_action('wp_enqueue_scripts','SandS_files');