<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Didi Lite
 */

?>
		<?php if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) ) : ?>

		<div class="site-footer" role="complementary">
			<div class="footer-widgets clear">
				<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
					<div class="widget-area">
						<?php dynamic_sidebar( 'footer-1' ); ?>
					</div><!-- .widget-area -->
				<?php endif; ?>
				<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
					<div class="widget-area">
						<?php dynamic_sidebar( 'footer-2' ); ?>
					</div><!-- .widget-area -->
				<?php endif; ?>
				<?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
					<div class="widget-area">
						<?php dynamic_sidebar( 'footer-3' ); ?>
					</div><!-- .widget-area -->
				<?php endif; ?>
			</div><!-- .footer-widgets -->
		</div><!-- .site-footer -->
		<?php endif; ?>
		<?php if( get_theme_mod( 'hide_copyright' ) == '') { ?>
		<footer id="colophon" class="site-info" role="contentinfo">
		<?php
			if ( function_exists( 'the_privacy_policy_link' ) ) {
			the_privacy_policy_link( '', '<span role="separator" aria-hidden="true">|</span>' );
			}
		?>
		<?php
			/**
			* Fires before the Didi Lite footer text for footer customization.
			*
			* @since Didi Lite 1.0
			*/
			do_action( 'didi_lite_credits' );
		?>
		<?php if(!get_theme_mod('didi_lite_copyright')) : ?>
		    <a href="<?php echo esc_url( esc_html__( 'https://www.anarieldesign.com/free-fashion-wordpress-theme/', 'didi-lite' ) ); ?>"><?php printf( esc_html__( 'Theme: %1$s', 'didi-lite' ), 'Didi Lite' ); ?></a>
		<?php else: ?>
		    <?php esc_attr_e('&copy;', 'didi-lite'); ?>
		    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>"> <?php echo esc_html( get_theme_mod( 'didi_lite_copyright', __( 'Built using Didi Lite Theme. Proudly powered by WordPress.', 'didi-lite' ) ) ); ?> </a>
		<?php endif; ?>
	    </footer><!-- .site-info -->
		<?php } // end if ?>
	</div><!-- .page -->
</div><!-- .footer -->
<?php wp_footer(); ?>
</body>
</html>