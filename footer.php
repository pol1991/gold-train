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
<footer class="footer-container w-100">
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

                    <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center pt-4 pb-4">
                        <div class=" pl-lg-0 col-12 col-lg-6 d-flex flex-column flex-lg-row justify-content-center justify-content-lg-start align-items-center">
                            <?php
                            if (get_theme_mod('gold_train_footer_image') > 0) :
                                echo wp_get_attachment_image(get_theme_mod('gold_train_footer_image'), 'extra-small');  ?>
                                <p class="my-0 px-1" ><?php esc_attr(bloginfo('name')); ?> &copy; <?php esc_attr(the_time('Y')); ?></p>
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
        </div>-
    </section>
</footer>
<?php wp_footer(); ?>
</body>

</html>