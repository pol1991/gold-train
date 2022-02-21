<?php
/**
 * Header File
 * 
 * @package Gold Train
 * 
 * */
?>
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" media="print" onload="this.media='all'">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous" async></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous" async></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous" async></script>
    <title><?php the_title(); ?></title>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' );  ?>" />

    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?> >
<?php 
if( function_exists('wp_body_open') ){
    wp_body_open();
}
 ?>

<div id="page" class="site">
<header id="master-header" class="site-header  bg-gt-dark pt-4 pt-lg-0 pt-md-0" role="banner">
    <?php get_template_part('template-parts/header/info-bar'); ?>
    <?php get_template_part('template-parts/header/nav'); ?>
</header>
<section class="w-100">
    <div class="container">
        <div class="row">
            <?php get_template_part('template-parts/header/header-widget'); ?>
        </div>
    </div>  
</section>
<div id="content" class="site-content">

</div>
</div>