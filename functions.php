<?php
/**
 * My Modern Theme functions and definitions
 *
 * @package My_Modern_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Define Constants
 */
define( 'MY_MODERN_THEME_VERSION', wp_get_theme()->get( 'Version' ) );
define( 'MY_MODERN_THEME_DIR', get_template_directory() );
define( 'MY_MODERN_THEME_URI', get_template_directory_uri() );

/**
 * Theme Setup
 */
function my_modern_theme_setup() {
	// Basic theme supports
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'html5', array(
		'comment-list',
		'comment-form',
		'search-form',
		'gallery',
		'caption',
		'style',
		'script',
	) );

	// Gutenberg supports
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'custom-line-height' );
	add_theme_support( 'custom-spacing' );
	add_theme_support( 'custom-units', array( 'rem', 'em', 'px', 'vh', 'vw' ) );

	// Custom logo
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 400,
		'flex-height' => true,
		'flex-width'  => true,
	) );

	// Editor styles
	add_editor_style( array( 'style.css', 'assets/css/editor-styles.css' ) );

	// Navigation menus
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'my-modern-theme' ),
		'footer'  => esc_html__( 'Footer Menu', 'my-modern-theme' ),
	) );

	// Image sizes
	add_image_size( 'modern-thumbnail', 400, 300, true );
	add_image_size( 'modern-medium', 800, 600, true );
	add_image_size( 'modern-large', 1200, 900, true );
	add_image_size( 'portfolio-square', 600, 600, true );
	add_image_size( 'portfolio-landscape', 1200, 800, true );
}
add_action( 'after_setup_theme', 'my_modern_theme_setup' );

/**
 * Enqueue Assets
 */
function my_modern_theme_scripts() {
	// Styles
	wp_enqueue_style(
		'my-modern-theme-style',
		get_stylesheet_uri(),
		array(),
		MY_MODERN_THEME_VERSION
	);

	wp_enqueue_style(
		'my-modern-theme-editor-styles',
		MY_MODERN_THEME_URI . '/assets/css/editor-styles.css',
		array(),
		MY_MODERN_THEME_VERSION
	);

	// Scripts
	wp_enqueue_script(
		'my-modern-theme-script',
		MY_MODERN_THEME_URI . '/assets/js/main.js',
		array( 'jquery', 'masonry' ),
		MY_MODERN_THEME_VERSION,
		true
	);

	// Localization
	wp_localize_script( 'my-modern-theme-script', 'themeData', array(
		'ajaxUrl' => esc_url( admin_url( 'admin-ajax.php' ) ),
		'nonce'   => wp_create_nonce( 'theme_ajax_nonce' )
	) );
}
add_action( 'wp_enqueue_scripts', 'my_modern_theme_scripts' );

/**
 * Custom Post Types
 */
function my_modern_theme_register_custom_post_types() {
	// Portfolio CPT
	$labels = array(
		'name'                  => esc_html_x( 'Portfolio', 'Post Type General Name', 'my-modern-theme' ),
		'singular_name'         => esc_html_x( 'Portfolio Item', 'Post Type Singular Name', 'my-modern-theme' ),
		'menu_name'             => esc_html__( 'Portfolio', 'my-modern-theme' ),
		'name_admin_bar'        => esc_html__( 'Portfolio Item', 'my-modern-theme' ),
		'archives'              => esc_html__( 'Portfolio Archives', 'my-modern-theme' ),
		'all_items'             => esc_html__( 'All Portfolio Items', 'my-modern-theme' ),
		'add_new_item'          => esc_html__( 'Add New Portfolio Item', 'my-modern-theme' ),
		'add_new'               => esc_html__( 'Add New', 'my-modern-theme' ),
		'new_item'              => esc_html__( 'New Portfolio Item', 'my-modern-theme' ),
		'edit_item'             => esc_html__( 'Edit Portfolio Item', 'my-modern-theme' ),
		'update_item'           => esc_html__( 'Update Portfolio Item', 'my-modern-theme' ),
		'view_item'             => esc_html__( 'View Portfolio Item', 'my-modern-theme' ),
		'view_items'            => esc_html__( 'View Portfolio Items', 'my-modern-theme' ),
	);

	$args = array(
		'label'               => esc_html__( 'Portfolio', 'my-modern-theme' ),
		'description'         => esc_html__( 'Portfolio items showcase', 'my-modern-theme' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'revisions' ),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-portfolio',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'show_in_rest'        => true,
	);
	register_post_type( 'portfolio', $args );
}
add_action( 'init', 'my_modern_theme_register_custom_post_types' );
function my_modern_theme_register_taxonomies() {
	// Portfolio Category Taxonomy
	$labels = array(
		'name'              => esc_html_x( 'Portfolio Categories', 'taxonomy general name', 'my-modern-theme' ),
		'singular_name'     => esc_html_x( 'Portfolio Category', 'taxonomy singular name', 'my-modern-theme' ),
		'search_items'      => esc_html__( 'Search Portfolio Categories', 'my-modern-theme' ),
		'all_items'         => esc_html__( 'All Portfolio Categories', 'my-modern-theme' ),
		'parent_item'       => esc_html__( 'Parent Portfolio Category', 'my-modern-theme' ),
		'parent_item_colon' => esc_html__( 'Parent Portfolio Category:', 'my-modern-theme' ),
		'edit_item'         => esc_html__( 'Edit Portfolio Category', 'my-modern-theme' ),
		'update_item'       => esc_html__( 'Update Portfolio Category', 'my-modern-theme' ),
		'add_new_item'      => esc_html__( 'Add New Portfolio Category', 'my-modern-theme' ),
		'new_item_name'     => esc_html__( 'New Portfolio Category Name', 'my-modern-theme' ),
		'menu_name'         => esc_html__( 'Portfolio Categories', 'my-modern-theme' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'show_in_rest'      => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'portfolio-category' ),
	);

	register_taxonomy( 'portfolio_category', array( 'portfolio' ), $args );
}
add_action( 'init', 'my_modern_theme_register_taxonomies' );

