<?php
// КАТЕГОРИИ НА ГЛАВНОЙ СТРАНИЦЕ

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>


	<div <?php wc_product_cat_class( 'category-block__item', $category ); ?>>
		<div class="category-block__item-img">
		<?php
		/**
		 * The woocommerce_before_subcategory hook.
		 *
		 * @hooked woocommerce_template_loop_category_link_open - 10
		 */
		do_action( 'woocommerce_before_subcategory', $category );

		/**
		 * The woocommerce_before_subcategory_title hook.
		 *
		 * @hooked woocommerce_subcategory_thumbnail - 10
		 */
		do_action( 'woocommerce_before_subcategory_title', $category );
		?>
		</div><!--category-block__item-img-->
		
		<?php
		/**
		 * The woocommerce_shop_loop_subcategory_title hook.
		 *
		 * @hooked woocommerce_template_loop_category_title - 10
		 */
		do_action( 'woocommerce_shop_loop_subcategory_title', $category );

		/**
		 * The woocommerce_after_subcategory_title hook.
		 */
		do_action( 'woocommerce_after_subcategory_title', $category );
		?>

		<div class="category-block__item-btn btn">
		<?php
		/**
		 * The woocommerce_after_subcategory hook.
		 *
		 * @hooked woocommerce_template_loop_category_link_close - 10
		 */
		do_action( 'woocommerce_after_subcategory', $category );
		?>
		Смотреть товары
		</div><!--category-block__item-btn btn-->

	</div><!--category-block__item-->
