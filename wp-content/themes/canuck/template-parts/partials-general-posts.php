<?php
/**
 * Template Part, general post method, used by author, category, date, search and tag pages
 *
 * @package     Canuck WordPress Theme
 * @copyright   Copyright (C) 2017-2019  Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <www.kevinsspace.ca/contact/>
 */

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
			<div class="post-wrap-archive">
				<div class="post-overlay-archive">
					<div class="post-header-archive">
						<h2 class="post-title entry-title">
							<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
						</h2>
						<div class="post-meta-tf">
							<?php canuck_post_meta_full(); ?>
						</div>
					</div>
					<div class="post-content-archive entry-content">
						<?php
						if ( ! post_password_required() ) {
							if ( has_post_format( 'audio' ) ) {
								if ( has_excerpt() ) {
									the_excerpt();
									printf(
										'<div class="read-more-wrap"><a class="read-more" href="%1$s">%2$s</a></div>',
										esc_url( get_permalink( get_the_ID() ) ),
										esc_html__( 'Read More', 'canuck' )
									);
								} else {
									the_excerpt();
								}
							} elseif ( has_post_format( 'quote' ) ) {
								if ( has_excerpt() ) {
									the_excerpt();
									printf(
										'<div class="read-more-wrap"><a class="read-more" href="%1$s">%2$s</a></div>',
										esc_url( get_permalink( get_the_ID() ) ),
										esc_html__( 'Read More', 'canuck' )
									);
								} else {
									$trim_words      = get_theme_mod( 'canuck_excerpt_length', 30 );
									$canuck_more     = '&hellip;<div class="read-more-wrap"><a class="read-more" href="' . esc_url( get_permalink() ) . '">' . __( 'Read More', 'canuck' ) . '</a></div>';
									$content         = get_the_content();
									$content         = canuck_strip_extracted_quote( $content );
									$content_trimmed = wp_trim_words( $content, $trim_words, $canuck_more );
									$excerpt         = apply_filters( 'the_excerpt', $content_trimmed );
									echo wp_kses_post( $excerpt );
								}
							} else {
								if ( has_excerpt() ) {
									the_excerpt();
									printf(
										'<div class="read-more-wrap"><a class="read-more" href="%1$s">%2$s</a></div>',
										esc_url( get_permalink( get_the_ID() ) ),
										esc_html__( 'Read More', 'canuck' )
									);
								} else {
									the_excerpt();
								}
							}// End if().
							canuck_post_meta_pages();
						} else {
							echo get_the_password_form(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
						}// End if().
						?>
					</div>
				</div>
			</div>
		</article>
		<div class="clearfix"></div>
		<?php
	}// End if().
} else {
	get_template_part( '/template-parts/partials', 'post-or-page-not-found' );
}// End if().

