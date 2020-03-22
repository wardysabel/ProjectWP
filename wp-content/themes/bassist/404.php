<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package Bassist
 * @since Bassist 1.0.0
 */

get_header(); ?>
<div class="inner flex-container">
	<div id="main-content">
		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title"><?php _e( 'Oops! That page can not be found.', 'bassist' ); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content">
				<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'bassist' ); ?></p>
				<?php get_search_form(); ?>
			</div><!-- .page-content -->
		</section><!-- .error-404 -->      
		
	</div><!--/main-content-->
<?php get_sidebar('sidebar'); ?>
</div><!--/inner-->
<?php get_footer(); ?>



