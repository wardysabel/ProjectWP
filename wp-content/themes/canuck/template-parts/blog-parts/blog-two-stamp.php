<?php
/**
 * Template Part, two column stamp.
 *
 * Used in home.php.
 *
 * @package     Canuck WordPress Theme
 * @copyright   Copyright (C) 2017-2019  Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <www.kevinsspace.ca/contact/>
 */

$canuck_post_count = 0;
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		if ( 0 === $canuck_post_count || is_int( $canuck_post_count / 2 ) ) {
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class( 'canuck-two-stamp-left two-stamp-post' ); ?>>
				<?php get_template_part( '/template-parts/postformat-parts/postformat', 'stamp' ); ?>
			</article>
			<?php
		} elseif ( 1 === $canuck_post_count || is_int( ( $canuck_post_count + 1 ) / 2 ) ) {
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class( 'canuck-two-stamp-right two-stamp-post' ); ?>>
				<?php get_template_part( '/template-parts/postformat-parts/postformat', 'stamp' ); ?>
			</article>
			<div class="clearfix"></div>
			<?php
		}
		$canuck_post_count++;
	}
	get_template_part( '/template-parts/partials', 'page-navi' );
} else {
	get_template_part( '/template-parts/partials', 'post-or-page-not-found' );
}
