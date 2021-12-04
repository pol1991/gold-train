<?php
/** 
 * Header widget area
 * 
 * @package Gold Train
*/
?>

<?php if ( is_active_sidebar( 'header_widgets_1' ) ) : ?>
	<div id="primary-sidebar" class="primary-sidebar widget-area mt-4" role="complementary">
		<?php dynamic_sidebar( 'header_widgets_1' ); ?>
	</div><!-- #primary-sidebar -->
<?php endif; ?>