<?php
/**
 * Call to Action Block Pattern
 */
register_block_pattern(
    'my-theme/call-to-action',
    array(
        'title'       => __( 'Call to Action', 'my-theme' ),
        'description' => __( 'A call-to-action section with a button.', 'my-theme' ),
        'content'     => '<!-- wp:group {"align":"wide","backgroundColor":"vivid-green-cyan"} -->
        <div class="wp-block-group alignwide has-vivid-green-cyan-background-color has-background"><div class="wp-block-group__inner-container"><!-- wp:heading {"textAlign":"center","textColor":"white"} -->
        <h2 class="has-text-align-center has-white-color has-text-color">Ready to Get Started?</h2>
        <!-- /wp:heading --><!-- wp:buttons {"align":"center"} -->
        <div class="wp-block-buttons aligncenter"><!-- wp:button {"backgroundColor":"white","textColor":"vivid-green-cyan"} -->
        <div class="wp-block-button"><a class="wp-block-button__link has-vivid-green-cyan-color has-white-background-color has-text-color has-background" href="#">Contact Us</a></div>
        <!-- /wp:button --></div>
        <!-- /wp:buttons --></div></div>
        <!-- /wp:group -->',
    )
);