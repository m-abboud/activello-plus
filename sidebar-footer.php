<?php
/**
 * The Sidebar containing the footer widget areas.
 *
 * @package activello
 */
?>

<?php
	if (!is_active_sidebar('footer-sidebar'))
		return;
?>
<div id="footer-widgets-area">
	<?php if ( is_active_sidebar( 'footer-sidebar' ) ) : ?>
	<div id="footer-widgets"  role="complementary">
		<?php dynamic_sidebar( 'footer-sidebar' ); ?>
	</div><!-- #first .widget-area -->
	<?php endif; ?>
</div><!-- #supplementary -->