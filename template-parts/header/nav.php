<?php
/** 
 * Header Navigation template
 * 
 * @package Gold Train
*/

$menu_class= \GOLD_TRAIN_THEME\Inc\Menus::get_instance();
$header_menu_id = $menu_class->get_menu_id('gold-train-header-menu');
$header_menus = wp_get_nav_menu_items($header_menu_id);
?>

<nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="dropdown" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">
    <?php
    if( function_exists('the_custom_logo') ){
      the_custom_logo();
    }
    
    ?>  
    </a>
        <?php
        wp_nav_menu( array(
            'theme_location'    => 'gold-train-header-menu',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
        <?php get_search_form(); ?>
    </div>

</nav>

<!-- <div class="w-100 bg-light gt-container">
  <div class="container pt-2 pb-2">

      <a class="gt-inline-link" ><?php printf( get_theme_mod('gold_train_brand_name', __( 'Lorem Ipsum', 'gold-train' ) ),); ?></a>
      <a class="gt-inline-link" href="tel:<?php printf( get_theme_mod('gold_train_phone_number', __( '+48500500500', 'gold-train' ) ),); ?>">
      <?php printf( get_theme_mod('gold_train_phone_number', __( '+48500500500', 'gold-train' ) ),); ?>
      </a>
      <a class="gt-inline-link" href="mailto:<?php printf( get_theme_mod('gold_train_email_address', __( 'email@twojafirma.pl', 'gold-train' ) ),); ?>">
      <?php printf( get_theme_mod('gold_train_email_address', __( 'email@twojafirma.pl', 'gold-train' ) ),); ?>
      </a>

  </div>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <?php
    if( function_exists('the_custom_logo') ){
      the_custom_logo();
    }
    
    ?>   
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <?php 
        if(!empty($header_menus) && is_array($header_menus)){ 
        ?>

          <ul class="navbar-nav mr-auto">

                <?php foreach($header_menus as $menu_item){
                    if(!$menu_item->menu_item_parent){

                        $child_menu_items = $menu_class->get_child_menu_items( $header_menus, $menu_item->ID );
                        $has_children =!empty($child_menu_items) && is_array($child_menu_items);
                      ?>


                            <?php if(!$has_children){ ?>
                              <li class="nav-item">
                                  <a class="nav-link" href="<?php echo esc_url( $menu_item->url );  ?>">
                                <?php echo esc_html( $menu_item->title);?>
                                </a>
                              </li>
                            <?php } 

                            else { ?>
                              <li class="nav-item dropdown">
                                
                                <a class="nav-link dropdown-toggle" href="<?php echo esc_url( $menu_item->url );  ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php echo esc_html( $menu_item->title);?>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <?php  foreach($child_menu_items as $child_menu_item){ ?>

                                    <a class="dropdown-item" href="<?php echo esc_url( $child_menu_item->url );  ?>">
                                    <?php echo esc_html( $child_menu_item->title);?>
                                  </a>
                                    
                                  <?php  } ?>
                                </div>
                              </li>

                              <?php } ?>


                              
                              

                      <?php
                    }
                }

                ?>


          </ul>
          <?php } ?>


        <form class="form-inline my-2 my-lg-0 d-flex flex-row">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
  </div>
</nav> -->


