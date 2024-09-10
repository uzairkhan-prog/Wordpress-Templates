<?php

/**
 * Title:Template Cart
 * Slug: fota-corporate/template-cart
 * Categories: template
 * Inserter: false
 */
?>
<!-- wp:template-part {"slug":"header","theme":"fota-corporate"} /-->

<!-- wp:group {"tagName":"main","layout":{"type":"constrained"}} -->
<main class="wp-block-group">
    <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","right":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"inherit":true,"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group alignfull" style="padding-top: var(--wp--preset--spacing--80); padding-right: var(--wp--preset--spacing--30); padding-bottom: var(--wp--preset--spacing--80); padding-left: var(--wp--preset--spacing--30)">
        <!-- wp:woocommerce/cart -->
        <div class="wp-block-woocommerce-cart alignwide is-loading">
            <!-- wp:woocommerce/filled-cart-block {"align":"wide"} -->
            <div class="wp-block-woocommerce-filled-cart-block alignwide">
                <!-- wp:woocommerce/cart-items-block -->
                <div class="wp-block-woocommerce-cart-items-block">
                    <!-- wp:woocommerce/cart-line-items-block -->
                    <div class="wp-block-woocommerce-cart-line-items-block"></div>
                    <!-- /wp:woocommerce/cart-line-items-block -->

                    <!-- wp:woocommerce/cart-cross-sells-block -->
                    <div class="wp-block-woocommerce-cart-cross-sells-block">
                        <!-- wp:heading {"fontSize":"large"} -->
                        <h2 class="wp-block-heading has-large-font-size"><?php esc_html_e('You may be interested in…', 'fota-corporate') ?></h2>
                        <!-- /wp:heading -->

                        <!-- wp:woocommerce/cart-cross-sells-products-block -->
                        <div class="wp-block-woocommerce-cart-cross-sells-products-block"></div>
                        <!-- /wp:woocommerce/cart-cross-sells-products-block -->
                    </div>
                    <!-- /wp:woocommerce/cart-cross-sells-block -->
                </div>
                <!-- /wp:woocommerce/cart-items-block -->

                <!-- wp:woocommerce/cart-totals-block -->
                <div class="wp-block-woocommerce-cart-totals-block">
                    <!-- wp:woocommerce/cart-order-summary-block -->
                    <div class="wp-block-woocommerce-cart-order-summary-block">
                        <!-- wp:woocommerce/cart-order-summary-heading-block -->
                        <div class="wp-block-woocommerce-cart-order-summary-heading-block"></div>
                        <!-- /wp:woocommerce/cart-order-summary-heading-block -->

                        <!-- wp:woocommerce/cart-order-summary-coupon-form-block -->
                        <div class="wp-block-woocommerce-cart-order-summary-coupon-form-block"></div>
                        <!-- /wp:woocommerce/cart-order-summary-coupon-form-block -->

                        <!-- wp:woocommerce/cart-order-summary-subtotal-block -->
                        <div class="wp-block-woocommerce-cart-order-summary-subtotal-block"></div>
                        <!-- /wp:woocommerce/cart-order-summary-subtotal-block -->

                        <!-- wp:woocommerce/cart-order-summary-fee-block -->
                        <div class="wp-block-woocommerce-cart-order-summary-fee-block"></div>
                        <!-- /wp:woocommerce/cart-order-summary-fee-block -->

                        <!-- wp:woocommerce/cart-order-summary-discount-block -->
                        <div class="wp-block-woocommerce-cart-order-summary-discount-block"></div>
                        <!-- /wp:woocommerce/cart-order-summary-discount-block -->

                        <!-- wp:woocommerce/cart-order-summary-shipping-block -->
                        <div class="wp-block-woocommerce-cart-order-summary-shipping-block"></div>
                        <!-- /wp:woocommerce/cart-order-summary-shipping-block -->

                        <!-- wp:woocommerce/cart-order-summary-taxes-block -->
                        <div class="wp-block-woocommerce-cart-order-summary-taxes-block"></div>
                        <!-- /wp:woocommerce/cart-order-summary-taxes-block -->
                    </div>
                    <!-- /wp:woocommerce/cart-order-summary-block -->

                    <!-- wp:woocommerce/cart-express-payment-block -->
                    <div class="wp-block-woocommerce-cart-express-payment-block"></div>
                    <!-- /wp:woocommerce/cart-express-payment-block -->

                    <!-- wp:woocommerce/proceed-to-checkout-block -->
                    <div class="wp-block-woocommerce-proceed-to-checkout-block"></div>
                    <!-- /wp:woocommerce/proceed-to-checkout-block -->

                    <!-- wp:woocommerce/cart-accepted-payment-methods-block -->
                    <div class="wp-block-woocommerce-cart-accepted-payment-methods-block"></div>
                    <!-- /wp:woocommerce/cart-accepted-payment-methods-block -->
                </div>
                <!-- /wp:woocommerce/cart-totals-block -->
            </div>
            <!-- /wp:woocommerce/filled-cart-block -->

            <!-- wp:woocommerce/empty-cart-block {"align":"wide"} -->
            <div class="wp-block-woocommerce-empty-cart-block alignwide">
                <!-- wp:woocommerce/filled-cart-block -->
                <div class="wp-block-woocommerce-filled-cart-block">
                    <!-- wp:woocommerce/cart-items-block -->
                    <div class="wp-block-woocommerce-cart-items-block">
                        <!-- wp:woocommerce/cart-line-items-block -->
                        <div class="wp-block-woocommerce-cart-line-items-block"></div>
                        <!-- /wp:woocommerce/cart-line-items-block -->

                        <!-- wp:woocommerce/cart-cross-sells-block -->
                        <div class="wp-block-woocommerce-cart-cross-sells-block">
                            <!-- wp:heading {"fontSize":"large"} -->
                            <h2 class="wp-block-heading has-large-font-size"><?php esc_html_e('You may be interested in…', 'fota-corporate') ?></h2>
                            <!-- /wp:heading -->

                            <!-- wp:woocommerce/cart-cross-sells-products-block -->
                            <div class="wp-block-woocommerce-cart-cross-sells-products-block"></div>
                            <!-- /wp:woocommerce/cart-cross-sells-products-block -->
                        </div>
                        <!-- /wp:woocommerce/cart-cross-sells-block -->
                    </div>
                    <!-- /wp:woocommerce/cart-items-block -->

                    <!-- wp:woocommerce/cart-totals-block -->
                    <div class="wp-block-woocommerce-cart-totals-block">
                        <!-- wp:woocommerce/cart-order-summary-block -->
                        <div class="wp-block-woocommerce-cart-order-summary-block">
                            <!-- wp:woocommerce/cart-order-summary-heading-block -->
                            <div class="wp-block-woocommerce-cart-order-summary-heading-block"></div>
                            <!-- /wp:woocommerce/cart-order-summary-heading-block -->

                            <!-- wp:woocommerce/cart-order-summary-coupon-form-block -->
                            <div class="wp-block-woocommerce-cart-order-summary-coupon-form-block"></div>
                            <!-- /wp:woocommerce/cart-order-summary-coupon-form-block -->

                            <!-- wp:woocommerce/cart-order-summary-subtotal-block -->
                            <div class="wp-block-woocommerce-cart-order-summary-subtotal-block"></div>
                            <!-- /wp:woocommerce/cart-order-summary-subtotal-block -->

                            <!-- wp:woocommerce/cart-order-summary-fee-block -->
                            <div class="wp-block-woocommerce-cart-order-summary-fee-block"></div>
                            <!-- /wp:woocommerce/cart-order-summary-fee-block -->

                            <!-- wp:woocommerce/cart-order-summary-discount-block -->
                            <div class="wp-block-woocommerce-cart-order-summary-discount-block"></div>
                            <!-- /wp:woocommerce/cart-order-summary-discount-block -->

                            <!-- wp:woocommerce/cart-order-summary-shipping-block -->
                            <div class="wp-block-woocommerce-cart-order-summary-shipping-block"></div>
                            <!-- /wp:woocommerce/cart-order-summary-shipping-block -->

                            <!-- wp:woocommerce/cart-order-summary-taxes-block -->
                            <div class="wp-block-woocommerce-cart-order-summary-taxes-block"></div>
                            <!-- /wp:woocommerce/cart-order-summary-taxes-block -->
                        </div>
                        <!-- /wp:woocommerce/cart-order-summary-block -->

                        <!-- wp:woocommerce/cart-express-payment-block -->
                        <div class="wp-block-woocommerce-cart-express-payment-block"></div>
                        <!-- /wp:woocommerce/cart-express-payment-block -->

                        <!-- wp:woocommerce/proceed-to-checkout-block -->
                        <div class="wp-block-woocommerce-proceed-to-checkout-block"></div>
                        <!-- /wp:woocommerce/proceed-to-checkout-block -->

                        <!-- wp:woocommerce/cart-accepted-payment-methods-block -->
                        <div class="wp-block-woocommerce-cart-accepted-payment-methods-block"></div>
                        <!-- /wp:woocommerce/cart-accepted-payment-methods-block -->
                    </div>
                    <!-- /wp:woocommerce/cart-totals-block -->
                </div>
                <!-- /wp:woocommerce/filled-cart-block -->

                <!-- wp:woocommerce/empty-cart-block -->
                <div class="wp-block-woocommerce-empty-cart-block">
                    <!-- wp:heading {"textAlign":"center","className":"with-empty-cart-icon wc-block-cart__empty-cart__title"} -->
                    <h2 class="wp-block-heading has-text-align-center with-empty-cart-icon wc-block-cart__empty-cart__title"><?php esc_html_e('Your cart is currently empty!', 'fota-corporate') ?></h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center"} -->
                    <p class="has-text-align-center"><a href="/shop/"><?php esc_html_e('Browse store', 'fota-corporate') ?></a></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:separator {"className":"is-style-dots"} -->
                    <hr class="wp-block-separator has-alpha-channel-opacity is-style-dots" />
                    <!-- /wp:separator -->

                    <!-- wp:heading {"textAlign":"center"} -->
                    <h2 class="wp-block-heading has-text-align-center"><?php esc_html_e('New in store', 'fota-corporate') ?></h2>
                    <!-- /wp:heading -->

                    <!-- wp:woocommerce/product-new {"rows":1} /-->
                </div>
                <!-- /wp:woocommerce/empty-cart-block -->
            </div>
            <!-- /wp:woocommerce/empty-cart-block -->
        </div>
        <!-- /wp:woocommerce/cart -->
    </div>
    <!-- /wp:group -->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","theme":"fota-corporate"} /-->