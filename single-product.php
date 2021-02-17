<?php get_header() ?>
<?php the_post() ?>
<div class="container">
    <section class="art-single">
        <h1 class="section-header"><?php 
        the_title() 
        ?></h1>
        <?php 
            echo woocommerce_show_product_images();
        ?>
        
        <div class="art-info">
            <div class="art-single-info">
                <div class="art-single-details">
                    <?php 
                        echo woocommerce_template_single_excerpt(); 
                    ?>
                </div>
                <?php 
                    get_product_description();
                    in_stock();
                ?>
            </div>
            <?php if ($product->is_in_stock() ) { ?>
                <a href="#" onclick="toggleBuyInfo(event)" class="buy-content-toggle">Purchase Info</a>
                <a href="#" onclick="togglePurchaseEnquiry(event)" class="buy-content-toggle">Send Enquiry</a>
                <?php woocommerce_template_single_meta(); ?>
                <div class="buy-info">
                    <?php get_purchase_info() ?>
                </div>
                <div class="purchase-enquiry">
                    <?php get_purchase_enquiry() ?>
                </div>
            <?php } else {
                    woocommerce_template_single_meta();  
                  }
            ?>
        </div>
    </section>
</div>
<?php get_footer() ?>
