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
<div class="home-sections content-footer-section">
	<div class="home-section-wrapper">
		<section class="cf-secondary">
			<div class="home-grid">

				<?php get_sidebar('content-footer'); ?>

			</div> <!--grid-container-->
		</section>
		<section class="cf-tertiary">
			<div class="home-grid grid-x">

				<?php get_sidebar('front-social-media'); ?>
			</div>
		</section>
	</div>
<div>
<?php get_footer();
