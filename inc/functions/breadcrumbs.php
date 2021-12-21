<?php
/**
 * Generate breadcrumbs
 * @author CodexWorld
 * @authorURL www.codexworld.com
 */
function get_breadcrumb() {
    echo '<a class="text-decoration-none text-black" href="'.home_url().'" rel="nofollow"><i class="fas fa-home"></i></a>';
    if (is_category() || is_single()) {
        if(the_slug_exists('blog')){
            echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
            echo '<a class="text-decoration-none text-black" href="'. get_site_url().'/blog'.'" rel="nofollow">Blog</a>';
        }
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        the_category(' &bull; ');
            if (is_single()) {
                echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
                the_title();
            }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
    elseif(is_home()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;"; ?>
        <a href="<?php echo single_post_title(); ?>"><?php single_post_title(); ?></a>
    <?php }
}