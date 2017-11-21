<?php
/*
Template Name: Full Width
*/
get_header(); ?>
<header class="featured-header">
	<div class="title-wrapper">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</div>
	<?php get_template_part( 'template-parts/featured-image' ); ?>
</header>
<div class="main-wrap">
	<main class="main-content-full-width">
		<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'template-parts/content', 'page' ); ?>
		<?php comments_template(); ?>
		<?php endwhile;?>
	</main>
</div>

<?php get_footer();
