<?php
/**
 * The default template part for displaying related pages or posts at the bottom of the content
 *
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

 if ( ! defined( 'ABSPATH' ) ) {
 	die( '-1' );
 }
 ?>
<section class="home-sections related">
  <h3 class="main-heading"><span class="first-line">Check out</span> <span class="title-word">Related Resources</span> </h3>
  <div class="related-grid grid-padding-x align-spaced">
<?php
    $custom_query = new WP_Query( array('cat' => 1, 'posts_per_page'=>4)); // include category 1;
   if ( $custom_query->have_posts() ) : ?>

  <?php /* Start the Loop */ ?>
  <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
    <div class="related-cell small-6 medium-3" <?php if ( has_post_thumbnail( $post->ID ) ) : ?>
      style="background:url(<?php echo the_post_thumbnail_url('thumbnail'); ?>)"
    <?php else: ?>
      style="background-color: blue;"
    <?php endif; ?>>
        <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      </div>
  <?php endwhile; ?>
  <?php wp_reset_postdata(); // reset the query ?>
  </div>
</section>

<?php endif; // End have_posts() check. ?>
