<?php get_header(); 
if (is_cart()) { ?>
            <style type="text/css">
                .woocommerce table.shop_table {
                    display: block;
                    position: inherit;
                }
            </style>
    <?php } ?> 
        <?php 
        /* Start the Loop */
        woocommerce_content(); 
        ?>
<?php get_footer(); ?>