function my_modern_theme_add_portfolio_meta_boxes() {
	add_meta_box(
		'portfolio_meta_box', // ID
		esc_html__( 'Portfolio Details', 'my-modern-theme' ), // Title
		'my_modern_theme_portfolio_meta_box_callback', // Callback function
		'portfolio', // Post type
		'normal', // Context
		'high' // Priority
	);
}
add_action( 'add_meta_boxes', 'my_modern_theme_add_portfolio_meta_boxes' );

function my_modern_theme_portfolio_meta_box_callback( $post ) {
	// Add nonce for security
	wp_nonce_field( 'my_modern_theme_portfolio_meta_box', 'my_modern_theme_portfolio_meta_box_nonce' );

	// Get existing meta values
	$price = get_post_meta( $post->ID, '_portfolio_price', true );
	$client_name = get_post_meta( $post->ID, '_portfolio_client_name', true );
	$project_duration = get_post_meta( $post->ID, '_portfolio_project_duration', true );
	$rating = get_post_meta( $post->ID, '_portfolio_rating', true );

	// Output the fields
	echo '<label for="portfolio_price">' . esc_html__( 'Price', 'my-modern-theme' ) . '</label>';
	echo '<input type="text" id="portfolio_price" name="portfolio_price" value="' . esc_attr( $price ) . '" size="25" />';

	echo '<label for="portfolio_client_name">' . esc_html__( 'Client Name', 'my-modern-theme' ) . '</label>';
	echo '<input type="text" id="portfolio_client_name" name="portfolio_client_name" value="' . esc_attr( $client_name ) . '" size="25" />';

	echo '<label for="portfolio_project_duration">' . esc_html__( 'Project Duration', 'my-modern-theme' ) . '</label>';
	echo '<input type="text" id="portfolio_project_duration" name="portfolio_project_duration" value="' . esc_attr( $project_duration ) . '" size="25" />';

	echo '<label for="portfolio_rating">' . esc_html__( 'Rating', 'my-modern-theme' ) . '</label>';
	echo '<input type="number" id="portfolio_rating" name="portfolio_rating" value="' . esc_attr( $rating ) . '" min="1" max="5" />';
}
function my_modern_theme_save_portfolio_meta( $post_id ) {
	// Check nonce
	if ( ! isset( $_POST['my_modern_theme_portfolio_meta_box_nonce'] ) || ! wp_verify_nonce( $_POST['my_modern_theme_portfolio_meta_box_nonce'], 'my_modern_theme_portfolio_meta_box' ) ) {
		return;
	}

	// Check if this is an autosave
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}

	// Check user permissions
	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return;
	}

	// Save meta data
	if ( isset( $_POST['portfolio_price'] ) ) {
		update_post_meta( $post_id, '_portfolio_price', sanitize_text_field( $_POST['portfolio_price'] ) );
	}
	if ( isset( $_POST['portfolio_client_name'] ) ) {
		update_post_meta( $post_id, '_portfolio_client_name', sanitize_text_field( $_POST['portfolio_client_name'] ) );
	}
	if ( isset( $_POST['portfolio_project_duration'] ) ) {
		update_post_meta( $post_id, '_portfolio_project_duration', sanitize_text_field( $_POST['portfolio_project_duration'] ) );
	}
	if ( isset( $_POST['portfolio_rating'] ) ) {
		update_post_meta( $post_id, '_portfolio_rating', sanitize_text_field( $_POST['portfolio_rating'] ) );
	}
}
add_action( 'save_post', 'my_modern_theme_save_portfolio_meta' );

