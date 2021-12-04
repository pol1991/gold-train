<?php

/** 
 * Template Name: Front Page
 * Front Page Template
 * 
 * @package Gold Train
 */
get_header();
?>
<div class="row">Front Page</div>
<section class="m-4">
    <div class="row">
        <?php get_template_part('template-parts/front-page/contact-form'); ?>
    </div>
</section>
<?php
get_footer();
