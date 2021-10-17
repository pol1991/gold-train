<?php
/** 
* Theme Functions
*
*@package Gold Train
*/


function gold_train_enqueue_scripts() {

    /** Register Styles */
    wp_register_style('theme-variables', get_template_directory_uri().'/assets/css/theme-variables.css', [], filemtime( get_template_directory().'/assets/css/theme-variables.css'), 'all');
    wp_register_style('style', get_stylesheet_uri(), ['theme-variables'], filemtime( get_template_directory().'/style.css' ), 'all' );

    /** Register Scripts */
    wp_register_script('main-js', get_template_directory_uri().'/assets/js/main.js', [], filemtime( get_template_directory().'/assets/js/main.js' ),true );

    /** Enqueue Styles */
    wp_enqueue_style('style');
    wp_enqueue_style('theme-variables');

    /** Enqueue Scripts */
    wp_enqueue_script('main-js');

    /**
     * wp_register_style('style', get_stylesheet_uri(), ['theme-variables'], filemtime( get_template_directory().'/style.css' ), 'all' );
     *
     * if(is_archive()){
     * wp_enqueue_style('style');
     * }
     */
}

add_action('wp_enqueue_scripts', 'gold_train_enqueue_scripts');
?>