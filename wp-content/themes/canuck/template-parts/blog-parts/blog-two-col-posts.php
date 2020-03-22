<?php
/**
 * Template Part, two column posts.
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
		$canuck_post_count ++;
		if ( is_int( $canuck_post_count / 2 ) ) {
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class( 'canuck-two-col-right grid-post' ); ?>>
				<?php get_template_part( '/template-parts/postformat-parts/postformat', 'grid' ); ?>
			</article>
			<div class="clearfix"></div>
			<?php
		} else {
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class( 'canuck-two-col-left grid-post' ); ?>>
				<?php get_template_part( '/template-parts/postformat-parts/postformat', 'grid' ); ?>
			</article>
		<?php
		}
	}
	get_template_part( '/template-parts/partials', 'page-navi' );
} else {
	get_template_part( '/template-parts/partials', 'post-or-page-not-found' );
}
