<?php

/** 
 * Footer template
 * @package Gold Train
 * 
 */
?>
<section class="w-100 ">
    <div class="container">
        <div class="row">
            <?php get_template_part('template-parts/footer/footer-widget'); ?>
        </div>
    </div>
</section>
<footer class="footer-container w-100 bg-gt-dark">
    <section class="w-100">
        <div class="container">
            <div class="row">
                <?php get_template_part('template-parts/footer/footer-content-widget'); ?>
            </div>
        </div>
    </section>
    <section class="w-100">

        <div class="row">
            <div class="col-12">
                <div class="container">

                    <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center pt-4">
                        <div class=" pl-lg-0 col-12 col-lg-6 d-flex flex-column flex-lg-row justify-content-center justify-content-lg-start align-items-center text-white">
                            <?php
                            if (get_theme_mod('gold_train_footer_image') > 0) :
                                echo wp_get_attachment_image(get_theme_mod('gold_train_footer_image'), 'extra-small');  ?>
                                <p class="my-0 px-1"><?php esc_attr(bloginfo('name')); ?> &copy; <?php esc_attr(the_time('Y')); ?></p>
                            <?php else : ?>
                                <p class="my-0"><?php esc_attr(bloginfo('name')); ?> &copy; <?php esc_attr(the_time('Y')); ?></p>
                            <?php endif;
                            ?>
                        </div>
                        <div class="col-12 col-lg-6 d-flex flex-column flex-lg-row justify-content-center justify-content-lg-end align-items-center pr-lg-0">
                            <?php get_template_part('template-parts/footer/f-info-bar'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="w-100">
        <div class="row">
            <div class="col-12">
                <div class="container">
                    <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center">
                        <div class="col-12 d-flex flex-column flex-lg-row justify-content-center align-items-center text-white">
                        <nav class="justify-content-center navbar navbar-expand-md text-white text-decoration-none" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-controls="bs-example-navbar-collapse-2" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'gold-train'); ?>">
              <div class="text-white d-inline-flex"><p class="mr-1">Menu</p></div>
            </button>
            <?php
            wp_nav_menu(array(
              'theme_location'    => 'gold-train-footer-menu',
              'depth'             => 2,
              'container'         => 'div',
              'container_class'   => 'collapse navbar-collapse',
              'container_id'      => 'bs-example-navbar-collapse-2',
              'menu_class'        => 'nav navbar-nav text-white',
              'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
              'walker'            => new WP_Bootstrap_Navwalker(),
            ));
            ?>
          </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="w-100">
        <div class="row">
            <div class="col-12">
                <div class="container">
                    <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center">
                        <div class="col-12 d-flex flex-column flex-lg-row justify-content-center align-items-center text-white">
                            <p class="mb-0 mt-0 pr-1">Created by:</p><img src="<?php echo get_template_directory_uri(); ?>/pol.jpg" width="32" height="32">
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>
<?php wp_footer(); ?>
</body>

</html>