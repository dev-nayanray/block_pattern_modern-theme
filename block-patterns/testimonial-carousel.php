<?php
register_block_pattern(
    'my-modern-theme/testimonial-carousel',
    array(
        'title'       => __('Testimonial Carousel', 'my-modern-theme'),
        'description' => __('A rotating testimonial carousel.', 'my-modern-theme'),
        'categories'  => array('slider', 'testimonials'),
        'content'     => '<!-- wp:columns -->
        <div class="wp-block-columns custom-testimonial-carousel">
            <div class="wp-block-column">
                <blockquote>
                    <p>"This theme is absolutely amazing!"</p>
                    <cite>- John Doe</cite>
                </blockquote>
            </div>
            <div class="wp-block-column">
                <blockquote>
                    <p>"The best website experience I have ever had!"</p>
                    <cite>- Jane Smith</cite>
                </blockquote>
            </div>
        </div>
        <!-- /wp:columns -->',
    )
);
