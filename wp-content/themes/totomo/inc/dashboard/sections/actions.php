<?php
/**
 * Recommended Actions Section.
 *
 * @package totomo
 */

$action = $this->recommended_plugins_action();
?>
<div id="actions" class="gt-tab-pane">
	<div class="feature-section two-col">
		<div class="col">
			<h3><?php echo esc_html( $action['title'] ); ?></h3>
			<p><?php echo wp_kses_post( $action['body'] ); ?></p>

			<?php if ( ! empty( $action['button_text'] ) ) : ?>
				<a class="button" href="<?php echo esc_url( admin_url( 'themes.php?page=tgmpa-install-plugins&plugin_status=install' ) ); ?>"><?php echo esc_html( $action['button_text'] ); ?></a>
			<?php endif; ?>

		</div>
	</div>
</div>
