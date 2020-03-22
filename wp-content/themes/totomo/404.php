<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package totomo
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
	</main>
	<!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
