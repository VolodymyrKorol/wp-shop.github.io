<?php
/**
 * Displays footer widgets if assigned
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<?php
if ( is_active_sidebar( 'sidebars-2' ) ||
	is_active_sidebar( 'sidebars-3' ) ) :
	?>

	<aside class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'twentyseventeen' ); ?>">
		<?php
		if ( is_active_sidebar( 'sidebars-2' ) ) {
			?>
			<div class="widget-column footer-widget-1">
				<?php dynamic_sidebar( 'sidebars-2' ); ?>
			</div>
			<?php
		}
		if ( is_active_sidebar( 'sidebars-3' ) ) {
			?>
			<div class="widget-column footer-widget-2">
				<?php dynamic_sidebar( 'sidebars-3' ); ?>
			</div>
		<?php } ?>
	</aside><!-- .widget-area -->

<?php endif; ?>
