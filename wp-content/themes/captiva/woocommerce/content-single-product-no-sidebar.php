<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * Override this template by copying it to yourtheme/woocommerce/content-single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */
global $captiva_options;
$protocol = ( !empty( $_SERVER['HTTPS'] ) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https:" : "http:";
$size_guide_title = '';
if ( isset( $captiva_options['product_size_guide_title'] ) ) {
    $size_guide_title = $captiva_options['product_size_guide_title'];
}

if ( !defined( 'ABSPATH' ) )
    exit; // Exit if accessed directly
?>

<?php
/**
 * woocommerce_before_single_product hook
 *
 * @hooked woocommerce_show_messages - 10
 */
do_action( 'woocommerce_before_single_product' );
?>
<div itemscope itemtype="http://schema.org/Product" id="product-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="row single-product-details product-nocols">
        <div class="product-images col-lg-5 col-md-5 col-sm-5">
            <?php
            /**
             * woocommerce_show_product_images hook
             *
             * @hooked woocommerce_show_product_sale_flash - 10
             * @hooked woocommerce_show_product_images - 20
             */
            do_action( 'woocommerce_before_single_product_summary' );
            ?>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5">
            <div class="summary entry-summary">
                <?php
                /**
                 * woocommerce_single_product_summary hook
                 *
                 * @hooked woocommerce_template_single_title - 5
                 * @hooked woocommerce_template_single_price - 10
                 * @hooked woocommerce_template_single_excerpt - 20
                 * @hooked woocommerce_template_single_add_to_cart - 30
                 * @hooked woocommerce_template_single_meta - 40
                 * @hooked woocommerce_template_single_sharing - 50
                 */
                do_action( 'woocommerce_single_product_summary' );
                ?>

                <?php if ( $size_guide_title ) { 
                    $captiva_options['product_size_guide']['url'] = $protocol . str_replace( array( 'http:', 'https:' ), '', $captiva_options['product_size_guide']['url'] );
                ?>

                    <div class="cap-size-guide">
                        <a class="button small sizes" href="<?php echo $captiva_options['product_size_guide']['url']; ?>">
                            <p><?php echo $size_guide_title; ?></p></a>
                    </div>
                <?php } ?>

                <?php woocommerce_get_template( 'single-product/meta.php' );
                ?>
            </div><!-- .summary -->
        </div>
        <div class="ct col-lg-2 col-md-2 col-sm-2">
            <div class="next-prev-nav">

                <?php next_post_link_product( '%link', 'next-product', true ); ?>
                <?php previous_post_link_product( '%link', 'prev-product', true ); ?>
            </div>
            <?php woocommerce_get_template( 'single-product/up-sells.php' ); ?>
        </div>
    </div>
    <div class="row product-nocols">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <?php woocommerce_get_template( 'single-product/tabs/tabs.php' ); ?>
        </div>
    </div>
    <div class="row product-nocols">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <?php woocommerce_get_template( 'single-product/related.php' ); ?>
        </div>
    </div>
</div><!-- #product-<?php the_ID(); ?> -->

<?php do_action( 'woocommerce_after_single_product' ); ?>