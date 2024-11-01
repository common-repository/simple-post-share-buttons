<?php
/*
Plugin Name:  Simple Post Share Buttons
Description:  It's a simple post share plug-ins for sharing the post on social media platforms. 
Version:      1.0
Author:       Mark Hurrley 
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  simple-post-share-buttons
Domain Path:  /languages
*/

function simple_post_share_buttons_fun($content) {
 
// Only do this when a single post is displayed
if ( is_single() ) { 
 // Created the variable for post url
 $post_url = get_the_permalink(get_the_ID());

// Added the URLs Twitter and Facebook on posts
 
$content .= '<p class="follow-us">If you liked this article, then please share the post on <a href="https://twitter.com/intent/tweet?url='.$post_url.'" title="Post on Twitter" target="_blank" rel="nofollow">Twitter</a> and <a href="https://www.facebook.com/sharer/sharer.php?u='.$post_url.'" title="Post on Facebook" target="_blank" rel="nofollow">Facebook</a>.</p>';
 
} 
// Return the content
return $content; 
 
}
// Hook our function to WordPress the_content filter
add_filter('the_content', 'simple_post_share_buttons_fun'); 