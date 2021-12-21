<?php
/** 
 * Footer dynamic content widget area
 * 
 * @package Gold Train
*/
?>

<?php if ( is_active_sidebar( 'footer_content_widgets_1' ) ) : ?>
	<section id="primary-sidebar" class="primary-sidebar widget-area mt-4 mb-4 role="complementary">
		<?php dynamic_sidebar( 'footer_content_widgets_1' ); ?>
    </section><!-- #primary-sidebar -->
<?php endif; ?>