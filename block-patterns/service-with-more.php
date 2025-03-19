<?php
/**
 * Service with More Block Pattern - Modern and Premium Style
 */

function register_service_with_more_block_pattern() {
    register_block_pattern(
        'my-theme/service-with-more',
        array(
            'title'       => __( 'Service with More - Modern', 'my-theme' ),
            'description' => __( 'A modern and premium-style service section with a "Read More" button.', 'my-theme' ),
            'content'     => '<!-- wp:group {"align":"wide","className":"service-with-more-modern","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                            <div class="wp-block-group alignwide service-with-more-modern">
                                <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"2.5rem","fontWeight":"700"}},"textColor":"vivid-purple"} -->
                                <h2 class="has-text-align-center has-vivid-purple-color has-text-color" style="font-size:2.5rem;font-weight:700;">Our Premium Services</h2>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.25rem"}},"textColor":"dark-gray"} -->
                                <p class="has-text-align-center has-dark-gray-color has-text-color" style="font-size:1.25rem;">We provide top-notch solutions tailored to your needs. Explore our services to see how we can help you achieve your goals.</p>
                                <!-- /wp:paragraph -->

                                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                                <div class="wp-block-buttons">
                                    <!-- wp:button {"backgroundColor":"vivid-purple","textColor":"white","className":"is-style-pill","style":{"border":{"radius":"50px"}}} -->
                                    <div class="wp-block-button is-style-pill">
                                        <a class="wp-block-button__link has-white-color has-vivid-purple-background-color has-text-color has-background" style="border-radius:50px;">Read More</a>
                                    </div>
                                    <!-- /wp:button -->
                                </div>
                                <!-- /wp:buttons -->
                            </div>
                            <!-- /wp:group -->',
        )
    );
}
add_action( 'init', 'register_service_with_more_block_pattern' );