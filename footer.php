<?php

/** 
 * Footer template
 * @package Gold Train
 * 
 */
?>
<section class="w-100 ">
    <div class="container">
        <div class="row" >
            <?php get_template_part('template-parts/footer/footer-widget'); ?>
        </div>
    </div>
</section>
<footer class="footer-container w-100" >
    <section class="w-100" >
        <div class="container">
            <div class="row" >
            <?php get_template_part('template-parts/footer/f-info-bar'); ?>
            </div>
        </div>
    </section>
    <section class="w-100">
        <div class="container">
            <div class="row">
                <h1>Stopka</h1>
            </div>
        </div>
    </section>
    <section class="w-100">
        <div class="container">
            <div class="d-flex flex-column justify-content-center align-items-center pt-4 pb-4" >
                <?php
                if ( get_theme_mod( 'gold_train_footer_image') > 0 ):
                    echo wp_get_attachment_image( get_theme_mod('gold_train_footer_image'), 'thumbnail' );  ?>
                    <p><?php bloginfo('name'); ?> &copy; <?php the_time('Y'); ?></p>
                <?php else: ?>
                     <p><?php bloginfo('name'); ?> &copy; <?php the_time('Y'); ?></p>
                <?php endif;
                ?>
            </div>
        </div>
    </section>
</footer>
<?php wp_footer(); ?>
</body>

</html>