<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
        integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head();
            if (is_cart()) { ?>
            <style type="text/css">
                .woocommerce table.shop_table {
                    display: block;
                    position: inherit;
                }
            </style>
    <?php } ?>    
</head>
<body>
    <header class="navigation">
        <?php if (is_home()) { ?>
            <a style="visibility: hidden;" href="<?php echo home_url( '/' ); ?>">
        <?php }else{ ?>
            <a href="<?php echo home_url( '/' ); ?>">
        <?php } ?>
        <i class="fa fa-angle-left" aria-hidden="true" style="font-size: 2em;"></i></a>
        <?php $getheaderoption = get_option('theme_header_page'); ?>
        <a class="navigation-logo" href="<?php echo home_url( '/' ); ?>">
            <?php echo !empty($getheaderoption['header_logo']) ? $getheaderoption['header_logo'] : '<h1>Paper Lane</h1><h2>Soap Co</h2>'; ?>
        </a>
        <button onclick="myFunction()">
            <i class="fa fa-shopping-cart" aria-hidden="true" style="font-size: 1.5em;"></i>
        </button>
        <?php if ( class_exists( 'WooCommerce' ) ) { ?>
        <?php $getcartcontent = WC()->cart->get_cart(); ?>
        <div class="cart" id="cart">
            <ul>
                <?php if (!empty($getcartcontent)) {
                    foreach ($getcartcontent as $cart_item_key => $productobject) { 
                        $getpostthumbnailid = get_post_thumbnail_id($productobject['product_id']); ?>
                        <li>
                                 <img src="<?php echo wp_get_attachment_url($getpostthumbnailid); ?>" alt="" width="100">
                            <p><?php echo $productobject['quantity']; ?> X <?php echo get_the_title($productobject['product_id']); ?></p>
                            <span style="margin-left: 10px;"><a href="<?php echo wc_get_cart_remove_url( $cart_item_key ); ?>">X</a></span>
                        </li>
                   <?php  }
                } ?>

            </ul>
            <p>Total: <?php echo WC()->cart->get_cart_total(); ?></p>
            <a href="<?php echo wc_get_checkout_url(); ?>">Checkout</a>
        </div>
        <?php } ?>
    </header>