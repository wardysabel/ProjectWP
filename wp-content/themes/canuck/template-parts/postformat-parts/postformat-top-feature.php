<?php
/**
 * Canuck Post Format Standard
 *
 * @package     Canuck WordPress Theme
 * @copyright   Copyright (C) 2017-2019  Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <www.kevinsspace.ca/contact/>
 */

$use_excerpts = get_theme_mod( 'canuck_use_excerpts', false );
$use_lazyload = get_theme_mod( 'canuck_use_lazyload' ) ? true : false;
if ( ! post_password_required() ) {
	if ( has_post_format( 'audio' ) ) {
		get_template_part( '/template-parts/postformat-parts/postformat', 'audio-feature' );
	} elseif ( has_post_format( 'gallery' ) ) {
		get_template_part( '/template-parts/postformat-parts/postformat', 'gallery-feature' );
	} elseif ( has_post_format( 'image' ) ) {
		if ( has_post_thumbnail() ) {
			get_template_part( '/template-parts/postformat-parts/postformat', 'image-feature' );
		}
	} elseif ( has_post_format( 'quote' ) ) {
		get_template_part( '/template-parts/postformat-parts/postformat', 'quote-feature' );
	} elseif ( has_post_format( 'video' ) ) {
		get_template_part( '/template-parts/postformat-parts/postformat', 'video-feature' );
	} else {
		if ( has_post_thumbnail() ) {
			$feature_image_url = get_the_post_thumbnail_url( $post->ID, 'large' );
			if ( true === $use_lazyload ) {
				?>
				<div class="image-post-feature">
					<img class="lazyload"
						src="<?php echo get_template_directory_uri() . '/images/placeholder15.png';// phpcs:ignore ?>"
						data-src="<?php echo esc_url( $feature_image_url ); ?>"
						alt="<?php esc_attr_e( 'top feature image', 'canuck' ); ?>" />
				</div>
				<?php
			} else {
				?>
				<img src="<?php echo esc_url( $feature_image_url ); ?>" alt="<?php esc_attr_e( 'top feature image', 'canuck' ); ?>" />
				<?php
			}
		}
	}
} else {
	$feature_image_url = get_template_directory_uri() . '/images/password800.jpg';// phpcs:ignore
	if ( true === $use_lazyload ) {
		?>
		<div class="image-post-feature">
			<img class="lazyload"
				src="<?php echo get_template_directory_uri() . '/images/placeholder15.png';// phpcs:ignore ?>"
				data-src="<?php echo esc_url( $feature_image_url ); ?>"
				alt="<?php esc_attr_e( 'password required', 'canuck' ); ?>" />
		</div>
		<?php
	} else {
		?>
		<img src="<?php echo esc_url( $feature_image_url ); ?>" alt="<?php esc_attr_e( 'password required', 'canuck' ); ?>" />
		<?php
	}
}
?>
<div class="post-wrap-tf">
	<div class="post-overlay-tf">
		<div class="post-header-tf">
			<h2 class="post-title entry-title">
				<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
			</h2>
			<div class="post-meta-tf">
				<?php canuck_post_meta_full(); ?>
			</div>
		</div>
		<div class="post-content-tf entry-content">
			<?php
			if ( ! post_password_required() ) {
				if ( has_post_format( 'audio' ) ) {
					if ( true === $use_excerpts && ! is_single() ) {
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
					} else {
						$content     = get_the_content();
						$args        = array(
							'type'        => 'audio',
							'split_media' => 'true',
						);
						$embed_audio = canuck_media_grabber_audio( $args );
						$content     = str_replace( $embed_audio, '', $content );
						$content     = apply_filters( 'the_content', $content );
						echo wp_kses_post( $content );
					}
				} elseif ( has_post_format( 'quote' ) ) {
					if ( true === $use_excerpts && ! is_single() ) {
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
						$content = get_the_content();
						$content = canuck_strip_extracted_quote( $content );
						$content = apply_filters( 'the_content', $content );
						echo wp_kses_post( $content );
					}
				} elseif ( has_post_format( 'gallery' ) ) {
					if ( true === $use_excerpts && ! is_single() ) {
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
					} else {
						$content      = get_the_content();
						$canuck_paged = $wp_query->get( 'page' );
						if ( ! $canuck_paged || $canuck_paged < 2 ) {
							if ( false !== strpos( $content, 'wp:gallery' ) ) {
								$content = canuck_strip_first_block_gallery( $content );
								$content = apply_filters( 'the_content', $content );
								echo wp_kses_post( $content );
							} else {
								the_content( esc_html__( 'Read more', 'canuck' ) );
							}
						} else {
							the_content( esc_html__( 'Read more', 'canuck' ) );
						}
					}
				} else {
					if ( true === $use_excerpts && ! is_single() ) {
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
					} else {
						the_content( esc_html__( 'Read more', 'canuck' ) );
					}
				}// End if().
				canuck_post_meta_pages();
			} else {
				echo get_the_password_form();// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			}// End if().
			?>
		</div>
	</div>
</div>
