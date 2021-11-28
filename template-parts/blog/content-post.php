<?php
/**
 * Content Template
 * 
 * @package Gold Train
 */
?>
<article class="p-4 m-2 w-100">
<section class="d-flex justify-content-center align-items-center mt-2 mb-2">
<h1><?php the_title(); ?></h1>
</section>
<section class="d-flex justify-content-center align-items-center">
<?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid w-50 ', 'title' => 'Feature image']); ?>
</section>
<section id="">
<p> <?php the_content(); ?></p>
</section>

</article>
