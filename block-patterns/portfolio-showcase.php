<?php
register_block_pattern(
    'my-modern-theme/portfolio-showcase',
    array(
        'title'       => __('Portfolio Showcase', 'my-modern-theme'),
        'description' => __('A modern portfolio grid with hover effects.', 'my-modern-theme'),
        'categories'  => array('portfolio'),
        'content'     => '<!-- wp:query {"query":{"post_type":"portfolio","perPage":4,"offset":0,"postStatus":"publish","order":"desc","orderBy":"date"},"className":"custom-portfolio"} -->
        <div class="wp-block-query custom-portfolio">
            <!-- wp:post-template -->
            <!-- wp:columns -->
            <div class="wp-block-columns">
                <!-- wp:column -->
                <div class="wp-block-column">
                    <!-- wp:post-featured-image /-->
                    <!-- wp:post-title {"level":3} /-->
                    <!-- wp:post-excerpt /-->
                    <!-- wp:post-terms {"term":"portfolio_category"} /-->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
            <!-- /wp:post-template -->
        </div>
        <!-- /wp:query -->',
    )
);