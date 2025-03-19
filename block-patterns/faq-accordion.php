<?php
/**
 * FAQ Accordion Block Pattern
 */
register_block_pattern(
    'modern/faq-accordion',
    array(
        'title'       => __( 'FAQ Accordion', 'my-theme' ),
        'description' => __( 'A modern, collapsible FAQ section with centered alignment and a clean layout.', 'my-theme' ),
        'content'     => '<!-- wp:group {"align":"wide","className":"faq-accordion-modern"} -->
        <div class="wp-block-group alignwide faq-accordion-modern"><div class="wp-block-group__inner-container"><!-- wp:heading {"textAlign":"center","className":"faq-title"} -->
        <h2 class="has-text-align-center faq-title">Frequently Asked Questions</h2>
        <!-- /wp:heading --><!-- wp:accordion {"className":"faq-accordion-container"} -->
        <div class="wp-block-accordion faq-accordion-container"><!-- wp:accordion-item {"className":"faq-item"} -->
        <div class="wp-block-accordion-item faq-item"><!-- wp:heading {"level":3,"className":"faq-question"} -->
        <h3 class="faq-question">What is your return policy?</h3>
        <!-- /wp:heading --><!-- wp:paragraph {"className":"faq-answer"} -->
        <p class="faq-answer">We offer a 30-day return policy for all products.</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:accordion-item --><!-- wp:accordion-item {"className":"faq-item"} -->
        <div class="wp-block-accordion-item faq-item"><!-- wp:heading {"level":3,"className":"faq-question"} -->
        <h3 class="faq-question">Do you offer international shipping?</h3>
        <!-- /wp:heading --><!-- wp:paragraph {"className":"faq-answer"} -->
        <p class="faq-answer">Yes, we ship to over 100 countries worldwide.</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:accordion-item --><!-- wp:accordion-item {"className":"faq-item"} -->
        <div class="wp-block-accordion-item faq-item"><!-- wp:heading {"level":3,"className":"faq-question"} -->
        <h3 class="faq-question">How can I contact support?</h3>
        <!-- /wp:heading --><!-- wp:paragraph {"className":"faq-answer"} -->
        <p class="faq-answer">You can reach us via email at support@example.com.</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:accordion-item --></div>
        <!-- /wp:accordion --></div></div>
        <!-- /wp:group -->',
    )
);