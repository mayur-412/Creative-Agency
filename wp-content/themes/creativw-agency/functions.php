<?php
/**
 * creativw agency functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package creativw_agency
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
function creativw_agency_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on creativw agency, use a find and replace
		* to change 'creativw-agency' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'creativw-agency', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'creativw-agency' ),
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
			'creativw_agency_custom_background_args',
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
add_action( 'after_setup_theme', 'creativw_agency_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function creativw_agency_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'creativw_agency_content_width', 640 );
}
add_action( 'after_setup_theme', 'creativw_agency_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function creativw_agency_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'creativw-agency' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'creativw-agency' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'creativw_agency_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function creativw_agency_scripts() {

	// Theme Default Style
	wp_enqueue_style(
		'creativw-agency-style',
		get_stylesheet_uri(),
		array(),
		_S_VERSION
	);

	// Google Font
	wp_enqueue_style(
		'google-font-lato',
		'https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap',
		array(),
		null
	);

	// mmenu CSS
	wp_enqueue_style(
		'mmenu-css',
		get_template_directory_uri() . '/css/mmenu.css',
		array(),
		'1.0'
	);

	// Owl Carousel CSS
	wp_enqueue_style(
		'owl-carousel-css',
		get_template_directory_uri() . '/css/owl.carousel.min.css',
		array(),
		'2.3.4'
	);

	   wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css',
        array(),
        '6.7.2'
    );

	    // Magnific Popup CSS
    wp_enqueue_style(
        'magnific-popup-css',
        'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css',
        array(),
        '1.1.0'
    );

	// Theme Custom CSS
	wp_enqueue_style(
		'custom-style',
		get_template_directory_uri() . '/css/style.css',
		array( 'mmenu-css', 'owl-carousel-css' ),
		'1.0'
	);

	// WordPress jQuery
	wp_enqueue_script( 'jquery' );

    // Magnific Popup JS
    wp_enqueue_script(
        'magnific-popup-js',
        'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js',
        array('jquery'),
        '1.1.0',
        true
    );

	// Navigation JS
	wp_enqueue_script(
		'creativw-agency-navigation',
		get_template_directory_uri() . '/js/navigation.js',
		array(),
		_S_VERSION,
		true
	);

	// mmenu JS
	wp_enqueue_script(
		'mmenu-js',
		get_template_directory_uri() . '/js/mmenu.js',
		array( 'jquery' ),
		'1.0',
		true
	);

	// Owl Carousel JS
	wp_enqueue_script(
		'owl-carousel-js',
		get_template_directory_uri() . '/js/owl.carousel.js',
		array( 'jquery' ),
		'2.3.4',
		true
	);

	// Custom JS
	wp_enqueue_script(
		'custom-js',
		get_template_directory_uri() . '/js/custom.js',
		array( 'jquery', 'mmenu-js', 'owl-carousel-js' ),
		'1.0',
		true
	);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'creativw_agency_scripts' );

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
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

