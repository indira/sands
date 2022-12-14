<div class="event-summary">
  <a class="event-summary__date event-summary--blue event-summary--center" href="#">
    <span class="event-summary__month"><?php
      $eventDate = new DateTime(get_field('event_date'));
      echo $eventDate->format('M');?>
    </span>
    <span class="event-summary__day"><?php echo $eventDate -> format('d')?></span>  
  </a>
  <h5 class="event-summary__title"><a href="<?php the_permalink();?>"><?php the_title()?></a></h5>
  <p><?php if(has_excerpt()){
      echo get_the_excerpt();
    } else {
      echo wp_trim_words(get_the_content(),18);
    } ?><a href="<?php the_permalink();?>" class="nu gray">Learn more</a>
  </p>
</div>