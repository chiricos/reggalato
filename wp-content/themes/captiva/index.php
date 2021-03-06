<?php
/**
 * The main template file.
 * @package captiva
 */
global $captiva_options;
$cap_blog_sidebar = '';
if ( isset( $captiva_options['cap_blog_sidebar'] ) ) {
    $cap_blog_sidebar = $captiva_options['cap_blog_sidebar'];
}

get_header();
?>
<div class="container">
    <div class="content">
        <?php
        if ( function_exists( 'yoast_breadcrumb' ) ) {
            yoast_breadcrumb( '<p id="breadcrumbs">', '</p>' );
        }
        ?>
        <div class="row">
            <?php if ( ( $cap_blog_sidebar == 'default' ) || ( $cap_blog_sidebar == '' ) ) { ?>
                <div class="col-lg-9 col-md-9 col-sm-9 col-sm-push-3 col-md-push-3 col-lg-push-3">
                    <div id="primary" class="content-area cap-blog-layout">
                        <main id="main" class="site-main" role="main">
                            <?php if ( have_posts() ) : ?>
                                <?php /* Start the Loop */ ?>
                                <?php while ( have_posts() ) : the_post(); ?>
                                    <?php
                                    /* Include the Post-Format-specific template for the content.
                                     * If you want to override this in a child theme, then include a file
                                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                     */
                                    get_template_part( 'content', get_post_format() );
                                    ?>
                                <?php endwhile; ?>
                                <?php wpcaptiva_numeric_posts_nav(); ?>
                            <?php else : ?>
                                <?php get_template_part( 'no-results', 'index' ); ?>
                            <?php endif; ?>
                        </main><!-- #main -->
                    </div><!-- #primary -->
                </div><!--/9 -->
                <div class="col-lg-3 col-md-3 col-sm-3 col-sm-pull-9 col-md-pull-9 col-lg-pull-9">
                    <?php get_sidebar(); ?>
                </div>
            <?php } else if ( $cap_blog_sidebar == 'right' ) { ?>
                <div class="col-lg-9 col-md-9 col-sm-9">
                    <div id="primary" class="content-area cap-blog-layout">
                        <main id="main" class="site-main" role="main">
                            <?php if ( have_posts() ) : ?>
                                <?php /* Start the Loop */ ?>
                                <?php while ( have_posts() ) : the_post(); ?>
                                    <?php
                                    /* Include the Post-Format-specific template for the content.
                                     * If you want to override this in a child theme, then include a file
                                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                     */
                                    get_template_part( 'content', get_post_format() );
                                    ?>
                                <?php endwhile; ?>
                                <?php wpcaptiva_numeric_posts_nav(); ?>
                            <?php else : ?>
                                <?php get_template_part( 'no-results', 'index' ); ?>
                            <?php endif; ?>
                        </main><!-- #main -->
                    </div><!-- #primary -->
                </div><!--/9 -->
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <?php get_sidebar(); ?>
                </div>
            <?php } else if ( $cap_blog_sidebar == 'none' ) { ?>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div id="primary" class="content-area cap-blog-layout">
                        <main id="main" class="site-main" role="main">
                            <?php if ( have_posts() ) : ?>
                                <?php /* Start the Loop */ ?>
                                <?php while ( have_posts() ) : the_post(); ?>
                                    <?php
                                    /* Include the Post-Format-specific template for the content.
                                     * If you want to override this in a child theme, then include a file
                                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                     */
                                    get_template_part( 'content', get_post_format() );
                                    ?>
                                <?php endwhile; ?>
                                <?php wpcaptiva_numeric_posts_nav(); ?>
                            <?php else : ?>
                                <?php get_template_part( 'no-results', 'index' ); ?>
                            <?php endif; ?>
                        </main><!-- #main -->
                    </div><!-- #primary -->
                </div><!--/12 -->
            <?php } ?>
        </div><!--/row -->
    </div><!--/content -->
</div><!--/container -->

<?php get_footer(); ?>