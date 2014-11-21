<?php
/**
 * VMG_theme functions and definitions
 *
 * @package VMG_theme
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'vmg_theme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function vmg_theme_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on VMG_theme, use a find and replace
	 * to change 'vmg_theme' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'vmg_theme', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'vmg_theme' ),
		'left' => __( 'Left Menu', 'vmg_theme' ),
		'right' => __( 'Right Menu', 'vmg_theme' ),
		'footer' =>  __( 'Footer Menu', 'vmg_theme' )
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'vmg_theme_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // vmg_theme_setup
add_action( 'after_setup_theme', 'vmg_theme_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function vmg_theme_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'vmg_theme' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Knowledge Center', 'vmg_theme' ),
		'id'            => 'sidebar-2',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'vmg_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function vmg_theme_scripts() {
	
	wp_deregister_script( 'jquery' );
	
	wp_deregister_script( 'font-awesome' );
	
	wp_deregister_script( 'raleway-font' );
	
	$jquery_cdn = 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js';
	
	$fontAwesome_cdn = 'https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css';
	
	$raleway_cdn = 'https://fonts.googleapis.com/css?family=Raleway:800,900';
	
	$oxygen_cdn = 'http://fonts.googleapis.com/css?family=Oxygen:700,400';
 	
	wp_enqueue_style( 'vmg_theme-style', get_stylesheet_uri() );
	
	wp_enqueue_style( 'vmg_theme-bootstrap', get_template_directory_uri() . '/css/custom.css' , array(), '3.3.1');
	
	wp_enqueue_style( 'vmg_theme-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' , array(), '3.3.1');
	
	wp_enqueue_style( 'vmg_theme-fontAwesome', $fontAwesome_cdn, array(), '4.2.0', true );
	
	wp_enqueue_style( 'vmg_theme-oxygenFont', $fontAwesome_cdn, array() );
	
	wp_enqueue_style( 'vmg_theme-ralewayFont', $oxygen_cdn, array() );

	wp_enqueue_script( 'vmg_theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'vmg_theme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	
	wp_enqueue_script( 'mg_theme-jquery', $jquery_cdn, array(), '20130115', true );
	
	wp_enqueue_script( 'vmg_theme-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js' , array(), '3.3.1', true );
	
	wp_enqueue_script( 'vmg_theme-custom', get_template_directory_uri() . '/js/custom.js' , array(), '1.0.0', true );
	
	wp_enqueue_script( 'vmg_theme-modernizr', get_template_directory_uri() . '/js/modernizr.custom.js' , array(), '1.0.0' );
	
	wp_enqueue_script( 'vmg_theme-classie', get_template_directory_uri() . '/js/classie.js' , array(), '3.3.1', true );
	
	wp_enqueue_script( 'vmg_theme-uisearch', get_template_directory_uri() . '/js/uisearch.js' , array(), '1.0.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'vmg_theme_scripts' );

/*function add_search_to_wp_menu ( $items, $args ) {
	if( 'right' === $args -> theme_location ) {
		$items .= '<li class="menu-item menu-item-search">';
		$items .= '<div id="sb-search" class="sb-search">
				    	<form method="get" action="' . get_bloginfo('home') . '/">
					        <input class="sb-search-input" placeholder="Enter your search term..." type="search" value="" name="search" id="search">
					        <input class="sb-search-submit" type="submit" value="">
					        <span class="sb-icon-search"></span>
				    	</form>
					</div>';
		$items .= '</li>';
	}
return $items;
}

add_filter('wp_nav_menu_items','add_search_to_wp_menu',10,2);*/

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


