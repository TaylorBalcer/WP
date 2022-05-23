<?php
/**
 * forage_theme functions and definitions
 *
 * @package forage_theme
 * @since forage_theme 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since forage_theme 1.0
 */
if ( ! isset( $content_width ) )
    $content_width = 654; /* pixels */

if ( ! function_exists( 'forage_theme_setup' ) ):
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * @since forage_theme 1.0
 */
function forage_theme_setup() {

    /**
     * Custom template tags for this theme.
     */
    require( get_template_directory() . '/inc/template-tags.php' );

    /**
     * Custom functions that act independently of the theme templates
     */
    require( get_template_directory() . '/inc/tweaks.php' );

    /**
     * Make theme available for translation
     * Translations can be filed in the /languages/ directory
     * If you're building a theme based on forage_theme, use a find and replace
     * to change 'forage_theme' to the name of your theme in all the template files
     */
    load_theme_textdomain( 'forage_theme', get_template_directory() . '/languages' );

    /**
     * Add default posts and comments RSS feed links to head
     */
    add_theme_support( 'automatic-feed-links' );

    /**
     * Enable support for the Aside Post Format
     * With a theme that supports Post Formats, a blogger can
     * change how each post looks by choosing a Post Format
     * from a radio-button list.
     */
    add_theme_support( 'post-formats', array( 'aside' ) );

    /**
     * This theme uses wp_nav_menu() in one location.
     */
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'forage_theme' ),
    ) );
}
endif; // forage_theme_setup
//call it into our theme by �hooking� it onto another WordPress function:
add_action( 'after_setup_theme', 'forage_theme_setup' );


/**
 * Enqueue scripts and styles (attaches CSS and JS files)
 */
function forage_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'navigation', get_template_directory_uri() . '/css/responsive-nav.css'); 

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
 	//navigation.js turns your main navigation menu into a nifty mobile-friendly menu on smaller screens.
    wp_enqueue_script( 'navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
    wp_enqueue_script( 'navigation', get_template_directory_uri() . '/js/navigation.js'); 
 	//key-board-image-navigation.js adds the ability to navigate through images using the left and right arrow keys on your keyboard. This script only loads on single, image attachment pages.
    if ( is_singular() && wp_attachment_is_image() ) {
        wp_enqueue_script( 'keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
    }
}
add_action( 'wp_enqueue_scripts', 'forage_theme_scripts' );

/**
 * Register widgetized area and update sidebar with default widgets
 *
 * @since forage_theme 1.0
 */
function forage_theme_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Primary Widget Area', 'forage_theme' ),
        'id' => 'sidebar-1',
        'before_widget' => '<!--this code can be found and modified in the widgets_init function of functions.php--><section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section  >',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' => __( 'Secondary Widget Area', 'forage_theme' ),
        'id' => 'sidebar-2',
        'before_widget' => '<!--this code can be found and modified in the widgets_init function of functions.php--><section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
}
add_action( 'widgets_init', 'forage_theme_widgets_init' );
