<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

 get_header(); ?>
 <header class="featured-header">
 <?php get_template_part( 'template-parts/featured-image' ); ?>
 	<div class="title-wrapper">
 		<h1 class="entry-title"><?php the_title(); ?></h1>
 	</div>
 </header>
 <div class="main-wrap">
   <main class="main-content">
     <?php while ( have_posts() ) : the_post(); ?>
		 	<?php get_template_part( 'template-parts/content', 'page' ); ?>
			<?php comments_template(); ?>
   <?php endwhile;?>
  </main>
<?php get_sidebar(); ?>
</div>
<?php get_footer();
