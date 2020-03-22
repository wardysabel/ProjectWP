<?php
/**
 * Template part for displaying single posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Totomo
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php totomo_posted_on(); ?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header>
	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'totomo' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php totomo_entry_footer(); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
