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
<section class="main-wrap full-width" role="main">
<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">

		<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
		<div class="entry-content">
			<?php the_content(); ?>
		</div>
		<footer>
			<?php
				wp_link_pages(
					array(
						'before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ),
						'after'  => '</p></nav>',
					)
				);
			?>
			<p><?php the_tags(); ?></p>
		</footer>

		<?php do_action( 'foundationpress_page_before_comments' ); ?>
		<?php comments_template(); ?>
		<?php do_action( 'foundationpress_page_after_comments' ); ?>
	</article>
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>

</section>
<section class="home-sections content-footer-section">
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
</section>
<?php get_footer();
