<?php
/**
 * wpXpress functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wpXpress
 */

if ( ! defined( '_S_VERSION' ) ) {
    define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'wpxpress_setup' ) ) {
    function wpxpress_setup() {

        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'customize-selective-refresh-widgets' );
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
        add_theme_support(
            'custom-logo',
            array(
                'height'      => 250,
                'width'       => 250,
                'flex-width'  => true,
                'flex-height' => true,
            )
        );

        register_nav_menus(
            array(
                'main-menu' => esc_html__( 'Main Menu', 'wpxpress' ),
            )
        );
    }
}
add_action( 'after_setup_theme', 'wpxpress_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wpxpress_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'wpxpress_content_width', 640 );
}

add_action( 'after_setup_theme', 'wpxpress_content_width', 0 );

/**
 * Register widget area.
 */
function wpxpress_widgets_init() {
    register_sidebar(
        array(
            'name'          => esc_html__( 'Sidebar', 'wpxpress' ),
            'id'            => 'sidebar-1',
            'description'   => esc_html__( 'Add widgets here.', 'wpxpress' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}

add_action( 'widgets_init', 'wpxpress_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function wpxpress_scripts() {
    wp_enqueue_style( 'wpxpress-style', get_stylesheet_uri(), array(), _S_VERSION );
    wp_enqueue_style( 'milligram', get_template_directory_uri() . '/assets/css/milligram.css', array(), '1.4.1' );
    wp_enqueue_style( 'wpxpress-default-style', get_template_directory_uri() . '/assets/css/default.css', array(), _S_VERSION );

    wp_enqueue_script( 'wpxpress-scripts', get_template_directory_uri() . '/assets/js/scripts.js', array(), _S_VERSION, true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

add_action( 'wp_enqueue_scripts', 'wpxpress_scripts' );

require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/customizer.php';

