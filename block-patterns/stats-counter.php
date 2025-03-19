<?php
/**
 * Stats Counter Block Pattern
 */
register_block_pattern(
    'my-theme/stats-counter',
    array(
        'title'       => __( 'Stats Counter', 'my-theme' ),
        'description' => __( 'A dynamic stats counter to display key metrics.', 'my-theme' ),
        'content'     => '<!-- wp:group {"align":"wide","backgroundColor":"vivid-green-cyan","className":"stats-counter"} -->
        <div class="wp-block-group alignwide stats-counter has-vivid-green-cyan-background-color has-background"><div class="wp-block-group__inner-container"><!-- wp:columns -->
        <div class="wp-block-columns"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:heading {"textAlign":"center","textColor":"white"} -->
        <h2 class="has-text-align-center has-white-color has-text-color">500+</h2>
        <!-- /wp:heading --><!-- wp:paragraph {"align":"center","textColor":"white"} -->
        <p class="has-text-align-center has-white-color has-text-color">Projects Completed</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:column --><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:heading {"textAlign":"center","textColor":"white"} -->
        <h2 class="has-text-align-center has-white-color has-text-color">200+</h2>
        <!-- /wp:heading --><!-- wp:paragraph {"align":"center","textColor":"white"} -->
        <p class="has-text-align-center has-white-color has-text-color">Happy Clients</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:column --><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:heading {"textAlign":"center","textColor":"white"} -->
        <h2 class="has-text-align-center has-white-color has-text-color">10+</h2>
        <!-- /wp:heading --><!-- wp:paragraph {"align":"center","textColor":"white"} -->
        <p class="has-text-align-center has-white-color has-text-color">Years of Experience</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:column --></div>
        <!-- /wp:columns --></div></div>
        <!-- /wp:group -->',
    )
);