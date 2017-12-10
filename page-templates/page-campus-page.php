<?php
/*
Template Name: Campus Subpage
*/
get_header('campus'); ?>
<header class="featured-header">
	<div class="title-wrapper">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</div>
	<?php get_template_part( 'template-parts/featured-image' ); ?>
</header>
<div class="main-wrap">
	<main class="main-content-full-width">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', 'campus-homepage' ); ?>

		<?php endwhile;?>
	</main>
	<aside class="main-content-full-width sm">
		<?php get_sidebar('front-social-media'); ?>
	</aside>
</div>
<?php get_footer('campus');
