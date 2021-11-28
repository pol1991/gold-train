<?php
/**
 * View shortcodes
 * 
 * @package Gold Train
 */

 namespace GOLD_TRAIN_THEME\Inc;

 use GOLD_TRAIN_THEME\Inc\Traits\Singleton;

//  if(is_admin())
// {
//     // Create the Paulund toolbar
//     $shortcodes = new Shortcodes();
// }


class Shortcodes{
    use Singleton;

    protected function __construct() {

        // load class;
        $this->Admin();
        $this->setup_hooks();

    }

    protected function setup_hooks() {
        //actions and filters
        
    }

    /**
     * Create the admin area
     */
    public function Admin(){
        add_action( 'admin_menu', array(&$this,'Admin_Menu') );
    }

    /**
     * Function for the admin menu to create a menu item in the settings tree
     */
    public function Admin_Menu(){
        add_submenu_page(
            'options-general.php',
            'View All Shortcodes',
            'View All Shortcodes',
            'manage_options',
            'view-all-shortcodes',
            array(&$this,'Display_Admin_Page'));
    }

    /**
     * Display the admin page
     */
    public function Display_Admin_Page(){
        global $shortcode_tags;

        ?>
        <div class="wrap">
            <div id="icon-options-general" class="icon32"><br></div>
            <h2>View All Available Shortcodes</h2>
            <div class="section panel">
                <p>This page will display all of the available shortcodes that you can use on your Wordpress blog.</p>
            <table class="widefat importers">
                <tr><td><strong>Shortcodes</strong></td></tr>
        <?php

            foreach($shortcode_tags as $code => $function)
            {
                ?>
                    <tr><td>[<?php echo $code; ?>]</td></tr>
                <?php
            }
        ?>

            </table>
            </div>
        </div>
        <?php
    }
} // END class Shortcodes

