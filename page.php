<?php
/** 
 * Template Name: Page
 * Single Page Template
 * 
 * @package Gold Train
*/
get_header();
?>

<div id="primary" class="content-area mt-5 mb-5">
    <main id="main" class="site-main" role="main">
        <div class="container">
        <header class="mt-4 mb-1">
        <h1 class="mb-4"><?php the_title(); ?></h1>
        <div class="breadcrumb w-100"><?php get_breadcrumb(); ?></div>
        </header>
        <?php while (have_posts()) : the_post(); ?>
        <?php the_content(''); ?>
        <?php endwhile; ?>
        </div>
    </main>
</div>

<?php 
get_footer();