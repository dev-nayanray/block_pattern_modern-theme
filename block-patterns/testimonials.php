<?php
 

/**
 * Register Testimonials Block Pattern with Ratings and Images
 */
function my_modern_theme_register_block_pattern() {
    register_block_pattern(
        'modern/testimonials',
        array(
            'title'       => __( 'Testimonials with Ratings and Images', 'my-theme' ),
            'description' => __( 'A modern testimonials section with customer feedback, star ratings, and images.', 'my-theme' ),
            'categories'  => array( 'testimonials' ), // Associate with the 'testimonials' category
            'content'     => '<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"80px","bottom":"80px"}},"backgroundColor":"light-gray"}} -->
            <div class="wp-block-group alignwide has-light-gray-background-color" style="padding-top:80px;padding-bottom:80px;"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"42px","fontWeight":"700","letterSpacing":"-1px"}}} -->
            <h2 class="has-text-align-center" style="font-size:42px;font-weight:700;letter-spacing:-1px;">What Our Clients Say</h2>
            <!-- /wp:heading --><!-- wp:columns {"align":"wide"} -->
            <div class="wp-block-columns alignwide"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:image {"align":"center","width":120,"height":120,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
            <div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="https://placehold.co/120x120" alt="Client 1" width="120" height="120"/></figure></div>
            <!-- /wp:image --><!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"18px"}}} -->
            <p class="has-text-align-center" style="font-size:18px;">"Amazing service! Highly recommended."</p>
            <!-- /wp:paragraph --><!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"16px"}}} -->
            <p class="has-text-align-center" style="font-size:16px;"><strong>— John Doe</strong></p>
            <!-- /wp:paragraph --><!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center"><span class="star-rating" style="color:#FFD700;font-size:20px;">★★★★★</span></p>
            <!-- /wp:paragraph --></div>
            <!-- /wp:column --><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:image {"align":"center","width":120,"height":120,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
            <div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="https://placehold.co/120x120" alt="Client 2" width="120" height="120"/></figure></div>
            <!-- /wp:image --><!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"18px"}}} -->
            <p class="has-text-align-center" style="font-size:18px;">"Great experience with this company."</p>
            <!-- /wp:paragraph --><!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"16px"}}} -->
            <p class="has-text-align-center" style="font-size:16px;"><strong>— Jane Smith</strong></p>
            <!-- /wp:paragraph --><!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center"><span class="star-rating" style="color:#FFD700;font-size:20px;">★★★★☆</span></p>
            <!-- /wp:paragraph --></div>
            <!-- /wp:column --><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:image {"align":"center","width":120,"height":120,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
            <div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="https://placehold.co/120x120" alt="Client 3" width="120" height="120"/></figure></div>
            <!-- /wp:image --><!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"18px"}}} -->
            <p class="has-text-align-center" style="font-size:18px;">"Outstanding support and quality!"</p>
            <!-- /wp:paragraph --><!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"16px"}}} -->
            <p class="has-text-align-center" style="font-size:16px;"><strong>— Emily Johnson</strong></p>
            <!-- /wp:paragraph --><!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center"><span class="star-rating" style="color:#FFD700;font-size:20px;">★★★★★</span></p>
            <!-- /wp:paragraph --></div>
            <!-- /wp:column --></div>
            <!-- /wp:columns --></div>
            <!-- /wp:group -->',
        )
    );
}
add_action( 'init', 'my_modern_theme_register_block_pattern' );