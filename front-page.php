<?php

/** 
 * Template Name: Front Page
 * Front Page Template
 * 
 * @package Gold Train
 */
get_header();
?>
<section id="slider">
    <?php
    if (shortcode_exists('masterslider')) :
        echo do_shortcode('[masterslider id="1"]');

    elseif ('[masterslider id="1"]') :
        echo do_shortcode('[masterslider id="2"]');
    else :
        echo '<div class="w-100 h-25 bg-dark text-center d-flex justify-content-center align-items-center p-4"><h1 class="p-4 m-4">!!! Import demo Content !!!</h1></div>';
    endif;
    ?>

</section>
<section id="latest-posts" class="mt-4">
    <div class="row">
        <div class="container">
            <h1 class="pt-2 pb-2 text-center text-lg-left">Najnowsze wpisy</h1>
            <div class="px-2">
                <?php if (is_active_sidebar('front_page')) : ?>
                    <div id="primary-sidebar" class="primary-sidebar widget-area mt-4" role="complementary">
                        <?php dynamic_sidebar('front_page'); ?>
                    </div><!-- #primary-sidebar -->
                <?php endif; ?>
            </div>
        </div>
    </div>


</section>
<section class="m-4">
    <div class="row">
        <?php get_template_part('template-parts/front-page/contact-form'); ?>
    </div>
</section>

<section id="charity" class="mt-4 px-4">

    <div class="row">
        <div class="container">
            <h1 class="my-2 pt-2 pb-4 text-center">Wesprzyj Nas</h1>
            <hr>
        </div>
    </div>
    <div class="row px-2">
        <div class="col-12 col-lg-6 px-2">
            <h2>Fundacja "Złoty Pociąg"</h2>
            <span>
                Naszym Celem jest poszukiwanie ukrytych obiektów oraz wsparcie poszukiwaczy i ekploratorów.
            </span>
        </div>

        <div class="col-12 col-lg-6 px-2">
            <?php
            if (shortcode_exists('give_form')) :
                echo do_shortcode('[give_form id="45"]');
            else :
                echo '<div class="w-100 h-25 bg-dark text-center d-flex justify-content-center align-items-center p-4"><h1 class="p-4 m-4">!!! Import demo Content !!!</h1></div>';
            endif;
            ?>
        </div>
    </div>
</section>

<?php
get_footer();
