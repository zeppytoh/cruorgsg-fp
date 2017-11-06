<?php
/**
 * The default template part for displaying events
 *
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

 if ( ! defined( 'ABSPATH' ) ) {
 	die( '-1' );
 }
$events_label_plural = tribe_get_event_label_plural();
$events_label_plural_lowercase = tribe_get_event_label_plural_lowercase();
// $posts= crusg_get_list_widget_events();
$posts = tribe_get_events( array( 'end_date' => $today ));
if ( $posts ) : ?>
<ol class="tribe-list-widget">
	<?php
	// Setup the post data for each event.
	foreach ( $posts as $post ) :
		setup_postdata( $post );
		?>
		<li class="tribe-events-list-widget-events <?php tribe_events_event_classes() ?>">
			<div class="card-flex-article card shadow">
			<?php
			$classes = array();

			$tribe_cat_slugs = tribe_get_event_cat_slugs( $post->ID );
			foreach ( $tribe_cat_slugs as $tribe_cat_slug ) {
				$classes[] = $tribe_cat_slug;
			}
			if (true
			) {
				/**
				 * Fire an action before the list widget featured image
				 */
				do_action( 'tribe_events_list_widget_before_the_event_image' );

				/**
				 * Allow the default post thumbnail size to be filtered
				 *
				 * @param $size
				 */
				$thumbnail_size = apply_filters( 'tribe_events_list_widget_thumbnail_size', 'post-thumbnail' );

				/**
				 * Filters whether the featured image link should be added to the Events List Widget
				 *
				 * @since 4.5.13
				 *
				 * @param bool $featured_image_link Whether the featured image link should be added or not
				 */
				$featured_image_link = apply_filters( 'tribe_events_list_widget_featured_image_link', true );
				$post_thumbnail      = get_the_post_thumbnail( null, $thumbnail_size );

				if ( $featured_image_link ) {
					$post_thumbnail = '<a href="' . esc_url( tribe_get_event_link() ) . '">' . $post_thumbnail . '</a>';
				}
				?>

  <div class="card-image">
		<?php
		// not escaped because it contains markup
		echo $post_thumbnail;
		/**
		 * Fire an action after the list widget featured image
		 */
		do_action( 'tribe_events_list_widget_after_the_event_image' );

	?>
		<span class="<?php echo $classes[0]; ?>-label label card-tag">
      <?php echo $classes[0]; ?>
    </span>
  </div>
<?php } ?>
<?php do_action( 'tribe_events_before_the_content' ); ?>  <div class="card-section">
    <h3 class="event-title"><a href="<?php echo esc_url( tribe_get_event_link() ); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
    <div class="event-details">
      <?php echo tribe_events_event_schedule_details() ?>
    </div>
    <p class="event-summary"><?php echo tribe_events_get_the_excerpt( null, wp_kses_allowed_html( 'post' ) ); ?></p>
  </div>
   <div class="card-divider align-right">
    <div class="user-info">
      <a href="<?php echo esc_url( tribe_get_event_link() ); ?>" class="tribe-events-read-more" rel="bookmark"><?php esc_html_e( 'Find out more', 'the-events-calendar' ) ?> &raquo;</a></span>
    </div>
  </div>

</div>
</li>
<?php
endforeach;
?>
</ol>
<?php endif;
