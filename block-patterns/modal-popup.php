<?php
register_block_pattern(
    'my-modern-theme/modal-popup',
    array(
        'title'       => __('Modal Popup', 'my-modern-theme'),
        'description' => _x('A modern modal popup with animated entrance.', 'Block pattern description', 'my-modern-theme'),
        'categories'  => array('interactive'),
        'content'     => '<!-- wp:buttons -->
        <div class="wp-block-buttons">
            <!-- wp:button {"className":"open-modal","backgroundColor":"vivid-green-cyan","textColor":"white"} -->
            <div class="wp-block-button open-modal">
                <a class="wp-block-button__link has-white-color has-vivid-green-cyan-background-color has-text-color has-background">Open Modal</a>
            </div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
        
        <!-- wp:group {"className":"modal-overlay","layout":{"type":"constrained"}} -->
        <div class="wp-block-group modal-overlay" style="display:none">
            <!-- wp:group {"className":"modal-content","layout":{"type":"constrained"}} -->
            <div class="wp-block-group modal-content">
                <!-- wp:heading -->
                <h2>Special Offer!</h2>
                <!-- /wp:heading -->
                <!-- wp:paragraph -->
                <p>Get 30% off on our premium plans. Limited time offer!</p>
                <!-- /wp:paragraph -->
                <!-- wp:button {"className":"close-modal","textColor":"white"} -->
                <div class="wp-block-button close-modal">
                    <a class="wp-block-button__link has-white-color has-text-color">Close</a>
                </div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->',
    )
);