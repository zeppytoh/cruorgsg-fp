<?php
/*
Template Name: Image Header with Title
*/
get_header(); ?>
<header class="featured-header">
	<div class="title-wrapper">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</div>
	<?php get_template_part( 'template-parts/featured-image' ); ?>
</header>
<section class="intro">
	<div class="main-wrap">
		<main class="main-content-full-width">
<?php /* Start loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>
	<?php the_content(); ?>
<?php endwhile;?>
		</main>
	</div>
</section>
<?php get_footer();
