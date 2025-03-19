<?php
register_block_pattern(
    'my-modern-theme/image-slider',
    array(
        'title'       => __('Image Slider', 'my-modern-theme'),
        'description' => __('A modern image slider with smooth transitions.', 'my-modern-theme'),
        'categories'  => array('slider'),
        'content'     => '<!-- wp:gallery {"columns":1,"linkTo":"none","sizeSlug":"large","className":"custom-slider"} -->
        <figure class="wp-block-gallery columns-1 custom-slider">
            <img src="' . get_template_directory_uri() . '/assets/images/slide1.jpg" alt="Slide 1"/>
            <img src="' . get_template_directory_uri() . '/assets/images/slide2.jpg" alt="Slide 2"/>
            <img src="' . get_template_directory_uri() . '/assets/images/slide3.jpg" alt="Slide 3"/>
        </figure>
        <!-- /wp:gallery -->',
    )
);
