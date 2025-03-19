<?php
/**
 * Team Members Block Pattern - Modern Premium Style with Social Icons
 */
register_block_pattern(
    'modern/team-members-modern',
    array(
        'title'       => __( 'Team Members - Modern Premium', 'my-theme' ),
        'description' => __( 'A modern grid layout to showcase team members with images, names, roles, social icons, and a short bio.', 'my-theme' ),
        'content'     => '<!-- wp:columns {"align":"wide"} -->
        <div class="wp-block-columns alignwide"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","right":"20px","bottom":"20px","left":"20px"}},"backgroundColor":"white","className":"team-member-card","layout":{"type":"constrained"}} -->
        <div class="wp-block-group team-member-card has-white-background-color" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px;"><!-- wp:image {"sizeSlug":"large","className":"team-member-image"} -->
        <figure class="wp-block-image size-large team-member-image"><img src="' . get_template_directory_uri() . '/images/team-1.jpg" alt="John Doe" style="border-radius: 8px; width: 100%; height: auto;"/></figure>
        <!-- /wp:image --><!-- wp:heading {"level":4,"className":"team-member-name"} -->
        <h4 class="team-member-name" style="text-align: center; margin-top: 20px; font-size: 24px; color: #333;">John Doe</h4>
        <!-- /wp:heading --><!-- wp:paragraph {"className":"team-member-role"} -->
        <p class="team-member-role" style="text-align: center; font-size: 16px; color: #777; margin-top: 10px;">CEO & Founder</p>
        <!-- /wp:paragraph --><!-- wp:paragraph {"className":"team-member-bio"} -->
        <p class="team-member-bio" style="text-align: center; font-size: 14px; color: #555; margin-top: 10px;">John is a visionary leader with over 10 years of experience in the tech industry.</p>
        <!-- /wp:paragraph --><!-- wp:social-links {"className":"team-member-social","size":"has-normal-icon-size","layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"10px"}}} -->
        <ul class="wp-block-social-links team-member-social size-has-normal-icon-size"><!-- wp:social-link {"url":"https://facebook.com","service":"facebook"} /--><!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /--><!-- wp:social-link {"url":"https://linkedin.com","service":"linkedin"} /--></ul>
        <!-- /wp:social-links --></div>
        <!-- /wp:group --></div>
        <!-- /wp:column --><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","right":"20px","bottom":"20px","left":"20px"}},"backgroundColor":"white","className":"team-member-card","layout":{"type":"constrained"}} -->
        <div class="wp-block-group team-member-card has-white-background-color" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px;"><!-- wp:image {"sizeSlug":"large","className":"team-member-image"} -->
        <figure class="wp-block-image size-large team-member-image"><img src="' . get_template_directory_uri() . '/images/team-2.jpg" alt="Jane Smith" style="border-radius: 8px; width: 100%; height: auto;"/></figure>
        <!-- /wp:image --><!-- wp:heading {"level":4,"className":"team-member-name"} -->
        <h4 class="team-member-name" style="text-align: center; margin-top: 20px; font-size: 24px; color: #333;">Jane Smith</h4>
        <!-- /wp:heading --><!-- wp:paragraph {"className":"team-member-role"} -->
        <p class="team-member-role" style="text-align: center; font-size: 16px; color: #777; margin-top: 10px;">Creative Director</p>
        <!-- /wp:paragraph --><!-- wp:paragraph {"className":"team-member-bio"} -->
        <p class="team-member-bio" style="text-align: center; font-size: 14px; color: #555; margin-top: 10px;">Jane is a creative genius with a passion for design and innovation.</p>
        <!-- /wp:paragraph --><!-- wp:social-links {"className":"team-member-social","size":"has-normal-icon-size","layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"10px"}}} -->
        <ul class="wp-block-social-links team-member-social size-has-normal-icon-size"><!-- wp:social-link {"url":"https://facebook.com","service":"facebook"} /--><!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /--><!-- wp:social-link {"url":"https://linkedin.com","service":"linkedin"} /--></ul>
        <!-- /wp:social-links --></div>
        <!-- /wp:group --></div>
        <!-- /wp:column --><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","right":"20px","bottom":"20px","left":"20px"}},"backgroundColor":"white","className":"team-member-card","layout":{"type":"constrained"}} -->
        <div class="wp-block-group team-member-card has-white-background-color" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px;"><!-- wp:image {"sizeSlug":"large","className":"team-member-image"} -->
        <figure class="wp-block-image size-large team-member-image"><img src="' . get_template_directory_uri() . '/images/team-3.jpg" alt="Mike Johnson" style="border-radius: 8px; width: 100%; height: auto;"/></figure>
        <!-- /wp:image --><!-- wp:heading {"level":4,"className":"team-member-name"} -->
        <h4 class="team-member-name" style="text-align: center; margin-top: 20px; font-size: 24px; color: #333;">Mike Johnson</h4>
        <!-- /wp:heading --><!-- wp:paragraph {"className":"team-member-role"} -->
        <p class="team-member-role" style="text-align: center; font-size: 16px; color: #777; margin-top: 10px;">Lead Developer</p>
        <!-- /wp:paragraph --><!-- wp:paragraph {"className":"team-member-bio"} -->
        <p class="team-member-bio" style="text-align: center; font-size: 14px; color: #555; margin-top: 10px;">Mike is a coding wizard with expertise in full-stack development.</p>
        <!-- /wp:paragraph --><!-- wp:social-links {"className":"team-member-social","size":"has-normal-icon-size","layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"10px"}}} -->
        <ul class="wp-block-social-links team-member-social size-has-normal-icon-size"><!-- wp:social-link {"url":"https://facebook.com","service":"facebook"} /--><!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /--><!-- wp:social-link {"url":"https://linkedin.com","service":"linkedin"} /--></ul>
        <!-- /wp:social-links --></div>
        <!-- /wp:group --></div>
        <!-- /wp:column --></div>
        <!-- /wp:columns -->',
    )
);