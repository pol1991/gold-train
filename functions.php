<?php
/** 
* Theme Functions
*
*@package Gold Train
*
*/


if(!defined('GOLD_TRAIN_DIR_PATH')){

    define('GOLD_TRAIN_DIR_PATH', untrailingslashit( get_template_directory()));
};

if(!defined('GOLD_TRAIN_DIR_URI')){
    define('GOLD_TRAIN_DIR_URI', untrailingslashit( get_template_directory_uri()));
}

require_once GOLD_TRAIN_DIR_PATH . '/inc/helpers/autoloader.php';
require_once ( GOLD_TRAIN_DIR_PATH . '/inc/customize/customize.php' );
require_once ( GOLD_TRAIN_DIR_PATH . '/inc/functions/breadcrumbs.php' );
require_once ( GOLD_TRAIN_DIR_PATH . '/inc/functions/page-exists.php' );
require_once(GOLD_TRAIN_DIR_PATH  . '/inc/classes/class-wp-bootstrap-navwalker.php');

function gold_train_get_theme_instance(){
    \GOLD_TRAIN_THEME\Inc\GOLD_TRAIN_THEME::get_instance();
}

gold_train_get_theme_instance();

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	
}
add_action( 'after_setup_theme', 'register_navwalker' );




