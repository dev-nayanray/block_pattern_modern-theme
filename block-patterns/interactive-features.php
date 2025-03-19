<?php
register_block_pattern(
    'my-modern-theme/interactive-features',
    array(
        'title'       => __('Interactive Features', 'my-modern-theme'),
        'description' => __('A block with animated counters and icons.', 'my-modern-theme'),
        'categories'  => array('features'),
        'content'     => '<!-- wp:columns -->
        <div class="wp-block-columns interactive-features">
            <div class="wp-block-column">
                <h2 class="counter" data-count="100">0</h2>
                <p>Completed Projects</p>
            </div>
            <div class="wp-block-column">
                <h2 class="counter" data-count="50">0</h2>
                <p>Happy Clients</p>
            </div>
        </div>
        <!-- /wp:columns -->',
    )
);
