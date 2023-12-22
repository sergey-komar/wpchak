<?php
// КАРТОЧКА ОДНОГО  НА СТРАНИЦЕ ОТДЕЛЬНОГО ТОВАРА


defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
	<div class="breadcrumbs">
		<div class="container">		
			<?php woocommerce_breadcrumb();?>
		</div>
	</div>


<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
	<div class="product-block">
		<div class="product-left">
		<div class="product-left__img">
		<?php
		/**
		 * Hook: woocommerce_before_single_product_summary.
		 *
		 * @hooked woocommerce_show_product_sale_flash - 10
		 * @hooked woocommerce_show_product_images - 20
		 */
		do_action( 'woocommerce_before_single_product_summary' );
		?>
		</div><!--product-left__img-->


		<div class="summary entry-summary product-left__info">
			
			<?php
			/**
			 * Hook: woocommerce_single_product_summary.
			 *
			 * @hooked woocommerce_template_single_title - 5
			 * @hooked woocommerce_template_single_rating - 10
			 * @hooked woocommerce_template_single_price - 10
			 * @hooked woocommerce_template_single_excerpt - 20
			 * @hooked woocommerce_template_single_add_to_cart - 30
			 * @hooked woocommerce_template_single_meta - 40
			 * @hooked woocommerce_template_single_sharing - 50
			 * @hooked WC_Structured_Data::generate_product_data() - 60
			 */
			do_action( 'woocommerce_single_product_summary' );
			?>
		</div>
		</div><!--product-left-->

		<div class="product-right">
			<div class="product-order">
				<div class="product-order__top">
					<?php woocommerce_template_single_add_to_cart();?>
				</div>

				<div class="goods-block__info">
					<div class="goods-block__info-price">
						<?php woocommerce_template_single_price();?>
					</div>
					<div class="goods-block__info-icon">
						<a href="#">
						<img src="<?php echo get_template_directory_uri()?>/assets/images/home/goods-heart.svg" alt="img">
						</a>
						<a href="<?php echo wc_get_cart_url()?>">
						<img src="<?php echo get_template_directory_uri()?>/assets/images/home/goods-basket.svg" alt="img">
						</a>
					</div>
				</div>
	
			</div>
			

			<div class="product-right__contact">
				<div class="product-right__contact-text">Наш телефон</div>
				<a href="#" class="product-right__contact-phone">+7 (963) 474-06-50</a>
				<button class="product-right__contact-btn btn">Хочу задать вопрос</button>
			</div>
		</div>
	</div><!--product-block -->


	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action( 'woocommerce_after_single_product_summary' );
	?>

<?php do_action( 'woocommerce_after_single_product' ); ?>


			
			
			
	</div>
