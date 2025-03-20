<?php
/**
 * Registers the block pattern for blog post cards with proper translations and security.
 */
function my_modern_theme_register_blog_card_pattern() {
    register_block_pattern(
        'my-modern-theme/blog-post-cards',
        array(
            'title'       => esc_html__( 'Blog Post Card Layout', 'my-modern-theme' ),
            'description' => esc_html__( 'A modern card layout for displaying blog posts with dynamic queries and pagination.', 'my-modern-theme' ),
            'content'     => '
                <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"40px","bottom":"40px"}}} -->
                <div class="wp-block-group alignwide" style="padding-top:40px;padding-bottom:40px">
                    
                    <!-- wp:heading {"align":"center","style":{"typography":{"fontSize":"36px","fontWeight":"700"}},"className":"section-heading"} -->
                    <h2 class="has-text-align-center section-heading" style="font-size:36px;font-weight:700">' . esc_html__( 'Latest Blog Posts', 'my-modern-theme' ) . '</h2>
                    <!-- /wp:heading -->

                    <!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date"},"displayLayout":{"type":"flex","columns":3}} -->
                    <div class="wp-block-query">
                        
                        <!-- wp:post-template -->
                        
                        <!-- wp:group {"style":{"border":{"radius":"8px"},"spacing":{"padding":"20px"},"backgroundColor":"white"},"className":"post-card","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group post-card has-white-background-color has-background" style="border-radius:8px;padding:20px">
                            
                            <!-- wp:post-featured-image {"isLink":true,"style":{"border":{"radius":"8px"}},"className":"post-card__image"} /-->
                            
                            <!-- wp:post-terms {"term":"category","style":{"typography":{"fontSize":"14px","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"backgroundColor":"vivid-green-cyan","className":"post-card__badge"} /-->
                            
                            <!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontSize":"24px","fontWeight":"600"},"spacing":{"margin":{"top":"16px","bottom":"8px"}}},"className":"post-card__title"} /-->
                            
                            <!-- wp:post-excerpt {"moreText":"' . esc_html__( 'Read More', 'my-modern-theme' ) . '","style":{"typography":{"fontSize":"16px"},"spacing":{"margin":{"bottom":"16px"}}},"className":"post-card__excerpt"} /-->
                            
                            <!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"className":"post-card__meta","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                            <div class="wp-block-group post-card__meta">
                                
                                <!-- wp:post-date {"style":{"typography":{"fontSize":"14px","color":"#666666"}},"className":"post-card__date"} /-->
                                
                                <!-- wp:post-comments-count {"style":{"typography":{"fontSize":"14px","color":"#666666"}}} /-->
                            
                            </div>
                            <!-- /wp:group -->
                            
                            <!-- wp:buttons {"className":"post-card__buttons"} -->
                            <div class="wp-block-buttons post-card__buttons">
                                
                                <!-- wp:button {"backgroundColor":"vivid-green-cyan","textColor":"white","className":"is-style-filled"} -->
                                <div class="wp-block-button is-style-filled">
                                    <a href="' . esc_url( get_permalink() ) . '" class="wp-block-button__link has-white-color has-vivid-green-cyan-background-color has-text-color has-background wp-element-button">' . esc_html__( 'Read More', 'my-modern-theme' ) . '</a>
                                </div>
                                <!-- /wp:button -->
                                
                                <!-- wp:button {"textColor":"white","backgroundColor":"black","className":"is-style-outline","style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"20px","right":"20px"}}}} -->
                                <div class="wp-block-button is-style-outline">
                                    <button class="wp-block-button__link has-white-color has-black-background-color has-text-color has-background wp-element-button time-button" style="padding-top:10px;padding-bottom:10px;padding-left:20px;padding-right:20px">' . esc_html__( 'Display Time', 'my-modern-theme' ) . '</button>
                                </div>
                                <!-- /wp:button -->
                            
                            </div>
                            <!-- /wp:buttons -->
                        
                        </div>
                        <!-- /wp:group -->
                        
                        <!-- /wp:post-template -->

                        <!-- wp:query-pagination {"align":"center","className":"pagination-container"} -->
                        <div class="wp-block-query-pagination pagination-container aligncenter">
                            <!-- wp:query-pagination-previous /-->
                            <!-- wp:query-pagination-numbers /-->
                            <!-- wp:query-pagination-next /-->
                        </div>
                        <!-- /wp:query-pagination -->
                    
                    </div>
                    <!-- /wp:query -->

                    <!-- wp:separator {"className":"is-style-wide section-divider"} -->
                    <hr class="wp-block-separator is-style-wide section-divider"/>
                    <!-- /wp:separator -->

                    <!-- wp:heading {"align":"center","style":{"typography":{"fontSize":"36px","fontWeight":"700"}},"className":"section-heading"} -->
                    <h2 class="has-text-align-center section-heading" style="font-size:36px;font-weight:700">' . esc_html__( 'Top Rated Posts', 'my-modern-theme' ) . '</h2>
                    <!-- /wp:heading -->

                    <!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"comment_count"},"displayLayout":{"type":"flex","columns":3}} -->
                    <div class="wp-block-query">
                        <!-- wp:post-template -->
                            ' . file_get_contents( __DIR__ . '/block-patterns/post-card-template.html' ) . '
                        <!-- /wp:post-template -->
                    </div>
                    <!-- /wp:query -->
                
                </div>
                <!-- /wp:group -->
            ',
        )
    );
}
add_action( 'init', 'my_modern_theme_register_blog_card_pattern' );