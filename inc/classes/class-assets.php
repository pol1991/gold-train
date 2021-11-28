<?php
/**
 * Enqueue theme assets
 * 
 * @package Gold Train
 */

 namespace GOLD_TRAIN_THEME\Inc;

 use GOLD_TRAIN_THEME\Inc\Traits\Singleton;

class Assets{
    use Singleton;

    protected function __construct() {

        // load class;

        $this->setup_hooks();

    }

    protected function setup_hooks() {
        //actions and filters
        add_action('wp_enqueue_scripts', [$this,'register_styles']);
        add_action('wp_enqueue_scripts', [$this,'register_scripts']);
    }

    public function register_styles() {
        /** Register Styles */
        wp_register_style('bootstrap-min', GOLD_TRAIN_DIR_URI.'/assets/src/bootstrap/css/bootstrap.min.css', [] , false, 'all');
        wp_register_style('bootstrap', GOLD_TRAIN_DIR_URI.'/assets/src/bootstrap/css/bootstrap.css', [] , false, 'all');
        wp_register_style('theme-variables', GOLD_TRAIN_DIR_URI.'/assets/css/theme-variables.css', [], filemtime( GOLD_TRAIN_DIR_PATH.'/assets/css/theme-variables.css'), 'all');
        wp_register_style('style', get_stylesheet_uri(), ['theme-variables'], filemtime( GOLD_TRAIN_DIR_PATH.'/style.css' ), 'all' );
            /** Enqueue Styles */
        wp_enqueue_style('bootstrap-min');
        wp_enqueue_style('bootstrap');
        wp_enqueue_style('style');
        wp_enqueue_style('theme-variables');

}

    public function register_scripts() {
        /** Register Scripts */
        wp_register_script('main', GOLD_TRAIN_DIR_URI.'/assets/js/main.js', [], filemtime( GOLD_TRAIN_DIR_PATH.'/assets/js/main.js' ),true );
        wp_register_script('bootstrap', GOLD_TRAIN_DIR_URI.'/assets/src/bootstrap/js/bootstrap.js', ['jquery'] , false, false);
        wp_register_script('bootstrap-min', GOLD_TRAIN_DIR_URI.'/assets/src/bootstrap/js/bootstrap.min.js', ['jquery'] , false, false);
    
    
        /** Enqueue Scripts */
               wp_enqueue_script('main');
        wp_enqueue_script('bootstrap');
        wp_enqueue_script('bootstrap-min');

}



}
