<?php
/**
 * The template used for displaying full width page content in page.php
 *
 * @package captiva
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-content">
        <?php the_content(); ?>
        <?php
        wp_link_pages( array(
            'before' => '<div class="page-links">' . __( 'Pages:', 'captiva' ),
            'after' => '</div>',
        ) );
        ?>
    </div><!-- .entry-content -->
    <div class="container">
        <?php edit_post_link( __( 'Edit', 'captiva' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
    </div>
</article><!-- #post-## -->
