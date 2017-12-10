<?php
/*
Template Name: Ministry Page with Image Header
Description: This page provides widget areas and custom event sliders
based on a custom page field.
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
		<?php endwhile;?>
	</main>
</div>
<?php get_sidebar('content-footer'); ?>

<section class="content-footer-section">
	<div class="home-section-wrapper">
		<section class="cf-secondary">
			<div class="grid-x">
				<h3 class="main-heading"><span class="first-line">Check Out Our</span><span class="title-word">Upcoming Events</span></h3>
				<?php get_template_part( 'template-parts/category-event-slider' ); ?>
			</div> <!--grid-container-->
		</section>
		<section class="cf-tertiary">

			<div class="grid-x align-center">
				<?php
				get_template_part( 'template-parts/category-articles-list'); ?>
				<?php get_sidebar('front-social-media'); ?>

			</div>
		</section>
	</div>
</section>


<?php get_footer();
