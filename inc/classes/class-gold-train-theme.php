<?php 
/**
 * Bootstraps the Theme
 * 
 * @package Gold Train
 */

namespace GOLD_TRAIN_THEME\Inc;

use  GOLD_TRAIN_THEME\Inc\Traits\Singleton;

class GOLD_TRAIN_THEME {
     use Singleton;

     protected function __construct() {

        //load classes
        Assets::get_instance(); // initiate instance of class Assets
        Menus::get_instance();
        
        $this->setup_hooks();
    }

    protected function setup_hooks() {

        //actions and filters

        add_action('after_setup_theme',[$this,'setup_theme']);

    }

    public function setup_theme(){

        global $content_width;
        if(!isset($content_width)){
            $content_width= 1240;
        }

        $logo_defaults = array(
            'height'               => 100,
            'width'                => 400,
            'flex-height'          => true,
            'flex-width'           => true,
            'header-text'          => array( 'site-title', 'site-description' ),
            'unlink-homepage-logo' => false
        );

        $background_defaults = array(
            'default-color' => 'ffffff',
            'default-image' => '',
            'default-position-x' => 'right',
            'default-position-y' => 'top',
            'default-repeat'     => 'no-repeat',
        );

        add_theme_support('title-tag');
        add_theme_support('custom-background',$background_defaults);
        add_theme_support('custom-logo',$logo_defaults);
        add_theme_support('post-thumbnails');
        add_theme_support('customize-selective-theme-widgets');
        add_theme_support('automatic-feed-links');
        add_theme_support( 'html5', ['comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ] );
        //gutenberg
        add_theme_support('wp-block-style');
        add_theme_support('align-wide');
        //additional css
        add_editor_style();

    

    }


}



?>