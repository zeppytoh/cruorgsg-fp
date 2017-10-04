<?php
/**
 * The default template part for displaying events
 *
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

do_action( 'tribe_events_before_template' );
?>

	<!-- Tribe Bar -->
	<!-- Main Events Content -->
<?php tribe_get_template_part( 'list/content' ); ?>

	<div class="tribe-clear"></div>

<?php
do_action( 'tribe_events_after_template' ); ?>

<div class="card-flex-article card shadow">
  <div class="card-image">
    <img src="https://unsplash.it/g/800/600" />
    <span class="label alert card-tag">#Birdie</span>
  </div>
  <div class="card-section">
    <h3 class="article-title">Glo-Pro</h3>
    <div class="article-details">
      <span class="website">Cru Centre</span> &#8226;
      <span class="time">5 Oct 8pm</span> &#8226;
      <span class="author">Family Life</span>
    </div>
    <p class="article-summary">This is a quick summary area of the first few sentences from the post. It will be a few sentences.</p>
  </div>
   <div class="card-divider align-middle">
     <div class="avatar with-add-icon">
       <img src="https://placehold.it/35" alt="avatar" />
       <i class="fa fa-plus-circle" aria-hidden="true"></i>
     </div>
    <div class="user-info">
      <p class="user-name">Name</p>
      <p class="category">added to <strong>Category</strong></p>
    </div>
  </div>
  <div class="card-divider align-justify">
    <div class="notability">
      <span class="publications">Publication Number</span> &#8226;
      <span class="likes"># Likes</span>
    </div>
    <div class="card-actions">
      <i class="fa fa-heart-o" aria-hidden="true"></i>
      <i class="fa fa-plus" aria-hidden="true"></i>
      <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
    </div>
  </div>
</div>
