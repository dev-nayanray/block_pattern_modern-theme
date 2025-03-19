<?php
/**
 * Category CTA block pattern.
 */
register_block_pattern(
    'my-theme/category-cta',
    array(
        'title'       => __( 'Category CTA', 'my-theme' ),
        'description' => __( 'A call-to-action section for a specific category.', 'my-theme' ),
        'content'     => '<!-- wp:group {"align":"wide","style":{"color":{"background":"#f3f4f5"}}} -->
                        <div class="wp-block-group alignwide has-background" style="background-color:#f3f4f5">
                            <!-- wp:heading {"textAlign":"center"} -->
                            <h2 class="has-text-align-center">Explore Our Category</h2>
                            <!-- /wp:heading -->
                            <!-- wp:paragraph {"align":"center"} -->
                            <p class="has-text-align-center">Discover more about our products and services in this category.</p>
                            <!-- /wp:paragraph -->
                            <!-- wp:buttons {"align":"center"} -->
                            <div class="wp-block-buttons aligncenter">
                                <!-- wp:button {"backgroundColor":"vivid-green-cyan","textColor":"white"} -->
                                <div class="wp-block-button"><a class="wp-block-button__link has-white-color has-vivid-green-cyan-background-color has-text-color has-background">Learn More</a></div>
                                <!-- /wp:button -->
                            </div>
                            <!-- /wp:buttons -->
                        </div>
                        <!-- /wp:group -->',
    )
);