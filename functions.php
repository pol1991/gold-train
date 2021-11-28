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


function gold_train_get_theme_instance(){
    \GOLD_TRAIN_THEME\Inc\GOLD_TRAIN_THEME::get_instance();
}

gold_train_get_theme_instance();



