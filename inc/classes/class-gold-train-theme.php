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
        $this->set_hooks();
    }

    protected function set_hooks() {
        //actions and filters

    }
}

?>