<?php
register_block_pattern(
    'my-modern-theme/gradient-background',
    array(
        'title'       => __('Gradient Background', 'my-modern-theme'),
        'description' => _x('A section with modern gradient background and floating elements.', 'Block pattern description', 'my-modern-theme'),
        'categories'  => array('hero'),
        'content'     => '<!-- wp:group {"align":"full","style":{"color":{"gradient":"linear-gradient(135deg,rgb(106,61,255) 0%,rgb(221,51,238) 50%,rgb(255,194,51) 100%)"},"className":"gradient-section"} -->
        <div class="wp-block-group alignfull gradient-section has-background" style="background:linear-gradient(135deg,rgb(106,61,255) 0%,rgb(221,51,238) 50%,rgb(255,194,51) 100%)">
            <!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
            <div class="wp-block-columns alignwide are-vertically-aligned-center">
                <!-- wp:column {"verticalAlignment":"center"} -->
                <div class="wp-block-column is-vertically-aligned-center">
                    <!-- wp:heading {"textColor":"white"} -->
                    <h2 class="has-white-color has-text-color">Modern Gradient Design</h2>
                    <!-- /wp:heading -->
                    <!-- wp:paragraph {"textColor":"white"} -->
                    <p class="has-white-color has-text-color">Create stunning layouts with our gradient combinations.</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:column -->
                
                <!-- wp:column {"verticalAlignment":"center"} -->
                <div class="wp-block-column is-vertically-aligned-center">
                    <!-- wp:image {"align":"center","sizeSlug":"large","className":"floating"} -->
                    <figure class="wp-block-image aligncenter size-large floating">
                        <img src="' . esc_url(get_theme_file_uri('/assets/images/gradient-showcase.png')) . '" alt="Gradient Showcase"/>
                    </figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:group -->',
    )
);