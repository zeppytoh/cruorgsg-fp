<?php
/*
Template Name: Front
*/
get_header(); ?>
<?php get_template_part( 'template-parts/front-hero-image' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile;?>
<section class="home-sections">
	<div class="home-section-wrapper">
		<section class="articles">
			<div class="home-grid">
				<h3 class="main-heading"><span class="first-line">Featured</span> <span class="title-word">Articles</span> </h3>
				<div class="grid-x grid-margin-x small-up-1 medium-up-4 large-up-2">
				<?php get_template_part( 'template-parts/featured-posts' ); ?>
				</div>
			</div>
				<hr />
			<div class="home-grid grid-padding-x align-center">
			<p class="cell align-center small-12 medium-8">Have a question you can't find an answer to on the site? <strong>Contact us by email or phone call.</strong> We’ll help you find what you need, from the ministry or training resource that’s right for you.</p>
			<button class="large primary button"><a href="/contact-us">Contact Us Today</a></button>
			<br />
			</div>
		</section>
	</div>
</section>
</section>
<section class="home-sections updates">
	<div class="home-section-wrapper">
		<section class="events">
			<div class="home-grid">
				<h3 class="main-heading"><span class="first-line">Check out our</span> <span class="title-word">Upcoming Events</span> </h3>
				<?php get_template_part( 'template-parts/category-event-slider' ); ?>
			</div>
		</section>
		<section class="social-media">
			<div class="home-grid">
				<?php get_template_part( 'template-parts/articles-list'); ?>
			</div>
			<div class="home-grid">
				<h3 class="main-heading"><span class="first-line">We also share on</span> <span class="title-word">Social Media</span> </h3>
			</div>
			<div class="grid-x">
				<a class="social-cell" href="<?php echo get_post_meta($post->ID, 'facebookURL', true); ?>"><i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i></a>
				<a class="social-cell" href="<?php echo get_post_meta($post->ID, 'instagramURL', true); ?>"><i class="fa fa-instagram fa-3x" aria-hidden="true"></i></a>
				<a class="social-cell" href="<?php echo get_post_meta($post->ID, 'twitterURL', true); ?>"><i class="fa fa-twitter fa-3x" aria-hidden="true"></i></a>
			</div>


		</section>
	</div>
</section>
<?php get_footer();
