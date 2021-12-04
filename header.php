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
    <title><?php wp_title( '|', true, 'right' ); ?></title>
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
<header id="master-header" class="site-header" role="banner">
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