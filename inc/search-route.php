<?php
add_action("rest_api_init","sandsRegisterSearch");

function sandsRegisterSearch(){
  register_rest_route('sands/v1','search',array(
    'methods' => WP_REST_SERVER::READABLE,
    'callback' => 'sandsSearchResults'
  ));
}

function sandsSearchResults($data){
  $mainQuery = new WP_Query(array(
    'post_type' => array('post' ,'page','professor','program','campus','event'),
    's' => sanitize_text_field($data['term'])
  ));

  $results = array(
    'generalInfo' => array(),
    'professors' => array(),
    'programs' => array(),
    'events' => array(),
    'campuses' => array()
   );

  while($mainQuery->have_posts()){
    $mainQuery->the_post();
    //Posts and Pages
    if(get_post_type()== 'post' OR get_post_type() == 'page'){
      array_push($results['generalInfo'], array(
        'title' => get_the_title(),
        'permalink' => get_the_permalink()
       ));
    }
    //Professor
    if(get_post_type()== 'professor'){
      array_push($results['professors'], array(
        'title' => get_the_title(),
        'permalink' => get_the_permalink()
       ));
    }
    //Program
    if(get_post_type()== 'program'){
      array_push($results['programs'], array(
        'title' => get_the_title(),
        'permalink' => get_the_permalink()
       ));
    }
    //Campus
    if(get_post_type()== 'campus'){
      array_push($results['campuses'], array(
        'title' => get_the_title(),
        'permalink' => get_the_permalink()
       ));
    }
    //Event
    if(get_post_type()== 'event'){
      array_push($results['events'], array(
        'title' => get_the_title(),
        'permalink' => get_the_permalink()
       ));
    }

     
  }

  return $results;
}