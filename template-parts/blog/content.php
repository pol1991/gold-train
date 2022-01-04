<?php

/**
 * Content Template
 * 
 * @package Gold Train
 */
?>
<div class="container mt-4 mb-4 ml-2 mr-2 p-3 border border-dark rounded post-container">
    <h3><?php the_title(); ?></h3>
    <section class="entry-meta">
        <div class="d-flex flex-row ">
            
        <span  class="mx-2"><i class="far fa-calendar-alt"></i> : <?php echo esc_attr(get_the_date()); ?></span>
        <span class="mx-2"><i class="far fa-user"></i> : <?php echo esc_attr(get_the_author()); ?></span>
        </div>
    </section>
    <div class="d-flex justify-content-center mt-2 mb-2">
        <?php
        if (has_post_thumbnail()) :
            the_post_thumbnail('medium', ['class' => 'img-fluid ', 'title' => 'Feature image']);
        else :
            echo '<img src="' . GOLD_TRAIN_DIR_PATH . '/screenshot.png' . '" ' . 'width="300" class="img-fluid" alt="Feature image"' . '>';
        endif;
        ?>
    </div>
    <div><?php the_excerpt(); ?></div>
    <div class="d-flex justify-content-end align-items-center">

        <!-- <button class="m-3 bg-transparent border-0">
<a class="text-secondary h4 mb-0" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fparse.com" target="_blank">
<i class="far fa-share-square"></i>
</a></button> -->
        <button id="read-more-btn" class="m-3 bg-transparent border-0"><a class="text-black h3 mb-0 read-more-btn d-flex flex-row justify-content-center align-items-center" href="<?php echo get_post_permalink() ?>"><i class="fas fa-arrow-alt-circle-right"></i></a></button>
    </div>
</div>