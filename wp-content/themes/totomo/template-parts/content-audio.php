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

		<div class="entry-meta">
			<?php totomo_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		$main_content = apply_filters( 'the_content', get_the_content() );
		$media = get_media_embedded_in_content( $main_content, array(
			'audio',
			'video',
			'object',
			'embed',
			'iframe',
		) );
		if ( ! empty( $media ) ) {
			foreach ( $media as $embed_html ) {
				$main_content = str_replace( $embed_html, '', $main_content );
			}
		}

		echo $main_content; // WPCS: XSS OK.
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
