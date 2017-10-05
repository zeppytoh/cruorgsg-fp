<?php
/*
Template Name: Front
*/
get_header(); ?>
<header class="front-hero show-for-medium" role="banner">
	<div class="marketing">
		<div class="tagline">
			<h1>Win, Build, Send for the Global Harvest</h1>
			<h4 class="subheader"><?php bloginfo( 'description' ); ?></h4>
		</div>

		<div class="watch">
			<span id="stargazers"><a href="https://github.com/olefredrik/foundationpress">1.5k stargazers</a></span>
			<span id="twitter"><a href="https://twitter.com/olefredrik">@crusingapore</a></span>
		</div>
		<a style="background-color:rgba(0,0,0,0.5);color:white;text-decoration:none;padding:4px 6px;position: relative;bottom:-1rem;font-size:12px;font-weight:bold;line-height:1.2;display:inline-block;border-radius:3px;" href="https://unsplash.com/@ahyunlee?utm_medium=referral&amp;utm_campaign=photographer-credit&amp;utm_content=creditBadge" target="_blank" rel="noopener noreferrer" title="Download free do whatever you want high-resolution photos from Andy Lee"><span style="display:inline-block;padding:2px 3px;"><svg xmlns="http://www.w3.org/2000/svg" style="height:12px;width:auto;position:relative;vertical-align:middle;top:-1px;fill:white;" viewBox="0 0 32 32"><title></title><path d="M20.8 18.1c0 2.7-2.2 4.8-4.8 4.8s-4.8-2.1-4.8-4.8c0-2.7 2.2-4.8 4.8-4.8 2.7.1 4.8 2.2 4.8 4.8zm11.2-7.4v14.9c0 2.3-1.9 4.3-4.3 4.3h-23.4c-2.4 0-4.3-1.9-4.3-4.3v-15c0-2.3 1.9-4.3 4.3-4.3h3.7l.8-2.3c.4-1.1 1.7-2 2.9-2h8.6c1.2 0 2.5.9 2.9 2l.8 2.4h3.7c2.4 0 4.3 1.9 4.3 4.3zm-8.6 7.5c0-4.1-3.3-7.5-7.5-7.5-4.1 0-7.5 3.4-7.5 7.5s3.3 7.5 7.5 7.5c4.2-.1 7.5-3.4 7.5-7.5z"></path></svg></span><span style="display:inline-block;padding:2px 3px;">Andy Lee</span></a>
	</div>
	<div class="bottom-content-section" data-magellan data-threshold="0">
    <a href="#main-content-section"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 12c0-6.627-5.373-12-12-12s-12 5.373-12 12 5.373 12 12 12 12-5.373 12-12zm-18.005-1.568l1.415-1.414 4.59 4.574 4.579-4.574 1.416 1.414-5.995 5.988-6.005-5.988z"/></svg></a>
  </div>
</header>

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
<section class="intro" role="main">
	<div class="fp-intro" id="main-content-section" data-magellan-target="main-content-section">
		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
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
		</div>

	</div>
</section>
<?php endwhile;?>
<?php do_action( 'foundationpress_after_content' ); ?>

<section class="home-sections communities">
	<header class="home-grid grid-x grid-padding-x">
		<h2 class="main-heading shrink"><span class="first-line">Our Ministries serve</span> <span class="title-word">Communities</span> in various spheres and stages of life</h2>
	</header>
	<div class="home-grid">
        <a class="home-cell" href="#"><img src="https://unsplash.it/g/300/200/?image=42" alt="campus"><label class="label">Tertiary Students/<br />Postgraduates</label></a>
        <a class="home-cell" href="#"><img src="https://unsplash.it/g/300/200/?image=14" alt="young professionals"><label class="label">Young<br />Professionals</label></a>
        <a class="home-cell" href="#"><img src="https://unsplash.it/g/300/200/?image=52" alt="athletes"><label class="label">Athletes</label></a>
        <a class="home-cell" href="#"><img src="https://unsplash.it/g/300/200/?image=2" alt="healthcare"><label class="label">Families</label></a>
        <a class="home-cell" href="#"><img src="https://unsplash.it/g/300/200/?image=35" alt="musicians"><label class="label">Musicians &amp; Artists</label></a>
        <a class="home-cell" href="#"><img src="https://unsplash.it/g/300/200/?image=78" alt="churches"><label class="label">Church Leaders</label></a>
      </div>
    </div>
