<?php
/*
Template Name: Image Header Fullwidth Notitle
*/
get_header(); ?>
<header class="featured-header">
	<?php get_template_part( 'template-parts/featured-image' ); ?>
</header>
<section class="intro">
<div class="main-wrap">
	<main class="main-content-full-width">
		<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'template-parts/content', 'page' ); ?>
		<?php comments_template(); ?>
		<?php endwhile;?>
	</main>
</div>
</section>
<?php get_footer();
