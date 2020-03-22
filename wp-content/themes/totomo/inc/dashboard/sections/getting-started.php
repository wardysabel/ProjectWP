<?php
/**
 * Getting started section.
 *
 * @package totomo
 */

?>
<div id="getting-started" class="gt-tab-pane gt-is-active">
	<div class="feature-section two-col">
		<div class="col">
			<h3><?php esc_html_e( 'Implement Recommended Actions', 'totomo' ); ?></h3>
			<p>
				<?php
				/* translators: theme name. */
				echo esc_html( sprintf( __( 'We have made a list of steps for you, to make sure you will get the most of %s. They are easy to follow.', 'totomo' ), $this->theme->name ) );
				?>
			</p>
			<p>
				<a href="#actions" class="action-links button"><?php esc_html_e( 'Recommended Actions', 'totomo' ); ?></a>
			</p>

			<h3><?php esc_html_e( 'Customize The Theme', 'totomo' ); ?></h3>
			<p><?php esc_html_e( 'Using the WordPress Customizer you can easily customize every aspect of the theme.', 'totomo' ); ?></p>
			<p>
				<a href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>" class="button"><?php esc_html_e( 'Start Customize', 'totomo' ); ?></a>
			</p>

			<h3><?php esc_html_e( 'Read Full Documentation', 'totomo' ); ?></h3>
			<p class="about"><?php esc_html_e( 'Need any help to setup and configure the theme? Please check our full documentation for detailed information on how to use it.', 'totomo' ); ?></p>
			<p>
				<a href="<?php echo esc_url( "https://gretathemes.com/docs/{$this->slug}/{$this->utm }" ); ?>" target="_blank" class="button button-secondary"><?php esc_html_e( 'Read Documentation', 'totomo' ); ?></a>
			</p>
		</div>

		<div class="col">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/screenshot.jpg" alt="<?php esc_attr_e( 'screenshot', 'totomo' ); ?>">
		</div>
	</div>
</div>
