<?php

/**
 * Content Template
 * 
 * @package Gold Train
 */
?>
<article class="container mt-4 mb-2">
    <header class="d-flex justify-content-start align-items-start mt-2 mb-2 flex-column w-100">
        <h1><?php the_title(); ?></h1>
        <div class="breadcrumb w-100"><?php get_breadcrumb(); ?></div>
        <section class="entry-meta-post pb-4">
            <div class="d-flex flex-row ">

                <span class="mx-2 "><i class="far fa-calendar-alt text-gt-highlight"></i> : <?php echo esc_attr(get_the_date()); ?></span>
                <span class="mx-2 "><i class="far fa-user text-gt-highlight"></i> : <?php echo esc_attr(the_author_posts_link()); ?></span>
            </div>
        </section>

    </header>
    <section class="d-flex justify-content-center align-items-center">
        <?php the_post_thumbnail('baner', ['class' => 'img-fluid  w-100', 'title' => 'Feature image', 'loading' => 'lazy']); ?>
    </section>
    <section id="" class="mt-4 d-flex flex-column justify-content-center align-items-center">
        <h2><?php the_title(); ?></h2>
        <p> <?php the_content(); ?></p>
    </section>

    <div class="row">
        <div class="col-12 d-flex flex-row justify-content-center align-items-center"> <?php the_post_navigation(array(
                                                                                            'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __('<i class="fas fa-angle-double-left"></i> Wstecz:', 'gold-train') . '</span> ' .
                                                                                                '<span class="screen-reader-text">' . __('Previous post:', 'gold-train') . '</span> ' .
                                                                                                '<span class="post-title">%title</span>',
                                                                                            'next_text' => '<span class="meta-nav" aria-hidden="true">' . __('Następny:', 'gold-train') . '</span> ' .
                                                                                                '<span class="screen-reader-text">' . __('Next post:', 'gold-train') . '</span> ' .
                                                                                                '<span class="post-title">%title <i class="fas fa-angle-double-right"></i></span>',
                                                                                        )); ?>
        </div>
    </div>
    <!-- <section id="comments" class="container">
    <?php // get_template_part('template-parts/comments') 
    ?>
    </section> -->
</article>