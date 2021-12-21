<?php
/*
* Main template file
* @package Gold Train
*/
get_header();
?>

<div id="primary" class="site-main mt-5" role="main">
    <?php

    if (have_posts()) {
    ?>
        <div class="container p-1">
            <?php
            if (is_home() && !is_front_page()) {
            ?>
                <header class="mb-5">
                    <!-- <h1 class="page-title screen-reader-text"> -->
                    <h1 class="page-title">
                        <?php single_post_title(); ?>
                    </h1>
                    <div class="breadcrumb"><?php get_breadcrumb(); ?></div>
                </header>
            <?php
            }
            ?>


            <div class="row mt-4 mb-4 w-100">
                <?php
                $index = 0;
                $no_of_columns = 2;
                while (have_posts()) : the_post();
                    // if (0 === $index % $no_of_columns) {
                ?>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <!-- <?php
                        // }
                        ?> -->
                        <?php get_template_part('template-parts/blog/content'); ?>
                        <!-- <?php

                            // $index+=$index;
                            // if (0 !== $index && 0 === $index % $no_of_columns) {
                        ?> -->
                    </div>
                    <!-- <?php
                        // }
                    ?> -->
                <?php
                endwhile;
                ?>
            </div>
        </div>
    <?php
    }
    ?>
</div>
<?php
get_footer();
