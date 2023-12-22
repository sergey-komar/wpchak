<?php
//КОРЗИНА

defined( 'ABSPATH' ) || exit;
?>
  	<div class="breadcrumbs">
		<div class="container">
			
			<?php woocommerce_breadcrumb();?>
		</div>
	</div>

<main class="main">
	<div class="container">
		<section class="cart">
			<h1 class="cart__title">Корзина <?php echo WC()->cart->get_cart_contents_count(); ?></h1>

			<div class="cart-block">
				<div class="cart-block__left">
					<?php
					do_action( 'woocommerce_before_cart' ); ?>

					<form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
						<?php do_action( 'woocommerce_before_cart_table' ); ?>

						<div class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
						
							
								<?php do_action( 'woocommerce_before_cart_contents' ); ?>

								<?php
								foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
									$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
									$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );
									/**
									 * Filter the product name.
									 *
									 * @since 2.1.0
									 * @param string $product_name Name of the product in the cart.
									 * @param array $cart_item The product in the cart.
									 * @param string $cart_item_key Key for the product in the cart.
									 */
									$product_name = apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key );

									if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
										$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
										?>
										<div class="woocommerce-cart-form__cart-item cart-block__inner <?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">

											
											<div class="product-thumbnail cart-block__img">
											<?php
											$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

											if ( ! $product_permalink ) {
												echo $thumbnail; // PHPCS: XSS ok.
											} else {
												printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail ); // PHPCS: XSS ok.
											}
											?>
											</div>
											<div class="cart-block__content">
												<div class="product-name cart-block__content-title" data-title="<?php esc_attr_e( 'Product', 'woocommerce' ); ?>">
												<?php
												if ( ! $product_permalink ) {
													echo wp_kses_post( $product_name . '&nbsp;' );
												} else {
													/**
													 * This filter is documented above.
													 *
													 * @since 2.1.0
													 */
													echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) );
												}

												do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key );

												// Meta data.
												echo wc_get_formatted_cart_item_data( $cart_item ); // PHPCS: XSS ok.

												// Backorder notification.
												if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
													echo wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>', $product_id ) );
												}
												?>
												</div><!--cart-block__content-title-->
												<div class="cart-block__content-text">
													
												</div>
											</div><!--cart-block__content-->


											<div class="cart-block__order">

											<div class="product-quantity product-order__top" data-title="<?php esc_attr_e( 'Quantity', 'woocommerce' ); ?>">
											<button class="product-order__top-arrows minus">
											<img src="<?php echo get_template_directory_uri()?>/assets/images/product/product-arrows-left.png" alt="img">
											</button>
											<?php
											if ( $_product->is_sold_individually() ) {
												$min_quantity = 1;
												$max_quantity = 1;
											} else {
												$min_quantity = 0;
												$max_quantity = $_product->get_max_purchase_quantity();
											}

											$product_quantity = woocommerce_quantity_input(
												array(
													'input_name'   => "cart[{$cart_item_key}][qty]",
													'input_value'  => $cart_item['quantity'],
													'max_value'    => $max_quantity,
													'min_value'    => $min_quantity,
													'product_name' => $product_name,
												),
												$_product,
												false
											);

											echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item ); // PHPCS: XSS ok.
											?>
											<button class="product-order__top-arrows inc plus">
												<img src="<?php echo get_template_directory_uri()?>/assets/images/product/product-arrows-right.png" alt="img">
											</button>
											</div>

											<div class="cart-block__info">
											<div class="product-price cart-block__info-price" data-title="<?php esc_attr_e( 'Price', 'woocommerce' ); ?>">
												<?php
													echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
												?>
											</div>
											<!-- ВЫВОДИМ КНОПКУ В НАЛИЧИИ ФУНКЦИЯ В ФАЙЛЕ woocommerce-hooks -->
											<?php truemisha_product_in_stock_in_cart($cart_item, $cart_item_key)?>
										
											
											</div><!--cart-block__info-->
										

											<div class="product-subtotal" data-title="<?php esc_attr_e( 'Subtotal', 'woocommerce' ); ?>">
												<?php
													echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
												?>
											</div>
											<a href="#" class="cart-block__order-btn btn">Заказать</a>
											</div><!--cart-block__order-->


											<div class="product-remove">
												<?php
													echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
														'woocommerce_cart_item_remove_link',
														sprintf(
															'<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s">&times;</a>',
															esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
															/* translators: %s is the product name */
															esc_attr( sprintf( __( 'Remove %s from cart', 'woocommerce' ), wp_strip_all_tags( $product_name ) ) ),
															esc_attr( $product_id ),
															esc_attr( $_product->get_sku() )
														),
														$cart_item_key
													);
												?>
											</div>
										</div>
										<?php
									}
								}
								?>

								<?php do_action( 'woocommerce_cart_contents' ); ?>

								<tr>
									<td colspan="6" class="actions">

										<?php if ( wc_coupons_enabled() ) { ?>
											<div class="coupon">
												<label for="coupon_code" class="screen-reader-text"><?php esc_html_e( 'Coupon:', 'woocommerce' ); ?></label> <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="<?php esc_attr_e( 'Coupon code', 'woocommerce' ); ?>" /> <button type="submit" class="button<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?>" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?>"><?php esc_html_e( 'Apply coupon', 'woocommerce' ); ?></button>
												<?php do_action( 'woocommerce_cart_coupon' ); ?>
											</div>
										<?php } ?>

										<button type="submit" class="button<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?>" name="update_cart" value="<?php esc_attr_e( 'Update cart', 'woocommerce' ); ?>"><?php esc_html_e( 'Update cart', 'woocommerce' ); ?></button>

										<?php do_action( 'woocommerce_cart_actions' ); ?>
										

										<?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>
									</td>
								</tr>

								<?php do_action( 'woocommerce_after_cart_contents' ); ?>
								
						</div>
						<?php do_action( 'woocommerce_after_cart_table' ); ?>
						
					</form>

					<?php do_action( 'woocommerce_before_cart_collaterals' ); ?>
				</div>

					<div class="cart-block__right">
						<div class="cart-collaterals cart-block__design">
							<?php
								/**
								 * Cart collaterals hook.
								 *
								 * @hooked woocommerce_cross_sell_display
								 * @hooked woocommerce_cart_totals - 10
								 */
								do_action( 'woocommerce_cart_collaterals' );
							?>
						</div>

						<?php do_action( 'woocommerce_after_cart' ); ?>

						<div class="product-right__contact">
                                <div class="product-right__contact-text">Наш телефон</div>
                                <a href="#" class="product-right__contact-phone">+7 (963) 474-06-50</a>
                                <button class="product-right__contact-btn btn">Хочу задать вопрос</button>
                        </div>
					</div>
			</div>
		</section>
	</div>
</main>



