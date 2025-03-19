<?php
/**
 * Timeline Block Pattern
 */
register_block_pattern(
    'modern/timeline',
    array(
        'title'       => __( 'Timeline', 'my-theme' ),
        'description' => __( 'A grid-style timeline to showcase milestones or events with a modern and premium design.', 'my-theme' ),
        'content'     => '<!-- wp:group {"align":"wide","className":"timeline-grid premium-timeline","backgroundColor":"primary","textColor":"white"} -->
        <div class="wp-block-group alignwide timeline-grid premium-timeline has-primary-background-color has-white-color"><div class="wp-block-group__inner-container"><!-- wp:heading {"textAlign":"center","className":"timeline-heading"} -->
        <h2 class="has-text-align-center timeline-heading">Our Journey</h2>
        <!-- /wp:heading --><!-- wp:paragraph {"align":"center","className":"timeline-subheading"} -->
        <p class="has-text-align-center timeline-subheading">A timeline of our milestones and achievements.</p>
        <!-- /wp:paragraph --><!-- wp:group {"className":"timeline-grid-container"} -->
        <div class="wp-block-group timeline-grid-container"><!-- wp:group {"className":"timeline-grid-row"} -->
        <div class="wp-block-group timeline-grid-row"><!-- wp:group {"className":"timeline-item"} -->
        <div class="wp-block-group timeline-item"><!-- wp:image {"id":123,"sizeSlug":"full","className":"timeline-icon"} -->
        <figure class="wp-block-image size-full timeline-icon"><img src="' . get_template_directory_uri() . '/assets/icons/icon-2020.png" alt="2020 Icon" class="wp-image-123"/></figure>
        <!-- /wp:image --><!-- wp:heading {"level":3,"className":"timeline-year"} -->
        <h3 class="timeline-year">2020</h3>
        <!-- /wp:heading --><!-- wp:paragraph {"className":"timeline-description"} -->
        <p class="timeline-description">Launched our first product.</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group --><!-- wp:group {"className":"timeline-item"} -->
        <div class="wp-block-group timeline-item"><!-- wp:image {"id":124,"sizeSlug":"full","className":"timeline-icon"} -->
        <figure class="wp-block-image size-full timeline-icon"><img src="' . get_template_directory_uri() . '/assets/icons/icon-2021.png" alt="2021 Icon" class="wp-image-124"/></figure>
        <!-- /wp:image --><!-- wp:heading {"level":3,"className":"timeline-year"} -->
        <h3 class="timeline-year">2021</h3>
        <!-- /wp:heading --><!-- wp:paragraph {"className":"timeline-description"} -->
        <p class="timeline-description">Expanded to international markets.</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group --><!-- wp:group {"className":"timeline-grid-row"} -->
        <div class="wp-block-group timeline-grid-row"><!-- wp:group {"className":"timeline-item"} -->
        <div class="wp-block-group timeline-item"><!-- wp:image {"id":125,"sizeSlug":"full","className":"timeline-icon"} -->
        <figure class="wp-block-image size-full timeline-icon"><img src="' . get_template_directory_uri() . '/assets/icons/icon-2022.png" alt="2022 Icon" class="wp-image-125"/></figure>
        <!-- /wp:image --><!-- wp:heading {"level":3,"className":"timeline-year"} -->
        <h3 class="timeline-year">2022</h3>
        <!-- /wp:heading --><!-- wp:paragraph {"className":"timeline-description"} -->
        <p class="timeline-description">Reached 1 million customers.</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group --><!-- wp:group {"className":"timeline-item"} -->
        <div class="wp-block-group timeline-item"><!-- wp:image {"id":126,"sizeSlug":"full","className":"timeline-icon"} -->
        <figure class="wp-block-image size-full timeline-icon"><img src="' . get_template_directory_uri() . '/assets/icons/icon-2023.png" alt="2023 Icon" class="wp-image-126"/></figure>
        <!-- /wp:image --><!-- wp:heading {"level":3,"className":"timeline-year"} -->
        <h3 class="timeline-year">2023</h3>
        <!-- /wp:heading --><!-- wp:paragraph {"className":"timeline-description"} -->
        <p class="timeline-description">Introduced AI-powered features.</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group --></div></div>
        <!-- /wp:group -->',
    )
);