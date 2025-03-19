<?php
// Enhanced Theme Setup with additional features
function my_theme_setup() {
    // Basic theme supports
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('wp-block-styles');
    add_theme_support('align-wide');
    add_theme_support('editor-styles');
    add_theme_support('responsive-embeds');
    add_theme_support('custom-line-height');
    add_theme_support('custom-units');
    add_theme_support('html5', array(
        'comment-list',
        'comment-form',
        'search-form',
        'gallery',
        'caption',
        'style',
        'script'
    ));
    
    // Editor styles
    add_editor_style(array('style.css', get_template_directory_uri() . '/assets/css/editor-styles.css'));
    
    // Register custom navigation menus
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'my-modern-theme'),
        'footer'  => esc_html__('Footer Menu', 'my-modern-theme')
    ));
    
    // Add image sizes
    add_image_size('modern-thumbnail', 400, 300, true);
    add_image_size('modern-medium', 800, 600, true);
    add_image_size('modern-large', 1200, 900, true);
    add_image_size('portfolio-square', 600, 600, true);
    add_image_size('portfolio-landscape', 1200, 800, true);
}

add_action('after_setup_theme', 'my_theme_setup');

// Register Portfolio Custom Post Type
function my_theme_register_portfolio_cpt() {
    $labels = array(
        'name'                  => _x('Portfolio', 'Post Type General Name', 'my-modern-theme'),
        'singular_name'         => _x('Portfolio Item', 'Post Type Singular Name', 'my-modern-theme'),
        'menu_name'             => __('Portfolio', 'my-modern-theme'),
        'all_items'             => __('All Portfolio Items', 'my-modern-theme'),
        'add_new_item'          => __('Add New Portfolio Item', 'my-modern-theme'),
        'add_new'               => __('Add New', 'my-modern-theme'),
        'edit_item'             => __('Edit Portfolio Item', 'my-modern-theme'),
        'update_item'           => __('Update Portfolio Item', 'my-modern-theme'),
        'view_item'             => __('View Portfolio Item', 'my-modern-theme'),
    );

    $args = array(
        'label'                 => __('Portfolio', 'my-modern-theme'),
        'description'           => __('Portfolio items showcase', 'my-modern-theme'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail', 'excerpt'),
        'taxonomies'            => array('portfolio_category', 'portfolio_tag'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-portfolio',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'  => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
    );

    register_post_type('portfolio', $args);

    // Register Portfolio Taxonomy
    register_taxonomy('portfolio_category', array('portfolio'), array(
        'labels' => array(
            'name' => __('Portfolio Categories', 'my-modern-theme'),
            'singular_name' => __('Portfolio Category', 'my-modern-theme'),
        ),
        'hierarchical' => true,
        'show_admin_column' => true,
        'show_in_rest' => true,
    ));

    register_taxonomy('portfolio_tag', array('portfolio'), array(
        'labels' => array(
            'name' => __('Portfolio Tags', 'my-modern-theme'),
            'singular_name' => __('Portfolio Tag', 'my-modern-theme'),
        ),
        'hierarchical' => false,
        'show_admin_column' => true,
        'show_in_rest' => true,
    ));
}
add_action('init', 'my_theme_register_portfolio_cpt', 0);

// Enhanced Block Patterns Registration
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

// ... [Keep the rest of your existing code unchanged] ...

// Enhanced Scripts and Styles Registration
function my_theme_enqueue_scripts() {
    // Theme styles
    wp_enqueue_style('theme-main', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'));
    wp_enqueue_style('theme-modern', get_template_directory_uri() . '/assets/css/modern.css', array(), '1.0');
    
    // Theme scripts
    $dependencies = array('jquery', 'masonry');
    
    wp_enqueue_script('theme-scripts', 
        get_template_directory_uri() . '/assets/js/main.js', 
        $dependencies, 
        filemtime(get_template_directory() . '/assets/js/main.js'), 
        true
    );
    
    // Conditional scripts
    if (is_front_page()) {
        wp_enqueue_script('theme-slider', 
            get_template_directory_uri() . '/assets/js/slider.js', 
            array(), 
            '1.0', 
            true
        );
    }
    
    // Localize script data
    wp_localize_script('theme-scripts', 'themeData', array(
        'ajaxUrl' => admin_url('admin-ajax.php'),
        'nonce'   => wp_create_nonce('theme-nonce')
    ));
}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');

// Enhanced Meta Tags with Open Graph and Twitter Cards
function my_theme_meta_tags() {
    echo '<meta charset="' . get_bloginfo('charset') . '">';
    echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
    echo '<meta name="description" content="' . esc_attr(get_bloginfo('description')) . '">';
    
    // Open Graph
    echo '<meta property="og:title" content="' . esc_attr(get_the_title()) . '">';
    echo '<meta property="og:type" content="website">';
    echo '<meta property="og:url" content="' . esc_url(get_permalink()) . '">';
    
    // Twitter Cards
    echo '<meta name="twitter:card" content="summary_large_image">';
    echo '<meta name="twitter:site" content="@yourusername">';
    
    // Preconnect to important origins
    echo '<link rel="preconnect" href="https://fonts.gstatic.com">';
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
}

add_action('wp_head', 'my_theme_meta_tags');

// Additional Theme Features
// -------------------------

 
// 4. Gutenberg Block Enhancements
add_theme_support('editor-color-palette', array(
    array(
        'name'  => esc_html('Primary', 'my-modern-theme'),
        'slug'  => 'primary',
        'color' => '#2563eb',
    ),
    array(
        'name'  => esc_html('Secondary', 'my-modern-theme'),
        'slug'  => 'secondary',
        'color' => '#4f46e5',
    ),
));

// 5. Security Headers
function my_theme_security_headers() {
    header('X-Content-Type-Options: nosniff');
    header('X-Frame-Options: SAMEORIGIN');
    header('X-XSS-Protection: 1; mode=block');
}
add_action('send_headers', 'my_theme_security_headers');

// 6. Performance Optimization
function my_theme_disable_emojis() {
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
}
add_action('init', 'my_theme_disable_emojis');


function register_custom_slider_block() {
    register_block_type('my-modern-theme/slider', array(
        'api_version' => 2,
        'editor_script' => 'custom-slider-editor',
        'editor_style' => 'custom-slider-editor',
        'style' => 'custom-slider-frontend',
        'render_callback' => 'render_custom_slider_block',
        'attributes' => array(
            'showArrows' => array('type' => 'boolean', 'default' => true),
            'showDots' => array('type' => 'boolean', 'default' => true),
            'autoplay' => array('type' => 'boolean', 'default' => false),
            'effect' => array('type' => 'string', 'default' => 'slide'),
        )
    ));
}
add_action('init', 'register_custom_slider_block');

function render_custom_slider_block($attributes, $content) {
    ob_start(); ?>
    <div class="custom-slider swiper"
         data-autoplay="<?php echo $attributes['autoplay'] ? 'true' : 'false'; ?>"
         data-effect="<?php echo esc_attr($attributes['effect']); ?>">
        <div class="swiper-wrapper">
            <?php echo $content; ?>
        </div>
        
        <?php if ($attributes['showArrows']) : ?>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        <?php endif; ?>
        
        <?php if ($attributes['showDots']) : ?>
            <div class="swiper-pagination"></div>
        <?php endif; ?>
    </div>
    <?php
    return ob_get_clean();
}
function custom_slider_assets() {
    // Enqueue Swiper CSS and JS
    wp_enqueue_style('swiper-css', 'https://unpkg.com/swiper@8/swiper-bundle.min.css');
    wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper@8/swiper-bundle.min.js', array(), null, true);
    
    // Initialize sliders
    wp_add_inline_script('swiper-js', '
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll(".custom-slider").forEach(slider => {
                new Swiper(slider, {
                    loop: true,
                    effect: slider.dataset.effect,
                    autoHeight: true,
                    pagination: {
                        el: ".swiper-pagination",
                        clickable: true,
                    },
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                    autoplay: slider.dataset.autoplay === "true" ? {
                        delay: 5000,
                    } : false,
                });
            });
        });
    ');
}
add_action('wp_enqueue_scripts', 'custom_slider_assets');