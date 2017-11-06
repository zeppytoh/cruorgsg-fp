<?php
/*
Template Name: Ministry Landing
*/
get_header(); ?>
<header class="featured-header">
	<?php get_template_part( 'template-parts/featured-image-title' ); ?>
</header>
<div class="main-wrap" role="main">
	<article class="main-content">
<?php /* Start loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>
		<?php do_action( 'foundationpress_before_content' ); ?>
		<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
		<?php the_content(); ?>
		<?php do_action( 'foundationpress_after_content' ); ?>
<?php endwhile;?>
	</article>
</div>
<section class="home-sections updates">
	<div class="home-section-wrapper">
		<section class="events">
			<div class="home-grid">
				<h3 class="main-heading"><span class="first-line">Check out our</span> <span class="title-word">Events</span> </h3>
				<?php get_template_part( 'template-parts/event-slider' ); ?>

			</div> <!--grid-container-->
		</section>
		<section class="social-media">
			<div class="home-grid">
				<h3 class="main-heading"><span class="first-line">Follow us on</span> <span class="title-word">Social Media</span> </h3>
			</div>

			<ul class="tabs" data-responsive-accordion-tabs="tabs" id="social-media-tabs">
				<li class="tabs-title is-active"><a href="#panel1" aria-selected="true"><i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i></a></li>
				<li class="tabs-title"><a href="#panel2"><i class="fa fa-instagram fa-3x" aria-hidden="true"></i></a></li>
			</ul>
			<div class="tabs-content" data-tabs-content="social-media-tabs">
				<div class="tabs-panel is-active" id="panel1">
					<div class="tabs-panel-fb">
						<?php get_sidebar('front-facebook'); ?>
					</div>
			  </div>
				<div class="tabs-panel" id="panel2">
					 <?php get_sidebar('front-social-media'); ?>
				</div>
			</div>

		</section>
	</div>
</section>
<?php get_footer();