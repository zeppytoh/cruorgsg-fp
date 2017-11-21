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
				<h3 class="main-heading"><span class="first-line">Read our recent</span> <span class="title-word">Articles</span> </h3>
				<div class="grid-x grid-margin-x small-up-1 medium-up-4">
				<?php get_template_part( 'template-parts/article-list' ); ?>
				</div>
			</div>
				<hr />
			<div class="home-grid grid-padding-x align-center">
			<p class="cell align-center small-12 medium-8">Have a question you can't find an answer to on the site? <strong>Contact us by email or phone call.</strong> We’ll help you find what you need, from the ministry or training resource that’s right for you.</p>
			<button class="large primary button"><a href="/contact-us">Contact Us Today</a></button>

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
				<?php get_template_part( 'template-parts/event-slider' ); ?>

			</div> <!--grid-container-->
		</section>
		<section class="social-media">
			<div class="home-grid">
				<h3 class="main-heading"><span class="first-line">We also share on</span> <span class="title-word">Social Media</span> </h3>
			</div>

			<ul class="tabs" data-responsive-accordion-tabs="tabs" id="social-media-tabs">
				<li class="tabs-title is-active"><a href="#panel1" aria-selected="true"><i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i>@crusingapore</a></li>
				<li class="tabs-title"><a href="#panel2"><i class="fa fa-instagram fa-3x" aria-hidden="true"></i>@crusingapore</a></li>
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
