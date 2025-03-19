<?php
register_block_pattern(
    'modern/featured-post',
    array(
        'title'       => __('Featured Post', 'my-modern-theme'),
        'description' => __('A large post section with an image, title, and excerpt.', 'my-modern-theme'),
        'content'     => '<!-- wp:group {"className":"featured-post"} -->
                            <div class="featured-post">
                                <!-- wp:image {"sizeSlug":"large"} /-->
                                <!-- wp:heading {"level":2} -->Your Post Title<!-- /wp:heading -->
                                <!-- wp:paragraph -->This is the post excerpt.<!-- /wp:paragraph -->
                            </div>
                          <!-- /wp:group -->',
        'categories'  => array('featured'),
    )
);
