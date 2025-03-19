<?php
register_block_pattern(
    'modern/hero-banner',
    array(
        'title'       => __('Hero Banner', 'my-modern-theme'),
        'description' => __('A full-width hero section with a background image and text overlay.', 'my-modern-theme'),
        'content'     => '<!-- wp:cover {"url":"' . esc_url(get_template_directory_uri() . '/assets/images/hero-banner.jpg') . '","dimRatio":50,"overlayColor":"black","align":"full","className":"hero-banner"} -->
                            <div class="wp-block-cover alignfull has-black-background-color has-background-dim" style="background-image:url(' . esc_url(get_template_directory_uri() . '/assets/images/hero-banner.jpg') . ')">
                                <div class="wp-block-cover__inner-container">
                                    <!-- wp:heading {"level":1,"align":"center","textColor":"white","className":"hero-title"} -->
                                    <h1 class="has-white-color has-text-color has-text-align-center hero-title">' . esc_html__('Welcome to My Site', 'my-modern-theme') . '</h1>
                                    <!-- /wp:heading -->
                                    <!-- wp:paragraph {"align":"center","textColor":"white","className":"hero-description"} -->
                                    <p class="has-white-color has-text-color has-text-align-center hero-description">' . esc_html__('A modern, full-site editing WordPress theme for blogs and portfolios.', 'my-modern-theme') . '</p>
                                    <!-- /wp:paragraph -->
                                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                                    <div class="wp-block-buttons">
                                        <!-- wp:button {"backgroundColor":"white","textColor":"black","className":"hero-button"} -->
                                        <div class="wp-block-button hero-button">
                                            <a class="wp-block-button__link has-black-color has-white-background-color has-text-color has-background">' . esc_html__('Get Started', 'my-modern-theme') . '</a>
                                        </div>
                                        <!-- /wp:button -->
                                    </div>
                                    <!-- /wp:buttons -->
                                </div>
                            </div>
                          <!-- /wp:cover -->',
        'categories'  => array('hero'), // Changed to "hero" category for consistency
    )
);
?>