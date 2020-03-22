<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Totomo
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php totomo_post_formats(); ?>

	<header class="entry-header">
		<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php totomo_posted_on(); ?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php the_content(); ?>

	</div><!-- .entry-content -->
</article><!-- #post-## -->
