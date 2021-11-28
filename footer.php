<?php
/** 
* Footer template
* @package Gold Train
* 
*/
?>

<footer class="footer-container w-100">
<section>
    <h1>Stopka</h1>
</section>
<?php if ( is_active_sidebar( 'footer_widgets_1' ) ) : ?>
	<section id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'footer_widgets_1' ); ?>
    </section><!-- #primary-sidebar -->
<?php endif; ?>
</footer>
<?php wp_footer(); ?>
</body>
</html>