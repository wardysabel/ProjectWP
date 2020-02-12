<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package i-amaze
 * @since i-amaze 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<header class="page-header">
				<h1 class="page-title"><?php esc_attr_e( 'Not found', 'i-amaze' ); ?></h1>
			</header>

			<div class="page-wrapper">
				<div class="page-content">
					<h2><?php esc_attr_e( 'This is somewhat embarrassing, isn&rsquo;t it?', 'i-amaze' ); ?></h2>
					<p><?php esc_attr_e( 'It looks like nothing was found at this location. Maybe try a search?', 'i-amaze' ); ?></p>

					<?php get_search_form(); ?>
				</div><!-- .page-content -->
			</div><!-- .page-wrapper -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>