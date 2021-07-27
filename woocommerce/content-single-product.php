<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */

?><form  action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data'>
    <div class="product">
        <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $saved_post_id ) ); ?>" alt="">
        <div style="margin: 0em 1em;">
            <h1><?php the_title(); ?></h1>
            <h3>Price: <?php echo $product->get_price_html(); ?></h3>
            <?php  if ($product->get_attributes()) {
            foreach (  $product->get_attributes() as $product_attribute_key => $product_attribute ) : ?>
            <label for="options"><?php echo wp_kses_post( $product_attribute['name'] ); ?>:</label>
            <?php $Fragrance = $product_attribute['options']; ?>
	          <select name="fragrance_value" id="options">
            	<?php ?>
            	<?php  if (!empty($Fragrance)) {
						foreach ($Fragrance as $valuekey => $mainvalue) {
							echo "<option value='".$mainvalue."'>".$mainvalue."</option>";
						}
            	} ?>
            </select>
            <?php endforeach; } ?>

           <?php the_content(); ?>
        </div>
    </div>
    <footer class="product-footer" style="position: fixed; bottom: 0;">
        <label for="qty">QTY:</label>
        <select name="quantity" id="qty">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>
        <button  type="submit" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class="single_add_to_cart_button button alt"><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>
    </footer>
    </form>
