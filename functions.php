<?php
/** 
* Theme Functions
*
*@package Gold Train
*
*/


function gold_train_enqueue_scripts() {

    /** Register Styles */
    wp_register_style('bootstrap', get_template_directory_uri().'/assets/src/bootstrap/css/bootstrap.min.css', [] , false, 'all');
    wp_register_style('theme-variables', get_template_directory_uri().'/assets/css/theme-variables.css', [], filemtime( get_template_directory().'/assets/css/theme-variables.css'), 'all');
    wp_register_style('style', get_stylesheet_uri(), ['theme-variables'], filemtime( get_template_directory().'/style.css' ), 'all' );

    /** Register Scripts */
    wp_register_script('main', get_template_directory_uri().'/assets/js/main.js', [], filemtime( get_template_directory().'/assets/js/main.js' ),true );
    wp_register_script('bootstrap', get_template_directory_uri().'/assets/src/bootstrap/js/bootstrap.min.js', ['jquery'] , false, true);

    /** Enqueue Styles */
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('style');
    wp_enqueue_style('theme-variables');

    /** Enqueue Scripts */
    wp_enqueue_script('main');
    wp_enqueue_script('bootstrap');

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