<?php
/*
Template Name: Campus Ministry Home Page
Description: This page provides widget areas and custom event sliders
based on a custom page field.
*/
get_header('campus'); ?>
<?php get_template_part( 'template-parts/campus-hero-image' ); ?>

<div class="main-wrap">
	<main class="main-content-full-width">
		<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'template-parts/content', 'campus-homepage' ); ?>
		<?php endwhile;?>
	</main>
</div>
<section class="home-sections campuses">
	<div class="home-grid grid-x grid-padding-x">
		<div class="cell small-12 medium-10 medium-offset-1">

		<h2 class="main-heading shrink h3"><span class="first-line">Find us in </span> <span class="title-word">Tertiary Institutions</span> all over Singapore</h2>
		<div class="grid-x">
		<?php
		$args = array(
		    'post_type'      => 'page',
		    'posts_per_page' => -1,
		    'post_parent'    => $post->ID,
		    'order'          => 'ASC',
		    'orderby'        => 'menu_order'
		 );
		$parent = new WP_Query( $args );

		if ( $parent->have_posts() ) : ?>
		    <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>
					<div class="image-hover-wrapper">
						<a href="<?php the_permalink(); ?>"><img src="<?php echo get_post_meta(get_the_ID(), 'labelThumbnail', true); ?>"</a>
						<span class="image-hover-wrapper-banner"><?php echo the_title(); ?></span>
					</div>
		    <?php endwhile; ?>
		<?php endif; wp_reset_postdata(); ?>
	</div>
	</div>
</div>
</section>
<section class="home-sections related">
	<?php get_sidebar('content-footer'); ?>
</section>
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
				<h3 class="main-heading"><span class="first-line">Read latest posts on</span><span class="title-word">The Blog</span></h3>
			</div>
			<div class="grid-x align-center">
				<div class="home-grid">
					<?php
					get_template_part( 'template-parts/campus-articles-list'); ?>
				</div>
			</div>
		</section>
	</div>
</section>


<?php get_footer();
