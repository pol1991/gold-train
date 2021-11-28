<?php
/**
 * Content Template
 * 
 * @package Gold Train
 */
?>
<h3><?php the_title(); ?></h3>
<div ><?php the_excerpt(); ?></div>
<button class="mb-3"><a href="<?php echo get_post_permalink() ?>">Więcej</a></button>
