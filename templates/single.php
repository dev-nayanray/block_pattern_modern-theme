<?php
/**
 * The template for displaying single posts
 *
 * @package My_Modern_Theme
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="container mx-auto px-4 py-8">

        <?php
        while ( have_posts() ) :
            the_post();
            ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class( 'post-article bg-white shadow-lg rounded-lg overflow-hidden' ); ?> itemscope itemtype="http://schema.org/Article">

                <!-- Featured Image -->
                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="post-thumbnail mb-6">
                        <?php the_post_thumbnail( 'full', array(
                            'class' => 'w-full h-96 object-cover',
                            'alt'   => esc_attr( get_the_title() )
                        ) ); ?>
                    </div>
                <?php endif; ?>

                <!-- Post Header -->
                <header class="post-header px-6">
                    <!-- Categories -->
                    <div class="post-categories mb-4">
                        <?php
                        $categories = get_the_category();
                        if ( ! empty( $categories ) ) {
                            echo '<div class="flex flex-wrap gap-2">';
                            foreach ( $categories as $category ) {
                                printf( '<a href="%1$s" class="post-category bg-vivid-green-cyan text-white px-3 py-1 rounded-full text-sm font-medium hover:bg-black transition-colors" rel="category tag">%2$s</a>',
                                    esc_url( get_category_link( $category->term_id ) ),
                                    esc_html( $category->name )
                                );
                            }
                            echo '</div>';
                        }
                        ?>
                    </div>

                    <!-- Title -->
                    <h1 class="post-title text-4xl font-bold mb-4" itemprop="headline">
                        <?php the_title(); ?>
                    </h1>

                    <!-- Meta -->
                    <div class="post-meta flex items-center gap-4 text-gray-600 text-sm mb-6">
                        <span class="post-date" itemprop="datePublished">
                            <time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>">
                                <?php echo esc_html( get_the_date() ); ?>
                            </time>
                        </span>
                        
                        <span class="post-author" itemprop="author">
                            <?php
                            printf(
                                /* translators: %s: Author name */
                                esc_html__( 'By %s', 'my-modern-theme' ),
                                '<a href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '" class="text-black hover:text-vivid-green-cyan">' . esc_html( get_the_author() ) . '</a>'
                            );
                            ?>
                        </span>
                        
                        <span class="post-comments">
                            <?php
                            comments_popup_link(
                                esc_html__( 'Leave a comment', 'my-modern-theme' ),
                                esc_html__( '1 Comment', 'my-modern-theme' ),
                                esc_html__( '% Comments', 'my-modern-theme' ),
                                'hover:text-vivid-green-cyan'
                            );
                            ?>
                        </span>
                    </div>
                </header>

                <!-- Post Content -->
                <div class="post-content px-6 prose max-w-none mb-8" itemprop="articleBody">
                    <?php
                    the_content();
                    
                    wp_link_pages( array(
                        'before' => '<div class="page-links mt-4">' . esc_html__( 'Pages:', 'my-modern-theme' ),
                        'after'  => '</div>',
                    ) );
                    ?>
                </div>

                <!-- Post Footer -->
                <footer class="post-footer px-6 py-4 border-t border-gray-100">
                    <!-- Tags -->
                    <?php
                    $tags = get_the_tags();
                    if ( $tags ) :
                        ?>
                        <div class="post-tags mb-4">
                            <span class="font-medium mr-2"><?php esc_html_e( 'Tags:', 'my-modern-theme' ); ?></span>
                            <?php foreach ( $tags as $tag ) : ?>
                                <a href="<?php echo esc_url( get_tag_link( $tag->term_id ); ?>" class="inline-block bg-gray-100 px-3 py-1 rounded-full text-sm mr-2 hover:bg-vivid-green-cyan hover:text-white transition-colors">
                                    <?php echo esc_html( $tag->name ); ?>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>

                    <!-- Social Sharing -->
                    <div class="social-sharing flex items-center gap-4 mt-6">
                        <span class="font-medium"><?php esc_html_e( 'Share:', 'my-modern-theme' ); ?></span>
                        <a href="<?php echo esc_url( 'https://twitter.com/share?url=' . get_permalink() ); ?>" target="_blank" rel="noopener noreferrer" class="social-icon twitter bg-black text-white p-2 rounded-full hover:bg-vivid-green-cyan transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"/>
                            </svg>
                        </a>
                        <!-- Add more social icons as needed -->
                    </div>
                </footer>

            </article>

            <!-- Post Navigation -->
            <nav class="post-navigation mt-8 flex justify-between">
                <div class="prev-post">
                    <?php previous_post_link( '%link', '← %title', true ); ?>
                </div>
                <div class="next-post">
                    <?php next_post_link( '%link', '%title →', true ); ?>
                </div>
            </nav>

            <!-- Comments -->
            <?php
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
            ?>

        <?php endwhile; ?>
    </div>
</main>

<?php
get_sidebar();
get_footer();