<?php
//КАРТОЧКА ТОВАРА НА СТРАНИЦЕ МАГАЗИНА
defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>

<!-- ПРОВЕРЯЕМ ГЛАВНАЯ ЭТО СТРАНИЦА ИЛИ НЕТ И ДОБАВЛЯЕМ КЛАССЫ -->
<?php $product_item = !is_front_page() ? 'catalog-card' : 'goods-block__item';?>
<div <?php wc_product_class( $product_item, $product ); ?>>
	<?php
	/**
	 * Hook: woocommerce_before_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_open - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item' );
	?>

	<!-- ПРОВЕРЯЕМ ГЛАВНАЯ ЭТО СТРАНИЦА ИЛИ НЕТ И ДОБАВЛЯЕМ КЛАССЫ -->
	<?php $product_img = !is_front_page() ? 'catalog-card__img' : 'goods-block__item-img';?>
	<div <?php wc_product_class( $product_img, $product ); ?>>
	<?php
	/**
	 * Hook: woocommerce_before_shop_loop_item_title.
	 *
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item_title' );
	?>
	</div><!--catalog-card__img-->


	<?php $product_content = !is_front_page() ? 'catalog-card__content' : '';?>
	<div <?php wc_product_class( $product_content, $product ); ?>>
	<?php
	/**
	 * Hook: woocommerce_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_product_title - 10
	 */
	do_action( 'woocommerce_shop_loop_item_title' );
	?>
	</div><!--catalog-card__content-->


	<div class="catalog-card__info">
		
		<?php
		/**
		 * Hook: woocommerce_after_shop_loop_item_title.
		 *
		 * @hooked woocommerce_template_loop_rating - 5
		 * @hooked woocommerce_template_loop_price - 10
		 */
		do_action( 'woocommerce_after_shop_loop_item_title' );
		?>

		<div class="goods-block__info">
		<?php
		/**
		 * Hook: woocommerce_after_shop_loop_item.
		 *
		 * @hooked woocommerce_template_loop_product_link_close - 5
		 * @hooked woocommerce_template_loop_add_to_cart - 10
		 */
		do_action( 'woocommerce_after_shop_loop_item' );
		?>
		</div><!--goods-block__info-->
		<a href="<?php the_permalink();?>" class="goods-block__item-btn btn catalog-card__btn">К товару</a>
	</div><!--catalog-card__info-->

</div>
