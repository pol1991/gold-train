<?php
/** 
 * Brand info bar
 * 
 * @package Gold Train
*/
?>
<section class="w-100 bg-light" >
  <div class="container">
    <div class="row">
        <div id="" class="col-lg-6 col-md-6 col-12 d-flex flex-row justify-content-start">
            <a class="text-secondary text-decoration-none font-weight-bold p-2" href=""><?php echo get_theme_mod('gold_train_brand_name', __( 'Brand Name', 'gold-train' ) ); ?></a>
            <a class="text-secondary text-decoration-none p-2" href="tel:<?php echo get_theme_mod('gold_train_phone_number');?>"><i class="fas fa-phone-alt"></i></a>
            <a class="text-secondary text-decoration-none p-2" href="mailto:<?php echo get_theme_mod('gold_train_email_address', __( 'email@twojafirma.pl', 'gold-train' ) ); ?>"><i class="fas fa-envelope"></i></a>
        </div>
        <div id="" class="col-lg-6 col-md-6 col-12 d-flex flex-row justify-content-end">
            <a class="text-secondary text-decoration-none p-2" href="<?php echo get_theme_mod('gold_train_facebook_link'); ?>" target="_blank" ><i class="fab fa-facebook"></i></a>
            <a class="text-secondary text-decoration-none p-2" href="<?php echo get_theme_mod('gold_train_youtube_link'); ?>" target="_blank" ><i class="fab fa-youtube"></i></a>
        </div>
    </div>
  </div>
</section