</section>
<section class="home-sections touchpoints">
	<div class="home-section-wrapper">
	<div class="training">
		<header class="home-grid">
			<h2 class="main-heading"><span class="first-line">We Provide</span> <span class="title-word">Training</span> through coaching, courses &amp; retreats…</h2>
		</header>
		<div class="grid-x align-justify grid-padding-x grid-padding-y small-up-2 medium-up-3">
		  <div class="cell"><a href="#" class="text-hide"><img src="https://unsplash.it/300/300/?random" alt="campus">Campus</a></div>
		  <div class="cell"><a href="#"><img src="https://unsplash.it/300/300/?image=24" alt="young professionals"></a></div>
		  <div class="cell"><a href="#"><img src="https://unsplash.it/300/300/?image=62" alt="athletes"></a></div>
		  <div class="cell"><a href="#"><img src="https://unsplash.it/300/300/?image=12" alt="healthcare"></a></div>
		  <div class="cell"><a href="#"><img src="https://unsplash.it/300/300/?image=13" alt="musicians"></a></div>
		  <div class="cell"><a href="#"><img src="https://unsplash.it/300/300/?image=88" alt="churches"></a></div>
		</div>
	</div>
	<div class="missions">
		<h2 class="main-heading">…and <strong>mission projects</strong> beyond Singapore</h2>
		<div class="home-grid grid-x align-justify grid-padding-x grid-padding-y small-up-2 medium-up-3 large-up-6">
			<div class="semantic">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/demo/semantic.svg" alt="semantic">
				<h3>Events</h3>
				<button class="large primary button"><a href="/events">See Events</a></button>
			</div>
			<div class="responsive">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/demo/responsive.svg" alt="responsive">
				<h3>Responsive</h3>
				<p>You can build for small devices first. Then, as devices get larger and larger, layer in more complexity for a complete responsive design.</p>

			</div>

			<div class="customizable">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/demo/customizable.svg" alt="customizable">
				<h3>Customizable</h3>
				<p>You can customize your build to include or remove certain elements, as well as define the size of columns, colors, font size and more.</p>

			</div>

			<div class="professional">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/demo/professional.svg" alt="professional">
				<h3>Professional</h3>
				<p>Millions of designers and developers depend on Foundation. We have business support, training and consulting to help grow your product or service.</p>
			</div>
		</div>
	</div>
</div>
</section>
<section class="home-sections ministries">
	<header class="home-grid">
		<h3 class="main-heading"><span class="first-line">Explore our family of</span><span class="title-word">Ministries</span> </h3>
	</header>
	<div class="home-section-wrapper">
		<div class="section-divider home-grid grid-x grid-padding-x grid-padding-y small-up-2 medium-up-3 large-up-4">
			<div class="cell"><a href="#"><img src="https://unsplash.it/300/200/?image=72" alt="athletes"></a></div>
			<div class="cell"><a href="#"><img src="https://unsplash.it/300/200/?image=32" alt="healthcare"></a></div>
			<div class="cell"><a href="#" class="text-hide"><img src="https://unsplash.it/300/200/?image=42" alt="campus">Campus</a></div>
			<div class="cell"><a href="#"><img src="https://unsplash.it/300/200/?image=14" alt="young professionals"></a></div>
			<div class="cell"><a href="#"><img src="https://unsplash.it/300/200/?image=52" alt="athletes"></a></div>
			<div class="cell"><a href="#"><img src="https://unsplash.it/300/200/?image=2" alt="healthcare"></a></div>
			<div class="cell"><a href="#"><img src="https://unsplash.it/300/200/?image=35" alt="musicians"></a></div>
			<div class="cell"><a href="#"><img src="https://unsplash.it/300/200/?image=78" alt="churches"></a></div>
		</div>

			<hr />

		<div class="home-grid grid-padding-x align-center">
		<p class="cell align-center lead">Have a question you can't find an answer to on the site? <strong>Contact us by email or phone call.</strong> We’ll help you find what you need, from the ministry or training resource that’s right for you.</p>
		<button class="large primary button"><a href="#">Contact Us Today</a></button>
	</div>
	</div> <!--grid-container-->

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
			<div class="home-grid grid-x">
				<a class="social-cell" href="#"><i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i><br />CruSingapore</a>
				<a class="social-cell" href="#"><i class="fa fa-instagram fa-3x" aria-hidden="true"></i><br />@crusingapore</a>
				<a class="social-cell" href="#"><i class="fa fa-twitter fa-3x" aria-hidden="true"></i><br />@crusingapore</a>
			</div>
				<?php get_sidebar('front-social-media'); ?>
		</section>
	</div>
</section>
<?php get_footer();
