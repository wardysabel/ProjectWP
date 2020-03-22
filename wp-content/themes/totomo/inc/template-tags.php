<?php
/**
 * Custom template tags for the theme.
 * @package Totomo
 */

/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function totomo_posted_on() {
	?>
	<ul class="post-meta clearfix">
		<li>
			<time class="date fa fa-clock-o" datetime="<?php the_time( 'c' ); ?>" pubdate><?php the_time( get_option( 'date_format' ) ); ?></time>
		</li>
		<li>
			<?php comments_popup_link( __( 'No Comments', 'totomo' ), __( '1 Comment', 'totomo' ), __( '% Comments', 'totomo' ), 'comments-link fa fa-comments' ); ?>
		</li>
		<li class="fa fa-tags">
			<?php the_category( ', ' ); ?>
		</li>
	</ul>
	<?php
}

/**
 * Display gallery slider.
 *
 * @param string $imagetotomoize Image size
 */
function totomo_gallerytotomolider( $imagetotomoize ) {
	$gallery = get_post_gallery( get_the_ID(), false );
	$images  = wp_parse_id_list( $gallery['ids'] );

	if ( empty( $images ) ) {
		return;
	}
	?>
	<div id="slider-<?php the_ID(); ?>" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<?php
			foreach ( $images as $i => $image ) {
				printf( '<li data-target="#slider-%s" data-slide-to="%s"%s></li>', get_the_ID(), $i, 0 == $i ? ' class="active"' : '' );
			}
			?>
		</ol>
		<div class="carousel-inner">
			<?php
			foreach ( $images as $i => $image ) {
				printf( '<div class="item%s">%s</div>', 0 == $i ? ' active' : '', wp_get_attachment_image( $image, $imagetotomoize ) );
			}
			?>
		</div>
	</div>
	<?php
}

/**
 * Callback function to show comment
 *
 * @param object $comment
 * @param array $args
 * @param int $depth
 *
 * @return void
 * @since 1.0
 */
function totomo_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	$post               = get_post();

	$comment_type = get_comment_type( $comment->comment_ID );
	$templates    = array( "template-parts/comment-$comment_type.php" );
	// If the comment type is a 'pingback' or 'trackback', allow the use of 'comment-ping.php'.
	if ( 'pingback' == $comment_type || 'trackback' == $comment_type ) {
		$templates[] = 'template-parts/comment-ping.php';
	}
	// Add the fallback 'comment.php' template.
	$templates[] = 'template-parts/comment.php';

	require( locate_template( $templates ) );
}

/**
 * Show entry format images, video, gallery, audio, etc.
 *
 * @return void
 */
function totomo_post_formats() {
	$html  = '';
	$size  = 'totomo-thumb-blog-list';
	$thumb = get_the_post_thumbnail( get_the_ID(), $size );

	switch ( get_post_format() ) {
		case 'link':
			$link = get_the_content();
			if ( $link ) {
				$html = "<div class='link-wrapper'>$link</div>";
			}
			break;
		case 'quote':
			$html = get_the_content();

			if ( empty( $thumb ) ) {
				break;
			}

			$html .= '<a class="post-image" href="' . get_permalink() . '">';
			$html .= $thumb;
			$html .= '</a>';
			break;
		case 'gallery':

			// Show gallery
			totomo_gallerytotomolider( 'thumb-blog-list' );
			break;
		case 'audio':
			$content     = apply_filters( 'the_content', get_the_content( __( 'Read More', 'totomo' ) ) );
			$media       = get_media_embedded_in_content( $content, array( 'audio', 'object', 'embed', 'iframe' ) );
			$thumb_audio = '';
			if ( ! empty( $thumb ) ) {
				$html .= '<a class="post-image" href="' . get_permalink() . '">';
				$html .= $thumb;
				$html .= '</a>';
				$thumb_audio = 'thumb_audio';
			}

			if ( ! empty( $media ) ) : ?>
				<?php
				foreach ( $media as $embed_html ) {
					$html .= sprintf( '<div class="audio-wrapper %s">%s</div>', $thumb_audio, $embed_html );
				}
				?>
			<?php endif;

			break;
		case 'video':
			$content = apply_filters( 'the_content', get_the_content( __( 'Read More', 'totomo' ) ) );
			$media   = get_media_embedded_in_content( $content, array( 'video', 'object', 'embed', 'iframe' ) );
			if ( ! empty( $media ) ) : ?>
				<?php
				foreach ( $media as $embed_html ) {
					$html = sprintf( '%s', $embed_html );
				}
				?>
			<?php endif;
			break;
		default:
			if ( empty( $thumb ) ) {
				return;
			}

			$html .= '<a class="post-image" href="' . get_permalink() . '">';
			$html .= $thumb;
			$html .= '</a>';
	}

	if ( $html ) {
		echo "<div class='post-format-meta'>$html</div>";
	}

	$post_format = get_post_format( get_the_ID() );
	if ( 'link' == $post_format || 'quote' == $post_format ) {
		return;
	}
}

