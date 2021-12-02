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
</header>
<section class="d-flex justify-content-center align-items-center">
<?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid w-50 ', 'title' => 'Feature image']); ?>
</section>
<section id="" class="mt-4 d-flex flex-column justify-content-center align-items-center">
<p> <?php the_content(); ?></p>
</section>

</article>
