<?php
register_block_pattern(
    'my-modern-theme/portfolio-showcase',
    array(
        'title'       => __('Portfolio Showcase', 'my-modern-theme'),
        'description' => __('A modern portfolio grid with hover effects.', 'my-modern-theme'),
        'categories'  => array('portfolio'),
        'content'     => '<!-- wp:columns {"className":"custom-portfolio"} -->
        <div class="wp-block-columns custom-portfolio">
            <div class="wp-block-column">
                <figure>
                    <img src="' . get_template_directory_uri() . '/assets/images/portfolio1.jpg" alt="Project 1"/>
                    <figcaption>Project One</figcaption>
                </figure>
            </div>
            <div class="wp-block-column">
                <figure>
                    <img src="' . get_template_directory_uri() . '/assets/images/portfolio2.jpg" alt="Project 2"/>
                    <figcaption>Project Two</figcaption>
                </figure>
            </div>
        </div>
        <!-- /wp:columns -->',
    )
);
