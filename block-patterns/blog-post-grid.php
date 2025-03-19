<?php
/**
 * Blog Post Card Layout block pattern.
 */
register_block_pattern(
    'modern/blog-post-card-layout',
    array(
        'title'       => __( 'Blog Post Card Layout', 'my-theme' ),
        'description' => __( 'A modern card layout for displaying blog posts with badges, a "Display Time" button, and dynamic pagination.', 'my-theme' ),
        'content'     => '<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"40px","bottom":"40px"}}} -->
                        <div class="wp-block-group alignwide" style="padding-top:40px;padding-bottom:40px">
                            <!-- wp:heading {"align":"center","style":{"typography":{"fontSize":"36px","fontWeight":"700"}}} -->
                            <h2 class="has-text-align-center" style="font-size:36px;font-weight:700">Latest Blog Posts</h2>
                            <!-- /wp:heading -->

                            <!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3}} -->
                            <div class="wp-block-query">
                                <!-- wp:post-template -->
                                <!-- wp:group {"style":{"border":{"radius":"8px"},"spacing":{"padding":{"top":"20px","right":"20px","bottom":"20px","left":"20px"}},"backgroundColor":"white","className":"post-card"} -->
                                <div class="wp-block-group post-card has-white-background-color has-background" style="border-radius:8px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px">
                                    <!-- wp:post-featured-image {"isLink":true,"style":{"border":{"radius":"8px"}},"className":"post-card-image"} /-->

                                    <!-- wp:post-terms {"term":"category","style":{"typography":{"fontSize":"14px","fontWeight":"500","color":"#ffffff"},"spacing":{"padding":{"top":"4px","right":"8px","bottom":"4px","left":"8px"}},"backgroundColor":"vivid-green-cyan","className":"post-card-badge"} -->
                                    <div class="wp-block-post-terms post-card-badge has-vivid-green-cyan-background-color has-background" style="font-size:14px;font-weight:500;color:#ffffff;padding-top:4px;padding-right:8px;padding-bottom:4px;padding-left:8px">
                                        {{categories}}
                                    </div>
                                    <!-- /wp:post-terms -->

                                    <!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontSize":"24px","fontWeight":"600"},"spacing":{"margin":{"top":"16px","bottom":"8px"}}}} /-->

                                    <!-- wp:post-excerpt {"moreText":"Read More","style":{"typography":{"fontSize":"16px"},"spacing":{"margin":{"bottom":"16px"}}}} /-->

                                    <!-- wp:post-date {"style":{"typography":{"fontSize":"14px","color":"#666666"},"spacing":{"margin":{"bottom":"16px"}}}} /-->

                                    <!-- wp:buttons -->
                                    <div class="wp-block-buttons">
                                        <!-- wp:button {"backgroundColor":"vivid-green-cyan","textColor":"white","className":"is-style-fill"} -->
                                        <div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-white-color has-vivid-green-cyan-background-color has-text-color has-background">Read More</a></div>
                                        <!-- /wp:button -->

                                        <!-- wp:button {"textColor":"white","backgroundColor":"black","className":"is-style-outline","style":{"spacing":{"padding":{"top":"10px","right":"20px","bottom":"10px","left":"20px"}}}} -->
                                        <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-white-color has-black-background-color has-text-color has-background" style="padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px">Display Time</a></div>
                                        <!-- /wp:button -->
                                    </div>
                                    <!-- /wp:buttons -->
                                </div>
                                <!-- /wp:group -->
                                <!-- /wp:post-template -->

                                <!-- wp:query-pagination {"align":"center","layout":{"type":"flex","justifyContent":"center"}} -->
                                <!-- wp:query-pagination-previous /-->
                                <!-- wp:query-pagination-numbers /-->
                                <!-- wp:query-pagination-next /-->
                                <!-- /wp:query-pagination -->
                            </div>
                            <!-- /wp:query -->

                            <!-- wp:separator {"className":"is-style-wide"} -->
                            <hr class="wp-block-separator is-style-wide"/>
                            <!-- /wp:separator -->

                            <!-- wp:heading {"align":"center","style":{"typography":{"fontSize":"36px","fontWeight":"700"}}} -->
                            <h2 class="has-text-align-center" style="font-size:36px;font-weight:700">Top Rated Posts</h2>
                            <!-- /wp:heading -->

                            <!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"comment_count","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3}} -->
                            <div class="wp-block-query">
                                <!-- wp:post-template -->
                                <!-- wp:group {"style":{"border":{"radius":"8px"},"spacing":{"padding":{"top":"20px","right":"20px","bottom":"20px","left":"20px"}},"backgroundColor":"white","className":"post-card"} -->
                                <div class="wp-block-group post-card has-white-background-color has-background" style="border-radius:8px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px">
                                    <!-- wp:post-featured-image {"isLink":true,"style":{"border":{"radius":"8px"}},"className":"post-card-image"} /-->

                                    <!-- wp:post-terms {"term":"category","style":{"typography":{"fontSize":"14px","fontWeight":"500","color":"#ffffff"},"spacing":{"padding":{"top":"4px","right":"8px","bottom":"4px","left":"8px"}},"backgroundColor":"vivid-green-cyan","className":"post-card-badge"} -->
                                    <div class="wp-block-post-terms post-card-badge has-vivid-green-cyan-background-color has-background" style="font-size:14px;font-weight:500;color:#ffffff;padding-top:4px;padding-right:8px;padding-bottom:4px;padding-left:8px">
                                        {{categories}}
                                    </div>
                                    <!-- /wp:post-terms -->

                                    <!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontSize":"24px","fontWeight":"600"},"spacing":{"margin":{"top":"16px","bottom":"8px"}}}} /-->

                                    <!-- wp:post-excerpt {"moreText":"Read More","style":{"typography":{"fontSize":"16px"},"spacing":{"margin":{"bottom":"16px"}}}} /-->

                                    <!-- wp:post-date {"style":{"typography":{"fontSize":"14px","color":"#666666"},"spacing":{"margin":{"bottom":"16px"}}}} /-->

                                    <!-- wp:buttons -->
                                    <div class="wp-block-buttons">
                                        <!-- wp:button {"backgroundColor":"vivid-green-cyan","textColor":"white","className":"is-style-fill"} -->
                                        <div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-white-color has-vivid-green-cyan-background-color has-text-color has-background">Read More</a></div>
                                        <!-- /wp:button -->

                                        <!-- wp:button {"textColor":"white","backgroundColor":"black","className":"is-style-outline","style":{"spacing":{"padding":{"top":"10px","right":"20px","bottom":"10px","left":"20px"}}}} -->
                                        <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-white-color has-black-background-color has-text-color has-background" style="padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px">Display Time</a></div>
                                        <!-- /wp:button -->
                                    </div>
                                    <!-- /wp:buttons -->
                                </div>
                                <!-- /wp:group -->
                                <!-- /wp:post-template -->
                            </div>
                            <!-- /wp:query -->
                        </div>
                        <!-- /wp:group -->',
    )
);