/**
 * Display related posts.
 */
function totomo_related_posts() {
	$args    = '';
	$args    = wp_parse_args( $args, array(
		'category__in'   => wp_get_post_categories( get_the_ID() ),
		'posts_per_page' => 4,
		'post__not_in'   => array( get_the_ID() ),
	) );
	$related = new WP_Query( $args );

	if ( ! $related->have_posts() ) {
		return;
	}
	?>
	<div class="related-article">
		<h2 class="box-title"><?php _e( 'Related Posts', 'totomo' ); ?></h2>
		<ul class="row">
			<?php
			while ( $related->have_posts() ) {
				$related->the_post();

				$post_thumbnail = get_the_post_thumbnail( get_the_ID(), 'thumbnail' );

				$class_format = '';
				if ( ! $post_thumbnail ) {
					$class_format = 'fa-format-' . get_post_format( get_the_ID() );
				}

				printf(
					'<li class="col-md-6">
						<a href="%s" class="post-thumbnail %s">%s</a>
						<div class="related-post-content">
							<a class="related-post-title" href="%s">
							<span class="date">%s</span></br>
							%s</a>
						</div>
					</li>',
					esc_url( get_permalink() ),
					$class_format,
					$post_thumbnail,
					esc_url( get_permalink() ),
					get_the_date(),
					get_the_title()
				);
				?>
				<?php
			}
			?>
		</ul>
	</div>
	<?php
	wp_reset_postdata();
}

/**
 * Display post author box
 *
 * @since  1.0
 * @return void
 */
function totomo_get_author_box() {
	?>
	<div id="post-author" class="post-author-area">
		<?php echo get_avatar( get_the_author_meta( 'ID' ), 96 ); ?>
		<div class="info">
			<h4 class="display-name"><?php the_author(); ?></h4>
			<p class="author-desc"><?php the_author_meta( 'description' ); ?></p>
		</div>
	</div>
	<?php
}

add_filter( 'excerpt_more', 'totomo_excerpt_more' );

/**
 * Replaces "[...]" (appended to automatically generated excerpts) with ... and a 'Continue reading' link.
 *
 * @return string 'Continue reading' link prepended with an ellipsis.
 */
function totomo_excerpt_more() {
	$text = wp_kses_post( sprintf( __( 'Continue reading &rarr; %s', 'totomo' ), '<span class="screen-reader-text">' . get_the_title() . '</span>' ) );
	$more = sprintf( '&hellip; <p class="text-center"><a href="%s" class="more-link">%s</a></p>', esc_url( get_permalink() ), $text );

	return $more;
}

add_filter( 'the_content_more_link', 'totomo_content_more' );

/**
 * Auto add more links.
 *
 * @return string 'Continue reading' link prepended with an ellipsis.
 */
function totomo_content_more() {
	$text = wp_kses_post( sprintf( __( 'Continue reading &rarr; %s', 'totomo' ), '<span class="screen-reader-text">' . get_the_title() . '</span>' ) );
	$more = sprintf( '<p class="text-center"><a href="%s#more-%d" class="more-link">%s</a></p>', esc_url( get_permalink() ), get_the_ID(), $text );

	return $more;
}

add_filter( 'excerpt_length', 'totomo_excerpt_length' );

/**
 * Change excerpt length.
 *
 * @return int
 */
function totomo_excerpt_length() {
	return 25;
}

/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function totomo_entry_footer() {
	// Hide tag text for pages.
	if ( 'post' === get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '#', esc_html__( ' #', 'totomo' ) );
		if ( $tags_list ) {
			printf( '<div class="tags-links">%s</div>', $tags_list ); // WPCS: XSS OK.
		}
	}

	edit_post_link(
		sprintf(
			/* translators: %s: Name of current post */
			esc_html__( 'Edit %s', 'totomo' ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		),
		'<span class="edit-link">',
		'</span>'
	);
}
