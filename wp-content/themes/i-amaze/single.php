<?php
/**
 * The template for displaying all single posts
 *
 * @package i-amaze
 * @since i-amaze 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            
                <div class="meta-img">
                <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
                    <div class="entry-thumbnail">
						<?php                        
                        $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
                        echo '<a href="' . esc_url($large_image_url[0]) . '" title="' . esc_attr(the_title_attribute( 'echo=0' )) . '" class="tx-colorbox">';
                        the_post_thumbnail('iamaze-single-thumb');
                        echo '</a>';
                        ?>

                    </div>
                <?php endif; ?>
                </div>
                
                <div class="post-mainpart">    
                    <header class="entry-header">
                        <div class="entry-meta">
                            <?php iamaze_entry_meta(); ?>
                            <?php edit_post_link( esc_attr__( 'Edit', 'i-amaze' ), '<span class="edit-link">', '</span>' ); ?>
                        </div><!-- .entry-meta -->
                    </header><!-- .entry-header -->
                
                    <div class="entry-content">
                        <?php the_content( esc_attr__( 'Continue reading <span class="meta-nav">&rarr;</span>', 'i-amaze' ) ); ?>
                        <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . esc_attr__( 'Pages:', 'i-amaze' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
                    </div><!-- .entry-content -->

                	<?php if ( is_single() && get_the_author_meta( 'description' ) && is_multi_author() ) : ?>
                    	<footer class="entry-meta">
                            <?php get_template_part( 'author-bio' ); ?>
                    	</footer><!-- .entry-meta -->
					<?php endif; ?>
                </div>
            </article><!-- #post -->    
    

				<?php iamaze_post_nav(); ?>
				<?php comments_template(); ?>

			<?php endwhile; ?>

		</div><!-- #content -->
		<?php get_sidebar(); ?>
	</div><!-- #primary -->


<?php get_footer(); ?>