<?php
/*
Template Name: Landing-Page-Full Width
*/
get_header(); ?>
<header class="featured-header">
	<?php get_template_part( 'template-parts/featured-image' ); ?>
</header>
<section class="intro">
<?php /* Start loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>
	<?php do_action( 'foundationpress_before_content' ); ?>
	<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
	<?php the_content(); ?>
	<?php do_action( 'foundationpress_after_content' ); ?>
<?php endwhile;?>
</section>
<?php get_footer();
