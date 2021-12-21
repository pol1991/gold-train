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
        <div class="row w-100">
            <div class="col-12 d-flex flex-row justify-content-center align-items-center"> <?php the_post_navigation(array(
                                                                                                'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __('Previous', 'gold-train') . '</span> ' .
                                                                                                    '<span class="screen-reader-text">' . __('Previous post:', 'gold-train') . '</span> ' .
                                                                                                    '<span class="post-title">%title</span>',
                                                                                                'next_text' => '<span class="meta-nav" aria-hidden="true">' . __('Next', 'gold-train') . '</span> ' .
                                                                                                    '<span class="screen-reader-text">' . __('Next post:', 'gold-train') . '</span> ' .
                                                                                                    '<span class="post-title">%title</span>',
                                                                                            )); ?>
            </div>
        </div>
    </header>
    <section class="d-flex justify-content-center align-items-center">
        <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid w-50 ', 'title' => 'Feature image']); ?>
    </section>
    <section id="" class="mt-4 d-flex flex-column justify-content-center align-items-center">
        <p> <?php the_content(); ?></p>
    </section>
    <section class="entry-meta-post">
        <span class=""><i class="far fa-calendar-alt"></i> : <?php echo esc_attr(get_the_date()); ?></span>
        <span class=""><i class="far fa-user"></i> : <?php echo esc_attr(get_the_author()); ?></span>
    </section>
    <section id="comments" class="container">
        <?php if (comments_open() || get_comments_number()) :
            comments_template();
        endif; ?>
    </section>
</article>