<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package VMG_theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'vmg_theme' ); ?></a>

	<header id="masthead" class="site-header" role="banner"> 
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<!--<button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Primary Menu', 'vmg_theme' ); ?></button>-->
			<?php wp_nav_menu( array( 'theme_location' => 'left' ) ); ?>
			<div class="site-branding">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<!--<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>-->
					<img src="<?php bloginfo('template_url'); ?>/images/VMG_Color_Vertical.png">
					<!--<h6>Valley Maintenance Group</h6>-->
				</a>
				<!--<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>-->
			</div><!-- .site-branding -->
			<?php wp_nav_menu( array( 'theme_location' => 'right' ) ); ?>
			<div class="search-container">
				<div id="sb-search" class="sb-search">
				    <form id="searchform" role="search" method="get" action="<?php echo site_url('/'); ?>">
				        <input class="sb-search-input" placeholder="Enter your search term..." type="search" value="" name="search" id="search">
				        <input class="sb-search-submit" type="submit" value="">
				        <span class="sb-icon-search"></span>
				    </form>
				</div>
			</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
	<div id="content" class="site-content">
