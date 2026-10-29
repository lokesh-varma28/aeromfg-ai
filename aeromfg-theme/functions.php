<?php
/**
 * AeroMFG AI Theme Functions & Definitions
 *
 * @package AeroMFG_AI
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Prevent direct execution.
}

if ( ! function_exists( 'aeromfg_theme_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     */
    function aeromfg_theme_setup() {
        // Let WordPress manage the document title.
        add_theme_support( 'title-tag' );

        // Enable support for Post Thumbnails on posts and pages.
        add_theme_support( 'post-thumbnails' );

        // Support Custom Logo
        add_theme_support( 'custom-logo', array(
            'height'      => 48,
            'width'       => 220,
            'flex-width'  => true,
            'flex-height' => true,
        ) );

        // Switch default core markup for search form, comment form, and comments to output valid HTML5.
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        ) );

        // Register Primary and Footer Navigation Menus.
        register_nav_menus( array(
            'primary' => esc_html__( 'Primary Aerospace Navigation', 'aeromfg-ai' ),
            'footer'  => esc_html__( 'Footer Navigation Menu', 'aeromfg-ai' ),
        ) );
    }
endif;
add_action( 'after_setup_theme', 'aeromfg_theme_setup' );

/**
 * Enqueue scripts and styles.
 */
function aeromfg_enqueue_assets() {
    // Google Fonts: Space Grotesk & Inter
    wp_enqueue_style(
        'aeromfg-google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Space+Grotesk:wght@500;600;700&display=swap',
        array(),
        null
    );

    // Master Theme Stylesheet (metadata)
    wp_enqueue_style(
        'aeromfg-style',
        get_stylesheet_uri(),
        array(),
        '1.0.0'
    );

    // Industrial Theme CSS
    wp_enqueue_style(
        'aeromfg-theme-layout',
        get_template_directory_uri() . '/assets/css/theme.css',
        array( 'aeromfg-style' ),
        '1.0.0'
    );

    // Master Accessible Navigation Controller
    wp_enqueue_script(
        'aeromfg-navigation',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        '1.0.0',
        true
    );
}
add_action( 'wp_enqueue_scripts', 'aeromfg_enqueue_assets' );

/**
 * Filter navigation menu links to ensure .nav-link class is applied.
 */
function aeromfg_nav_menu_link_attributes( $atts, $item, $args ) {
    if ( isset( $args->theme_location ) && 'primary' === $args->theme_location ) {
        $existing_class = isset( $atts['class'] ) ? $atts['class'] . ' ' : '';
        $atts['class'] = $existing_class . 'nav-link';
        if ( in_array( 'current-menu-item', $item->classes, true ) || in_array( 'current_page_item', $item->classes, true ) ) {
            $atts['class'] .= ' active';
            $atts['aria-current'] = 'page';
        }
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'aeromfg_nav_menu_link_attributes', 10, 3 );

/**
 * Fallback menu if no WordPress Menu is configured in Admin.
 * Renders all nine AeroMFG AI pages.
 */
function aeromfg_default_primary_nav() {
    $current_uri = isset( $_SERVER['REQUEST_URI'] ) ? sanitize_text_field( wp_unslash( $_SERVER['REQUEST_URI'] ) ) : '';
    $nav_items = array(
        '/'                 => esc_html__( 'Command', 'aeromfg-ai' ),
        '/about/'           => esc_html__( 'About', 'aeromfg-ai' ),
        '/aiot-sensing/'    => esc_html__( 'AIoT Sensing', 'aeromfg-ai' ),
        '/video-ai/'        => esc_html__( 'Video AI', 'aeromfg-ai' ),
        '/solutions/'       => esc_html__( 'Solutions', 'aeromfg-ai' ),
        '/insights/'        => esc_html__( 'Insights', 'aeromfg-ai' ),
        '/resources/'       => esc_html__( 'Resources', 'aeromfg-ai' ),
        '/security/'        => esc_html__( 'Security', 'aeromfg-ai' ),
        '/contact/'         => esc_html__( 'Contact', 'aeromfg-ai' ),
    );

    echo '<nav id="primary-navigation" class="nav-menu" aria-label="' . esc_attr__( 'Primary Site Navigation', 'aeromfg-ai' ) . '">';
    foreach ( $nav_items as $path => $label ) {
        $url = esc_url( home_url( $path ) );
        $is_active = ( rtrim( $current_uri, '/' ) === rtrim( $path, '/' ) ) || ( '/' === $path && ( '' === $current_uri || '/' === $current_uri ) );
        $active_class = $is_active ? ' active' : '';
        $aria_current = $is_active ? ' aria-current="page"' : '';
        echo '<a href="' . $url . '" class="nav-link' . esc_attr( $active_class ) . '"' . $aria_current . '>' . esc_html( $label ) . '</a>';
    }
    echo '</nav>';
}

/**
 * Helper to get clean SVG diagram URL from theme assets.
 */
function aeromfg_asset( $filename ) {
    return esc_url( get_template_directory_uri() . '/assets/images/' . $filename );
}
