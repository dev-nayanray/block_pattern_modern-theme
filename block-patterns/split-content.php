<?php
/**
 * Split Content Block Pattern
 */
register_block_pattern(
    'my-theme/split-content',
    array(
        'title'       => __( 'Split Content', 'my-theme' ),
        'description' => __( 'A split layout with an image on one side and text on the other.', 'my-theme' ),
        'content'     => '<!-- wp:media-text {"mediaId":999,"mediaLink":"' . get_template_directory_uri() . '/images/split-content.jpg","mediaType":"image","verticalAlignment":"center","imageFill":true} -->
        <div class="wp-block-media-text alignwide is-stacked-on-mobile is-vertically-aligned-center is-image-fill"><figure class="wp-block-media-text__media"><img src="' . get_template_directory_uri() . '/images/split-content.jpg" alt="" class="wp-image-999"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"level":3} -->
        <h3>Innovative Solutions</h3>
        <!-- /wp:heading --><!-- wp:paragraph -->
        <p>We provide cutting-edge solutions tailored to your needs. Our team is dedicated to delivering excellence.</p>
        <!-- /wp:paragraph --><!-- wp:buttons -->
        <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"vivid-green-cyan"} -->
        <div class="wp-block-button"><a class="wp-block-button__link has-vivid-green-cyan-background-color has-background" href="#">Discover More</a></div>
        <!-- /wp:button --></div>
        <!-- /wp:buttons --></div></div>
        <!-- /wp:media-text -->',
    )
);