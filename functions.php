<?php
/**
 * M Lab Studio functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package M_Lab_Studio
 */

if ( ! function_exists( 'mlabstudio_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function mlabstudio_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on M Lab Studio, use a find and replace
		 * to change 'mlabstudio' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'mlabstudio', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary', 'mlabstudio' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'mlabstudio_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 440,
			'width'       => 160,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'mlabstudio_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mlabstudio_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'mlabstudio_content_width', 640 );
}
add_action( 'after_setup_theme', 'mlabstudio_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mlabstudio_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'mlabstudio' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'mlabstudio' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'mlabstudio_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function mlabstudio_scripts() {
	wp_enqueue_style( 'mlabstudio-style', get_stylesheet_uri() );

	/**
	 * Custom CSS theme styles
	 */
	// wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css' );
	// wp_enqueue_style( 'custom-animation', get_template_directory_uri() . '/css/custom-animation.css' );
	// wp_enqueue_style( 'style', get_template_directory_uri() . '/vendor/animated-headline-master/style.css' );
	// wp_enqueue_style( 'aos', get_template_directory_uri() . '/vendor/aos-next/dist/aos.css');
	// wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css' );
	// wp_enqueue_style( 'fancybox', get_template_directory_uri() . 'vendor/fancybox/dist/jquery.fancybox.min.css' );
	// wp_enqueue_style( 'iziModal', get_template_directory_uri() . '/vendor/iziModal-master/iziModal.css' );
	// wp_enqueue_style( 'jquery-ui', get_template_directory_uri() . '/vendor/jquery-ui/jquery-ui.min.css' );
	// wp_enqueue_style( 'menu', get_template_directory_uri() . '/vendor/mega-menu/assets/css/menu.css' );
	// wp_enqueue_style( 'animate', get_template_directory_uri() . '/vendor/owl-carousel/animate.css' );
	// wp_enqueue_style( 'carousel', get_template_directory_uri() . '/vendor/owl-carousel/owl.carousel.css' );
	// wp_enqueue_style( 'theme', get_template_directory_uri() . '/vendor/owl-carousel/owl.theme.css' );
	// wp_enqueue_style( 'selectize', get_template_directory_uri() . '/vendor/selectize.js/selectize.css' );
	// wp_enqueue_style( 'snazzy-info-window', get_template_directory_uri() . '/vendor/sanzzy-map/dist/snazzy-info-window.min.css' );
	// wp_enqueue_style( 'tabs', get_template_directory_uri() . '/vendor/tabs/tabs.css' );

	wp_enqueue_script( 'mlabstudio-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'mlabstudio-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	/**
	 * Custom JS theme scripts
	 */
	// wp_enqueue_script( 'wow', get_template_directory_uri() . '/vendor/WOW-master/dist/wow.min.js', array ( 'jquery' ), 1.1, true);
	// wp_enqueue_script( 'ajaxchimp', get_template_directory_uri() . '/vendor/ajaxchimp/jquery.ajaxchimp.min.js', array ( 'jquery' ), 1.1, true);
	// wp_enqueue_script( 'main', get_template_directory_uri() . '/vendor/animated-headline-master/main.js', array ( 'jquery' ), 1.1, true);
	// wp_enqueue_script( 'aos', get_template_directory_uri() . '/vendor/aos-next/dist/aos.js', array ( 'jquery' ), 1.1, true);
	// wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);
	// wp_enqueue_script( 'tweenmax', get_template_directory_uri() . '/vendor/cr-project/TweenMax.min.js', array ( 'jquery' ), 1.1, true);
	// wp_enqueue_script( 'charming', get_template_directory_uri() . '/vendor/cr-project/charming.min.js', array ( 'jquery' ), 1.1, true);
	// wp_enqueue_script( 'demo', get_template_directory_uri() . '/vendor/cr-project/demo.js', array ( 'jquery' ), 1.1, true);
	// wp_enqueue_script( 'imagesloaded', get_template_directory_uri() . '/vendor/cr-project/imagesloaded.pkgd.min.js', array ( 'jquery' ), 1.1, true);
	// wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/vendor/fancybox/dist/jquery.fancybox.min.js', array ( 'jquery' ), 1.1, true);
	// wp_enqueue_script( 'iziModal', get_template_directory_uri() . '/vendor/iziModal-master/iziModal.min.js', array ( 'jquery' ), 1.1, true);
	// wp_enqueue_script( 'jquery-ui', get_template_directory_uri() . '/vendor/jquery-ui/jquery-ui.min.js', array ( 'jquery' ), 1.1, true);
	// wp_enqueue_script( 'custom', get_template_directory_uri() . '/vendor/mega-menu/assets/js/custom.js', array ( 'jquery' ), 1.1, true);
	// wp_enqueue_script( 'carousel', get_template_directory_uri() . '/vendor/owl-carousel/owl.carousel.min.js', array ( 'jquery' ), 1.1, true);
	// wp_enqueue_script( 'popper', get_template_directory_uri() . '/vendor/popper.js/popper.min.js', array ( 'jquery' ), 1.1, true);
	// wp_enqueue_script( 'selectize', get_template_directory_uri() . '/vendor/selectize.js/selectize.min.js', array ( 'jquery' ), 1.1, true);
	// wp_enqueue_script( 'tabs', get_template_directory_uri() . '/vendor/tabs/tabs.js', array ( 'jquery' ), 1.1, true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mlabstudio_scripts' );

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

// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

// disable for posts
add_filter('use_block_editor_for_post', '__return_false', 10);

// disable for post types
add_filter('use_block_editor_for_post_type', '__return_false', 10);

// Enable SVG
function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');