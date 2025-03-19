<?php
register_block_pattern(
    'modern/grid-layout',
    array(
        'title'       => __('Grid Layout', 'my-modern-theme'),
        'description' => __('A three-column grid layout for blog posts or portfolio items.', 'my-modern-theme'),
        'content'     => '<!-- wp:columns -->
                            <div class="wp-block-columns">
                                <div class="wp-block-column">Content 1</div>
                                <div class="wp-block-column">Content 2</div>
                                <div class="wp-block-column">Content 3</div>
                            </div>
                          <!-- /wp:columns -->',
        'categories'  => array('layout'),
    )
);
