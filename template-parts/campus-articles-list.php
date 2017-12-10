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
   $custom_query = new WP_Query( array( 'posts_per_page' => 5,
     'category_name' => 'campus'));
 ?>
<?php if ( $custom_query->have_posts() ) : ?>
    <div class="panel-content">
      <section class="posts-list">
  <?php /* Start the Loop */ ?>
  <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
    <div class="post-item">

        <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <div class="post-meta">
          <span class="meta"><span class="meta-icon fa fa-clock-o" aria-hidden="true"></span><span class="meta-text"><?php foundationpress_entry_meta(); ?></span></span>
        </div>
      <?php if ( has_post_thumbnail( $post->ID ) ) : ?>
        <a href="<?php the_permalink(); ?>" class="post-thumbnail">
          <img src="<?php echo the_post_thumbnail_url('thumbnail'); ?>" />
        </a>
      <?php endif; ?>
      <div class="post-text">


        <div class="post-summary">
          <p><?php the_excerpt(); ?>
          </p>
        </div>
      </div>
    </div>
  <?php endwhile; ?>
  <?php wp_reset_postdata(); // reset the query ?>
    </section>
  </div>

<?php endif; // End have_posts() check. ?>
