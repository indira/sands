<?php
get_header();
  while(have_posts()){
    the_post();?>
    <div class="page-banner ">
      <div class="page-banner__image" style="background-image:url(<?php echo get_theme_file_uri('/app/assets/images/ocean.jpg');?>)">

      </div>
      <div class=" page-banner__text-content ">
          <div class="wrapper">
            <h1 class="page-banner__title"><?php the_title()?></h1>
            <p class="page-banner__description">DONT FORGET TO REPLACE ME LATER.</p>
          </div>
      </div>  
   </div>
   <div class="wrapper wrapper--medium"> 
      <div class="metabox metabox--with-home-link">
        <p>
          <a class="metabox__blog-home-link" 
          href="<?php echo get_post_type_archive_link('program');?>">
          <i class="fa fa-home" aria-hidden="true"></i>All Programs</a> 
          <span class="metabox__main"><?php the_title();?></span>
        </p>
      </div>  
    </div>
    <div class="page-section--small wrapper wrapper--medium"> 
      <div class=" generic-content-container">
        <?php the_content();?>
        <?php 
            $relatedProfessors = new WP_Query(array(
              'posts_per_page' => -1, //If posts_per_page is set to -1 that will return all the posts.
              'post_type' => 'professor',
              //'orderby' => 'title', //ran for the random order,,the order is set to DESC by default
              //'order' => 'ASC'
              'orderby' => 'title',
              'order' => 'ASC',
              'meta_query' => array(
                array(
                  'key' => 'related_programs',
                  'compare' => 'LIKE',
                  'value' => '"'.get_the_ID().'"'
                )
              )
            ));
            if($relatedProfessors->have_posts()){
              echo '<hr class="section-break">';
              echo '<h2 class="headline headline--medium">'.get_the_title().' Professors</h2>';
              echo '<ul class="professor-cards">';
              while($relatedProfessors->have_posts()){
                $relatedProfessors->the_post();?>
                <li class="professor-cards__list-item">
                  <a class="professor-cards" href="<?php the_permalink();?>">
                    <img class="professor-cards__image" src="<?php the_post_thumbnail_url('professorLandscape');?>"> 
                    <span class="professor-cards__name"><?php the_title()?></span> 
                </a>
                </li>
           <?php }
              echo '</ul>';
            }

            wp_reset_postdata();//Reseting the post id...if we dont write this code the code below wont be displayed
            
            $today = date('Ymd');
            $homepageEvents = new WP_Query(array(
              'posts_per_page' => 2, //If posts_per_page is set to -1 that will return all the posts.
              'post_type' => 'event',
              //'orderby' => 'title', //ran for the random order,,the order is set to DESC by default
              //'order' => 'ASC'
              'orderby' => 'meta_value_num',
              'order' => 'ASC',
              'meta_query' => array(
                array(
                  'key' => 'event_date',
                  'compare' => '>=',
                  'value' => $today,
                  'type' => 'numeric'
                ),
                array(
                  'key' => 'related_programs',
                  'compare' => 'LIKE',
                  'value' => '"'.get_the_ID().'"'
                )
              )
            ));
            if($homepageEvents->have_posts()){
              echo '<hr class="section-break">';
            echo '<h2 class="headline headline--medium">Upcoming ' .get_the_title().' Events</h2>';

            while($homepageEvents->have_posts()){
              $homepageEvents->the_post();?>
              <div class="event-summary">
                <a class="event-summary__date event-summary--blue event-summary--center" href="#">
                <span class="event-summary__month"><?php
                  $eventDate = new DateTime(get_field('event_date'));
                  echo $eventDate->format('M');
                ?></span>
                  <span class="event-summary__day"><?php echo $eventDate -> format('d')?></span>  
                </a>
                <h5 class="event-summary__title"><a href="<?php the_permalink();?>"><?php the_title()?></a></h5>
                <p><?php if(has_excerpt()){
                    echo get_the_excerpt();
                } else {
                  echo wp_trim_words(get_the_content(),18);
                } ?><a href="<?php the_permalink();?>" class="nu gray">Learn more</a></p>
            </div>
           <?php }
            }

          ?>
      </div>
    </div>   
   <?php
  }
get_footer();
?>