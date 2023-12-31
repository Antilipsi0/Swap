<?php
/** 
 * @package    HaruTheme/Haru TeeSpace
 * @version    1.0.0
 * @author     Administrator <admin@harutheme.com>
 * @copyright  Copyright 2022, HaruTheme
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       http://harutheme.com
*/

?>
<div class="mini-cart-wrap <?php echo esc_attr( $settings['show_price'] == 'yes' ) ? 'with-price' : 'no-price'; ?>">
  <div class="widget_shopping_cart_content">
    <?php get_template_part( 'woocommerce/cart/mini-cart' ); ?>
  </div>
</div>
