<?php
/**
 * Register Menus
 * @package Gold Train
 */

 namespace GOLD_TRAIN_THEME\Inc;

 use GOLD_TRAIN_THEME\Inc\Traits\Singleton;

class Menus{
    use Singleton;

    protected function __construct() {

        // load class;

        $this->setup_hooks();

    }

    protected function setup_hooks() {
        //actions and filters
        add_action('init', [$this,'register_menus']);
    }

    public function register_menus() {
        register_nav_menus(
          [
            'gold-train-header-menu' => esc_html__( 'Header Menu', 'gold-train' ),
            'gold-train-footer-menu' => __( 'Footer Menu', 'gold-train' )
          ]
        );
      }



}
