<?php
register_block_pattern(
    'my-modern-theme/fullscreen-slider',
    array(
        'title'       => __('Fullscreen Slider', 'my-modern-theme'),
        'description' => _x('A responsive fullscreen slider with smooth transitions.', 'Block pattern description', 'my-modern-theme'),
        'categories'  => array('slider'),
        'content'     => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}} -->
        <div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0">
            <!-- wp:cover {"url":"' . esc_url(get_theme_file_uri('/assets/images/slide-1.jpg')) . '","dimRatio":30,"customOverlayColor":"#000000","isDark":false,"align":"full","className":"slider-item"} -->
            <div class="wp-block-cover alignfull is-light slider-item" style="background-color:#000000;background-image:url(' . esc_url(get_theme_file_uri('/assets/images/slide-1.jpg')) . ')"><div class="wp-block-cover__inner-container">
                <!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"48px"},"color":{"text":"#ffffff"}}} -->
                <h1 class="has-text-align-center has-text-color" style="color:#ffffff;font-size:48px">Premium Modern Slider</h1>
                <!-- /wp:heading -->
                <!-- wp:buttons {"align":"center"} -->
                <div class="wp-block-buttons aligncenter">
                    <!-- wp:button {"backgroundColor":"vivid-cyan-blue","textColor":"white","className":"is-style-fill"} -->
                    <div class="wp-block-button is-style-fill">
                        <a class="wp-block-button__link has-white-color has-vivid-cyan-blue-background-color has-text-color has-background">Explore More</a>
                    </div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div></div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:group -->',
    )
);