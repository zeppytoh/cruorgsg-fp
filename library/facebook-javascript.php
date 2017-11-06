<?php
/**
 * Allow functions to get custom events
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */


/* Custom query for event list widget*/
function crusg_insert_facebook_javascript() {

    return "<div id='fb-root'></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=1432755250364071';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script> ";

}
add_filter( 'foundationpress_after_body', 'crusg_insert_facebook_javascript' );
