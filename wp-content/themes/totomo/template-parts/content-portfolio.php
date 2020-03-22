<?php
/**
 * The template for displaying Projects on index view
 *
 * @package TheFour
 */
// get Jetpack Portfolio taxonomy terms for portfolio filtering
?>
<?php totomo_post_formats(); ?>
<a class="entry-text" href="<?php the_permalink(); ?>">
	<header class="entry-header">
		<h3 class="entry-title"><?php the_title(); ?></h3>
	</header>
</a>


