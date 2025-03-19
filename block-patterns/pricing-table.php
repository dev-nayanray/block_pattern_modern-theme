<?php
register_block_pattern(
    'modern/pricing-table',
    array(
        'title'       => __('Pricing Table', 'my-modern-theme'),
        'description' => __('A three-column pricing table with features and call-to-action buttons.', 'my-modern-theme'),
        'content'     => '<!-- wp:group {"align":"wide"} -->
                            <div class="wp-block-group alignwide pricing-table">
                                <!-- wp:columns -->
                                <div class="wp-block-columns">
                                    <!-- wp:column -->
                                    <div class="wp-block-column pricing-table-column">
                                        <div class="pricing-card">
                                            <!-- wp:heading {"level":3} -->Basic Plan<!-- /wp:heading -->
                                            <!-- wp:paragraph class="price">$9.99/month<!-- /wp:paragraph -->
                                            <!-- wp:list -->
                                            <ul class="features">
                                                <li>✔ Feature 1</li>
                                                <li>✔ Feature 2</li>
                                            </ul>
                                            <!-- /wp:list -->
                                            <!-- wp:button {"backgroundColor":"primary","textColor":"white"} -->
                                            <a class="wp-block-button__link pricing-btn">Sign Up</a>
                                            <!-- /wp:button -->
                                        </div>
                                    </div>
                                    <!-- /wp:column -->

                                    <!-- wp:column -->
                                    <div class="wp-block-column pricing-table-column">
                                        <div class="pricing-card">
                                            <!-- wp:heading {"level":3} -->Pro Plan<!-- /wp:heading -->
                                            <!-- wp:paragraph class="price">$19.99/month<!-- /wp:paragraph -->
                                            <!-- wp:list -->
                                            <ul class="features">
                                                <li>✔ Feature 1</li>
                                                <li>✔ Feature 2</li>
                                                <li>✔ Feature 3</li>
                                            </ul>
                                            <!-- /wp:list -->
                                            <!-- wp:button {"backgroundColor":"secondary","textColor":"white"} -->
                                            <a class="wp-block-button__link pricing-btn">Get Pro</a>
                                            <!-- /wp:button -->
                                        </div>
                                    </div>
                                    <!-- /wp:column -->

                                    <!-- wp:column -->
                                    <div class="wp-block-column pricing-table-column">
                                        <div class="pricing-card">
                                            <!-- wp:heading {"level":3} -->Premium Plan<!-- /wp:heading -->
                                            <!-- wp:paragraph class="price">$29.99/month<!-- /wp:paragraph -->
                                            <!-- wp:list -->
                                            <ul class="features">
                                                <li>✔ Feature 1</li>
                                                <li>✔ Feature 2</li>
                                                <li>✔ Feature 3</li>
                                                <li>✔ Feature 4</li>
                                            </ul>
                                            <!-- /wp:list -->
                                            <!-- wp:button {"backgroundColor":"tertiary","textColor":"white"} -->
                                            <a class="wp-block-button__link pricing-btn">Get Premium</a>
                                            <!-- /wp:button -->
                                        </div>
                                    </div>
                                    <!-- /wp:column -->
                                </div>
                                <!-- /wp:columns -->
                            </div>
                          <!-- /wp:group -->',
        'categories'  => array('pricing'),
    )
);
?>