/**
 * Security Enhancements
 */
function my_modern_theme_security_headers() {
	if ( ! headers_sent() && ! is_admin() ) {
		header( 'X-Content-Type-Options: nosniff' );
		header( 'X-Frame-Options: SAMEORIGIN' );
		header( 'X-XSS-Protection: 1; mode=block' );
		header( 'Referrer-Policy: strict-origin-when-cross-origin' );
	}
}
add_action( 'send_headers', 'my_modern_theme_security_headers' );

// Disable XML-RPC
add_filter( 'xmlrpc_enabled', '__return_false' );

// Remove WordPress version
function my_modern_theme_remove_version() {
	return '';
}
add_filter( 'the_generator', 'my_modern_theme_remove_version' );

/**
 * Block Patterns
 */
function my_theme_register_patterns() {
    // Organized category registration
    $categories = array(
        'hero'          => esc_html__('Hero Sections', 'my-modern-theme'),
        'grid'          => esc_html__('Grid Layouts', 'my-modern-theme'),
        'posts'         => esc_html__('Post Layouts', 'my-modern-theme'),
        'pricing'       => esc_html__('Pricing Tables', 'my-modern-theme'),
        'testimonials'  => esc_html__('Testimonials', 'my-modern-theme'),
        'cta'           => esc_html__('Call to Action', 'my-modern-theme'),
        'team'          => esc_html__('Team Members', 'my-modern-theme'),
        'stats'         => esc_html__('Stats & Counters', 'my-modern-theme'),
        'timeline'      => esc_html__('Timelines', 'my-modern-theme'),
        'faq'           => esc_html__('FAQ & Accordions', 'my-modern-theme'),
        'split'         => esc_html__('Split Content', 'my-modern-theme'),
        'blog'          => esc_html__('Blog Layouts', 'my-modern-theme'),
        'services'      => esc_html__('Services', 'my-modern-theme'),
        'slider'        => esc_html__('Sliders & Carousels', 'my-modern-theme'),
        'portfolio'     => esc_html__('Portfolio Showcase', 'my-modern-theme'),
        'features'      => esc_html__('Interactive Features', 'my-modern-theme'),
        'woocommerce'   => esc_html__('WooCommerce', 'my-modern-theme')
    );

    foreach ($categories as $slug => $label) {
        register_block_pattern_category($slug, array(
            'label' => $label,
        ));
    }

    // Organized pattern inclusion with error handling
    $patterns = array(
        'hero'          => array('hero-banner.php', 'gradient-hero.php'),
        'slider'        => array('image-slider.php', 'testimonial-carousel.php', 'fullscreen-slider.php'),
        'features'      => array('interactive-features.php', 'modal-popup.php', 'hover-cards.php'),
        'portfolio'     => array('portfolio-showcase.php', 'project-grid.php', 'portfolio-filterable.php'),
        'woocommerce'   => array('product-grid.php', 'featured-product.php'),
        // ... rest of your patterns
    );

    foreach ($patterns as $category => $files) {
        foreach ((array)$files as $file) {
            $path = get_template_directory() . '/block-patterns/' . $file;
            if (file_exists($path)) {
                require_once $path;
            }
        }
    }
}
add_action('init', 'my_theme_register_patterns');

/**
 * Meta Tags
 */
function my_modern_theme_meta_tags() {
	echo '<meta charset="' . esc_attr( get_bloginfo( 'charset' ) ) . '">';
	echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
	echo '<meta name="description" content="' . esc_attr( get_bloginfo( 'description' ) ) . '">';
}
add_action( 'wp_head', 'my_modern_theme_meta_tags' );

/**
 * Performance Optimization
 */
function my_modern_theme_disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
}
add_action( 'init', 'my_modern_theme_disable_emojis' );