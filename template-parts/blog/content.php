<?php
/**
 * Content Template
 * 
 * @package Gold Train
 */
?>
<div class="container mt-4 mb-4 ml-2 mr-2 p-3 border border-dark rounded">
<h3><?php the_title(); ?></h3>
<div class="d-flex justify-content-center mt-2 mb-2">
    <?php the_post_thumbnail('medium', ['class' => 'img-fluid ', 'title' => 'Feature image']); ?>
</div>
<div ><?php the_excerpt(); ?></div>
<button class="mb-3"><a href="<?php echo get_post_permalink() ?>">Więcej</a></button>
</div>
