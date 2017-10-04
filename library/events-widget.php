<?php
/**
 * Allow functions to get custom events
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */


/* Custom query for event list widget*/
function crusg_get_list_widget_events ( ){

    // uncoment the line below and fill in your custom args
    //$args =  array( 'start_date' => $today )
    $args = array();

    $posts = tribe_get_events( $args );

    return $posts;
}

add_filter( 'tribe_get_list_widget_events', 'crusg_get_list_widget_events' );
