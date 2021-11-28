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
        Dups::get_instance();
        Shortcodes::get_instance();
        Widget::get_instance();
        
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

        $post_formats = array(
            'aside', 'gallery'
        );

        add_theme_support('title-tag');
        add_theme_support('custom-background',$background_defaults);
        add_theme_support('custom-logo',$logo_defaults);
        add_theme_support('post-thumbnails');
        add_theme_support( 'post-formats', $post_formats );
        add_theme_support('customize-selective-theme-widgets');
        add_theme_support('automatic-feed-links');
        add_theme_support( 'html5', ['comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ] );
        //gutenberg
        // add_theme_support('wp-block-style');
        add_theme_support('wp-block-styles');
        add_theme_support('align-wide');
        add_theme_support('widgets-block-editor');
        add_theme_support('dark-editor-style');
        add_theme_support('editor-color-palette', [
            [
                'name' => __('Main gt profile color', 'txtdomain'),
                'slug' => 'main-profile',
                'color' => '#bd9869'
            ],
            [
                'name' => __('Secondary gt profile color', 'txtdomain'),
                'slug' => 'secondary-profile',
                'color' => '#846c54'
            ],
            [
                'name' => __('Third gt profile color', 'txtdomain'),
                'slug' => 'third-profile',
                'color' => '#7c6c54'
            ],
            [
                'name' => __('Fourth gt profile color', 'txtdomain'),
                'slug' => 'fourth-profile',
                'color' => '#040404'
            ],
            [
                'name' => __('Fifth gt profile color', 'txtdomain'),
                'slug' => 'fifth-profile',
                'color' => '#1b1c1e'
            ],
        ]);
        add_theme_support('custom-line-height');
        add_theme_support( 'editor-font-sizes', array(
            array(
                'name' => __( 'extra small', 'platetheme' ),
                'shortName' => __( 'XS', 'platetheme' ),
                'size' => 8,
                'slug' => 'small'
            ),
            array(
                'name' => __( 'regular', 'platetheme' ),
                'shortName' => __( 'M', 'platetheme' ),
                'size' => 16,
                'slug' => 'regular'
            ),
            array(
                'name' => __( 'large', 'platetheme' ),
                'shortName' => __( 'L', 'platetheme' ),
                'size' => 32,
                'slug' => 'large'
            ),
            array(
                'name' => __( 'larger', 'platetheme' ),
                'shortName' => __( 'XL', 'platetheme' ),
                'size' => 48,
                'slug' => 'larger'
            )
        ) );
        add_theme_support('responsive-embeds');
        add_theme_support('widgets');
        add_theme_support( 'customize-selective-refresh-widgets' );
        //additional css
        add_editor_style();

    

    }


}



?>