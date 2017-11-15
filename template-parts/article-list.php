<?php
/**
 * The default template part for displaying article cards on the home page
 *
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

 if ( ! defined( 'ABSPATH' ) ) {
 	die( '-1' );
 }
 ?>
<?php
  $custom_query = new WP_Query('posts_per_page=5'); // include category 1;
?>
<?php if ( $custom_query->have_posts() ) : ?>
  <?php /* Start the Loop */ ?>
  <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
    <div class="cell">
    <div class="card-flex-article card" id="post-<?php the_ID(); ?>" >
        <?php if ( has_post_thumbnail( $post->ID ) ) : ?>
          <img class="card-user-profile-img" src="<?php echo the_post_thumbnail_url('fp-small'); ?>" />
        <?php endif; ?>

          <div class="card-user-profile-content card-section">
          <p class="card-user-profile-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
        	<p class="card-user-profile-status"><?php foundationpress_entry_meta(); ?></p>
          <div class="card-user-profile-info">
        		<?php the_excerpt( __( 'Continue reading...', 'foundationpress' ) ); ?>
        	</div>
        <footer class="card-user-profile-actions">
      		<?php $tag = get_the_tags(); if ( $tag ) { ?><p class="entry-tags"><?php the_tags(); ?></p><?php } ?>
      	</footer>
      </div>
    </div>
  </div>
  <?php endwhile; ?>
  <?php wp_reset_postdata(); // reset the query ?>

<?php endif; // End have_posts() check. ?>
