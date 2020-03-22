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
</article><!-- #post-## -->
