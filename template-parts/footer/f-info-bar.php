<?php
/** 
 * Footer info bar
 * 
 * @package Gold Train
*/
?>
<section class="w-100" >
  <div class="container">
    <div class="row">
        <div id="" class="col-12 d-flex flex-row justify-content-center justify-content-lg-end">
            <!-- <a class="text-secondary text-decoration-none font-weight-bold p-2" href=""><?php echo get_theme_mod('gold_train_brand_name', __( 'Brand Name', 'gold-train' ) ); ?></a> -->
            <a class="text-secondary text-decoration-none p-2" href="tel:<?php echo get_theme_mod('gold_train_phone_number');?>"><i class="fas fa-phone-alt social-icon"></i></a>
            <a class="text-secondary text-decoration-none p-2" href="mailto:<?php echo get_theme_mod('gold_train_email_address', __( 'email@twojafirma.pl', 'gold-train' ) ); ?>"><i class="fas fa-envelope social-icon"></i></a>
            <div class="text-secondary text-decoration-none p-2" ><i class="fas fa-grip-lines-vertical"></i></div>
            <a class="text-secondary text-decoration-none p-2 " href="<?php echo get_theme_mod('gold_train_facebook_link'); ?>" target="_blank" ><i class="fab fa-facebook social-icon"></i></a>
            <a class="text-secondary text-decoration-none p-2 " href="<?php echo get_theme_mod('gold_train_youtube_link'); ?>" target="_blank" ><i class="fab fa-youtube social-icon"></i></a>
        </div>
    </div>
  </div>
</section>