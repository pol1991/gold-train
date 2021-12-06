<?php
/**
 * check if page exists
 * @author CodexWorld
 * @authorURL www.codexworld.com
 */
function the_slug_exists($post_name) {
global $wpdb;
if($wpdb->get_row("SELECT post_name FROM wp_posts WHERE post_name = '" . $post_name . "'", 'ARRAY_A')) {
    return true;
} else {
    return false;
}
}