<?php 
//Adding custom API authorName to the post
require get_theme_file_path('/inc/search-route.php');

function sands_custom_rest(){
  register_rest_field('post','authorName',array(
    'get_callback' => function() {return count_user_posts(get_current_user_id(),'note');}
  ));
   register_rest_field('note','userNoteCount',array(
    'get_callback' => function() {return get_current_user_id();}
  ));
}

add_action('rest_api_init', 'sands_custom_rest');


//Page banner function for all the pages
function pageBanner($args = NULL){
  if(!$args['title']){
    $args['title'] = get_the_title();
  }
  if(!$args['subtitle']){
    $args['subtitle'] = get_field('page_banner_subtitle');
  }
  if (!$args['photo']) {
    if (get_field('page_banner_background_image') AND !is_archive() AND !is_home() ) {
      $args['photo'] = get_field('page_banner_background_image')['sizes']['pageBanner'];
    } else {
      $args['photo'] = get_theme_file_uri('/app/assets/images/ocean.jpg');
    }
  }


  ?>
  <div class="page-banner ">
      <div class="page-banner__image" style="background-image:url(<?php 
       echo $args['photo'];
      ?>)">
      </div>
      <div class=" page-banner__text-content ">
          <div class="wrapper">
            <h1 class="page-banner__title"><?php echo $args['title']?></h1>
            <p class="page-banner__description"><?php echo $args['subtitle'];?></p>
          </div>
      </div>  
  </div>
  <?php
}

/**
 * Enqueue bundle.js.
 */
function SandS_files(){
	wp_enqueue_script('parent-js', get_stylesheet_directory_uri().'/app/bundled.js', array('jquery'), '1.0', true);
	wp_enqueue_style('custom-google-fonts','//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700');
	wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

  wp_localize_script('parent-js','sandsData',array(
    'root_url' => get_site_url(),
    'nonce' =>wp_create_nonce('wp_rest')
  ));
}
add_action('wp_enqueue_scripts','SandS_files');


//Adding title tag on the top of the page
function sands_features(){
	
	//Adding Menu to the dashboard
	register_nav_menu('headerMenuLocation',"Header Menu Location");
	register_nav_menu('footerLocationOne',"Footer Location One");
	register_nav_menu('footerLocationTwo',"Footer Location Two");
  /*title-tag*/
  add_theme_support('title-tag');
  /*Adding Post-thumbnails to the post type*/
  add_theme_support('post-thumbnails');
  add_image_size('professorLandscape',400,260, true);
  add_image_size('professorPortrait',480,650,true);
  add_image_size('pageBanner',1500,350,true);
	
}
add_action('after_setup_theme','sands_features');

function sands_adjust_queries($query){
	if (!is_admin() AND is_post_type_archive('program') AND $query->is_main_query()) {
    $query->set('orderby', 'title');
    $query->set('order', 'ASC');
    $query->set('posts_per_page', -1);
  }

  if (!is_admin() AND is_post_type_archive('event') AND $query->is_main_query()) {
    $today = date('Ymd');
    $query->set('meta_key', 'event_date');
    $query->set('orderby', 'meta_value_num');
    $query->set('order', 'ASC');
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