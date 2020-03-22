<?php
/**
 * The template for displaying the social links banner in the front page.
 *
 * @package Bassist
 * @since Bassist 1.0
 */

if (has_nav_menu('social')): ?>
	<section id="social-section" class="social-section">
		<div class="inner"> 	
			<nav id="social-section-navigation" class="site-navigation social-navigation" role="navigation" aria-label='<?php esc_attr_e( 'Social Menu ', 'bassist' ); ?>' >
<?php 			wp_nav_menu( array(
					'theme_location' => 'social',
					'container' => 'ul',
					'menu_id' => 'social-section-menu',
					'link_before'    => '<span class="screen-reader-text">',
					'link_after'     => '</span>', )); ?>
			</nav> <!--/social--> 
		</div>
	</section><!--/social-section-->

<?php 	elseif ( is_customize_preview() ) : ?>
	<section id="social-section" class="social-section">
		<div class="inner">
	<?php 
		printf( '<h1>%1$s</h1><p>%2$s</p>',
			__('This is the social links section', 'bassist'),
			__('To fill up this section you have to create a menu with your social links. The same menu will show in the footer.', 'bassist') );
	?>
		</div>
	</section><!--/social-section-->
<?php endif ?>	

