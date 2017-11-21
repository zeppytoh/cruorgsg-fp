<?php
/**
 * Create a shortcode for putting events in a shortcode
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */


/* Custom query for event list widget*/
function crusg_show_events ($atts){
    extract(shortcode_atts(array(
      'category' => "" // default value if none supplied
    ), $atts));

    $today = date( 'Y-m-d H:i:s');
    $events_label_plural = tribe_get_event_label_plural();
    $events_label_plural_lowercase = tribe_get_event_label_plural_lowercase();
    // $posts= crusg_get_list_widget_events();
    $tribe_events_post_type = 'tribe_events';
    $tribe_events_post_args = array(
        'post_type'        => $tribe_events_post_type,
        'post_status'      => 'publish',
        'posts_per_page'   => 2,
        'tribe_events_cat' => $category,
        'caller_get_posts' => -1,
        'meta_query' => array(
        array(
          'key' => '_EventStartDate',
          'value' => $today,
          'compare' => '>=',
          )
        ),
        'orderby'=>'_EventStartDate',
                  'order'            => 'DESC'
              );
    $posts = tribe_get_events( $tribe_events_post_args );
    $htmloutput = "";
    if ( $posts ) :
      foreach ( $posts as $post ) :
        setup_postdata($post);
        $htmloutput .= "<span class='label card-tag'>";
        $htmloutput .= the_title();
        $htmloutput .= "</span>";
      endforeach;
    endif;
    return $htmloutput;
}

add_shortcode( 'crusg_events', 'crusg_show_events' );
