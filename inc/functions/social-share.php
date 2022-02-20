<?php
/**
 * Social share buttons
 * @author GAVICKPRO TEAM 
 * @authorURL https://www.gavick.com/blog/wordpress-social-media-share-buttons-without-plugin
 */
function gk_social_buttons($content) {
    global $post;
    $permalink = get_permalink($post->ID);
    $title = get_the_title();
    if(!is_feed() && !is_home() && !is_page()) {
        $content = $content . '<div class="gk-social-buttons">
          
        <a class="icon-twitter" href="http://twitter.com/share?text='.$title.'&url='.$permalink.'"
            onclick="window.open(this.href, \'twitter-share\', \'width=550,height=235\');return false;">
            <span>Twitter</span>
        </a>   
              
        <a class="icon-fb" href="https://www.facebook.com/sharer/sharer.php?u='.$permalink.'"
             onclick="window.open(this.href, \'facebook-share\',\'width=580,height=296\');return false;">
            <span>Facebook</span>
        </a>
          
        <a class="icon-gplus" href="https://plus.google.com/share?url='.$permalink.'"
           onclick="window.open(this.href, \'google-plus-share\', \'width=490,height=530\');return false;">
            <span>Google+</span>
        </a>
    </div>';
    }
    return $content;
}
add_filter('the_content', 'gk_social_buttons');