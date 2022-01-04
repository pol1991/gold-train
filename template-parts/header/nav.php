<section class="pb-lg-2">
  <div class="row">
    <div class="col-12">
      <div class="container d-flex flex-column flex-lg-row">
        <div class="col-12 col-lg-6 d-flex flex-column flex-lg-row">
          <div class="text-center text-lg-left">
            <?php
            if (function_exists('the_custom_logo')) {
              the_custom_logo();
            }
            ?>
          </div>
          <nav class="justify-content-center navbar navbar-expand-md text-white text-decoration-none" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'gold-train'); ?>">
              <span class="navbar-toggler-icon"></span>
            </button>
            <?php
            wp_nav_menu(array(
              'theme_location'    => 'gold-train-header-menu',
              'depth'             => 2,
              'container'         => 'div',
              'container_class'   => 'collapse navbar-collapse',
              'container_id'      => 'bs-example-navbar-collapse-1',
              'menu_class'        => 'nav navbar-nav text-white',
              'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
              'walker'            => new WP_Bootstrap_Navwalker(),
            ));
            ?>
          </nav>
        </div>
        <div class=" col-12 col-lg-6 align-self-center pr-lg-0 ">
          <?php get_template_part('template-parts/header/searchform'); ?>
        </div>
      </div>
    </div>
  </div>
</section>