<?php
get_header();
?>
<div class="container">
    <section class="art-category">
        <h1 class="section-header"><a href="http://paintingsbymela.se/art/">Art</a> / <?php single_term_title() ?></h1>
        <?php do_action('woocommerce_archive_description') ?>
        <div class="art-category-sort">
            <?php do_action( 'woocommerce_before_shop_loop' ); ?>
        </div>
        <div class="art-category-content">
            <?php
        if ( woocommerce_product_loop() ) {
            if ( wc_get_loop_prop( 'total' ) ) {
                while ( have_posts() ) {
                    the_post();
                    ?>
                    <div class="art-preview">
                        <a href="<?php echo get_permalink() ?>"> <?php echo woocommerce_get_product_thumbnail('media-thumb') ?></a>
                        <div class="art-preview-info">
                            <div>
                                <a href="<?php echo get_permalink() ?>" class="art-preview-name"><?php echo get_the_title() ?></a>
                                <?php woocommerce_template_single_excerpt() ?>
                            </div>
                            <?php in_stock(); ?>
                        </div>
                    </div>
                    <?php
                }
            }
        }
        ?>
        </div>
    </section>
        <?php do_action( 'woocommerce_after_shop_loop' ); ?>
</div>
<?php
get_footer();
?>


