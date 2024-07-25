<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

/**
 * green-system functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package green-system
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function green_system_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on green-system, use a find and replace
		* to change 'green-system' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'green-system', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary Visible', 'green-system' ),
			'menu-4' => esc_html__( 'Primary Hidden', 'green-system' ),
			'menu-2' => esc_html__( 'Footer Main', 'green-system' ),
			'menu-3' => esc_html__( 'Footer Secondary', 'green-system' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'green_system_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'green_system_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function green_system_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'green_system_content_width', 640 );
}
add_action( 'after_setup_theme', 'green_system_content_width', 0 );


/**
 * Enqueue scripts and styles.
 */
function green_system_scripts() {
	wp_enqueue_style( 'green-system-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style('green-system-style-main', get_template_directory_uri() . '/assets/css/style.min.css', array(), _S_VERSION);

	wp_enqueue_script( 'green-system-js-main', get_template_directory_uri() . '/assets/js/main.min.js', array('jquery'), _S_VERSION, true );

}
add_action( 'wp_enqueue_scripts', 'green_system_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Carbon fields
 */

require get_template_directory() . '/inc/carbon-init.php';

/**
 * Custom post types
 */

require get_template_directory() . '/inc/custom-post-types.php';

/**
 * Ajax
 */

require get_template_directory() . '/inc/ajax-content.php';


/**
 * Poly translation
 */

require get_template_directory() . '/inc/poly-translation.php';


/**
 * Variables
 */
define( 'SITE_URL', get_site_url() );
define( 'SITE_LOCALE', get_locale() );
define( 'THEME_PATH', get_template_directory_uri() );

/**
 * Custom login page
 */

require get_template_directory() . '/inc/custom-login-page.php';


	function addCustomCategoryInPage() {

		register_taxonomy_for_object_type('solar_decision_tax', 'page');
	}

	add_action( 'init', 'addCustomCategoryInPage' );

	/**
	 * Add duplicate
	 */

	require get_template_directory() . '/inc/add-diplicate.php';