<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package totomo
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer container" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'totomo' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'totomo' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'totomo' ), 'Totomo', '<a href="https://gretathemes.com/" rel="designer">GretaThemes</a>' ); ?>
		</div><!-- .site-info -->
		<div class="divider-half"></div>
		<?php if ( has_nav_menu( 'social' ) ) : ?>
			<?php
			wp_nav_menu( array(
				'theme_location'  => 'social',
				'container_class' => 'social-links',
				'depth'           => 1,
				'link_before'     => '<span>',
				'link_after'      => '</span>',
				'items_wrap'      => '<ul class="clearfix">%3$s</ul>',
			) );
			?>
		<?php endif; ?>
	</footer><!-- #colophon -->
</div><!-- #page -->

<a href="#" id="scroll-to-top"> <i class="fa fa-angle-up"></i></a>
<?php wp_footer(); ?>
</body>
</html>
