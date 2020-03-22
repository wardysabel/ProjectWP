<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package totomo
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php
if ( function_exists( 'wp_body_open' ) ) {
	wp_body_open();
}
?>
<div id="wrapper">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'totomo' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="top-bar container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#site-navigation">
					<span class="icon-bars"><?php _e( 'Toggle navigation', 'totomo' ); ?></span>
				</button>
			</div>
			<div class="site-branding title-area">
				<?php $tag = is_front_page() ? 'h1' : 'div'; ?>
				<<?php echo $tag; ?> id="logo" class="site-title">
				<?php
				if ( function_exists( 'the_custom_logo' ) && has_custom_logo() )
				{
					the_custom_logo();
				}
				else
				{
					printf( '<a href="%s" title="%s">%s</a>', esc_url( home_url( '/' ) ), esc_attr( get_bloginfo( 'name' ) ), get_bloginfo( 'name' ) );
				}
				?>

			</<?php echo $tag; ?>>
			<?php
			if ( $desc = get_bloginfo( 'description' ) )
			{
				printf( '<div class="site-description" itemprop="description">%s</div>', $desc );
			}
			?>
		</div>
		<div class="header-search right">
			<a href="#" class="search-toggler">
				<span><i class="fa fa-search"></i></span>
			</a>
			<div class="search-form"><?php echo get_search_form(); ?></div>
		</div>
		<nav id="site-navigation" class="site-navigation pull-right">
			<?php
			wp_nav_menu( array(
				'theme_location'  => 'primary',
				'container_class' => 'navbar-collapse',
				'container_id'    => 'navbar-collapse',
				'menu_class'      => 'primary-menu nav navbar-nav navbar-right',
				'menu_id'         => 'navigation',
				'walker'          => new Totomo_Bootstrap_Nav_Walker,
				'fallback_cb'     => 'totomo_bootstrap_menu_callback',
			) );
			?>
		</nav>

</div>
</header><!-- #masthead -->
<div id="content" class="site-content container">
