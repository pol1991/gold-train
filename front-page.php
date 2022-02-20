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
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dolor sit amet consectetur adipiscing elit ut aliquam. Hendrerit gravida rutrum quisque non tellus orci ac. Amet est placerat in egestas erat imperdiet sed. Imperdiet proin fermentum leo vel orci porta non pulvinar. Urna neque viverra justo nec ultrices dui sapien eget. Lectus magna fringilla urna porttitor rhoncus dolor purus. Sit amet risus nullam eget felis eget nunc lobortis. Diam phasellus vestibulum lorem sed. Enim sed faucibus turpis in eu.
            </p>
            <p>Id nibh tortor id aliquet lectus proin. Vestibulum sed arcu non odio euismod. Tortor consequat id porta nibh venenatis cras sed. Tellus elementum sagittis vitae et leo duis ut diam quam. Fringilla urna porttitor rhoncus dolor purus non enim. Ipsum a arcu cursus vitae congue. Neque laoreet suspendisse interdum consectetur. Volutpat commodo sed egestas egestas fringilla phasellus faucibus scelerisque. Dui faucibus in ornare quam. Volutpat lacus laoreet non curabitur. Id volutpat lacus laoreet non. Faucibus nisl tincidunt eget nullam non. Tellus at urna condimentum mattis pellentesque id nibh. In vitae turpis massa sed elementum tempus egestas sed sed. Pulvinar etiam non quam lacus suspendisse faucibus. Eget nullam non nisi est sit amet facilisis magna etiam.
            </p>
            <p>Orci nulla pellentesque dignissim enim sit amet venenatis. Tincidunt nunc pulvinar sapien et ligula ullamcorper malesuada proin libero. Tempus urna et pharetra pharetra massa massa. Erat nam at lectus urna duis convallis. Vitae suscipit tellus mauris a diam maecenas sed enim. Laoreet id donec ultrices tincidunt arcu non sodales neque. Donec massa sapien faucibus et molestie ac. Viverra maecenas accumsan lacus vel facilisis volutpat. Molestie at elementum eu facilisis sed. Posuere urna nec tincidunt praesent semper feugiat nibh sed. Sit amet cursus sit amet dictum sit. Sed euismod nisi porta lorem. Viverra mauris in aliquam sem fringilla ut morbi tincidunt. Felis bibendum ut tristique et egestas quis. Turpis massa sed elementum tempus egestas sed sed. Facilisis gravida neque convallis a.
            </p>
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
