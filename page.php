<?php
/** 
 * Template Name: Page
 * Single Page Template
 * 
 * @package Gold Train
*/
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <div class="container">
        <?php while (have_posts()) : the_post(); ?>
        <?php the_content(''); ?>
        <?php endwhile; ?>
        </div>
    </main>
</div>

<?php 
get_footer();