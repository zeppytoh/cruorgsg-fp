<?php
/*
Template Name: Ministry Page
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
		<?php wp_list_pages(array('child_of'=> get_the_ID())); ?>

		<?php endwhile;?>
	</main>
</div>
<section class="content-footer-section">
	<div class="home-section-wrapper">
		<section class="cf-secondary">
			<div class="grid-x">
				<h3 class="main-heading"><span class="first-line">Check Out Our</span><span class="title-word">Upcoming Events</span></h3>
				<?php get_template_part( 'template-parts/category-event-slider' ); ?>
			</div> <!--grid-container-->
		</section>
		<section class="cf-tertiary">
			<div class="grid-x">
				<h3 class="main-heading"><span class="first-line">Follow us on</span><span class="title-word">Social Media</span></h3>
			</div>
			<div class="grid-x align-center">
				<a class="social-cell" href="http://facebook.com/CruSingapore"><i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i><br>CruSingapore</a>
				<a class="social-cell" href="http://facebook.com/CruSingapore"><i class="fa fa-instagram fa-3x" aria-hidden="true"></i><br>@crusingapore</a>
			</div>
			<div class="grid-x align-center">
				<?php get_sidebar() ?>
			</div>
		</section>
	</div>
</section>


<?php get_footer();
