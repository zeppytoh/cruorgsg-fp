<?php
/*
Template Name: Colorheader Fullwidth
*/
get_header(); ?>
<header class="featured-header">
	<div class="title-wrapper">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</div>
	<?php get_template_part( 'template-parts/featured-image' ); ?>
</header>
<section class="home-section">

<div class="main-wrap">
	<main class="main-content-full-width">
		<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'template-parts/content', 'page' ); ?>
		<?php comments_template(); ?>
		<?php endwhile;?>
	</main>
	<aside class="main-content-full-width sm">
		<?php get_sidebar('front-social-media'); ?>
	</aside>
</div>
</section>
<?php get_sidebar('content-footer'); ?>
<?php get_footer();
