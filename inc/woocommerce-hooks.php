<?php
// ОТКЛЮЧАЕМ ВСЕ СТИЛИ woocommerce
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );


//СПИСОК КАТЕГОРИЙ ТОВАРОВ НА ГЛАВНОЙ СТРАНИЦЕ
remove_action('woocommerce_shop_loop_subcategory_title', 'woocommerce_template_loop_category_title', 10);
add_action('woocommerce_shop_loop_subcategory_title', function($category) {
    echo '<div class="category-block__item-title">' . $category->name .' </div>';
});

//ОТКРЕПЛЯЕМ ССЫЛКУ НА КАТЕГОРИИ С ОДНОГО ХУКА И СТАВИМ НА ДРУГОЙ
remove_action('woocommerce_before_subcategory', 'woocommerce_template_loop_category_link_open', 10);
add_action('woocommerce_after_subcategory', 'woocommerce_template_loop_category_link_open', 15);


//СТРАНИЦА МАГАЗИНА
//хлебные крошки
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
add_filter( 'woocommerce_breadcrumb_defaults', function() {
	return array(
		'delimiter'   => '&nbsp;/&nbsp;',
		'wrap_before' => '<nav class="breadcrumb bg-light mb-30">',
		'wrap_after'  => '</nav>',
		'before'      => '',
		'after'       => '',
		'home'        => __( 'Главная', 'woostudy' ),
	);
} );


remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);


//ОТКЛЮЧАЕМ ССЫЛКУ В КОТОРУЮ ОБЕРНУТА КАРТОЧКА ТОВАРА НА СТРАНИЦЕ МАГАЗИНА
remove_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10);

//ДОБАВЛЯЕМ НАЗВАНИЮ ТОВАРА НА СТРАНИЦЕ МАГАЗИНА СВОЙ КЛАСС И DIV и проверяем главная это страница или нет
remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);
add_action('woocommerce_shop_loop_item_title', function() {
	global $product;
	if(!is_front_page()){
		echo '<div class="catalog-card__content-title">' .$product->get_title() .'</div>';
	}else{
		echo '<div class="goods-block__item-title">' .$product->get_title() .'</div>';
	}
	
});
//ДОБАВЛЯЕМ КРАТКОЕ ОПИСАНИЕ ТОВАРА НА СТРАНИЦЕ МАГАЗИНА И СВОЙ DIV и проверяем главная это страница или нет
add_action('woocommerce_shop_loop_item_title', function() {
	global $product;
	if(!is_front_page()){
		echo '<div class="catalog-card__content-text">' .$product->short_description .'</div>';
	}else{
		'';
	}
	
});


//УБИРАЕМ НАДПИСЬ РАСПРОДАЖА НА СТРАНИЦЕ МАГАЗИНА В КАРТОЧКЕ ТОВАРА
remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10);

//ОТКРЕПЛЯЕМ ЦЕНУ ОТ ОДНОГО ХУКА И ВЕШАЕМ НА ДРУГОЙ
remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10);
add_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_price', 9);

// ////УВЕДОМЛЕНИЯ НА СТРАНИЦЕ МАГАЗИНА УБИРАЕМ
// remove_action('woocommerce_before_shop_loop', 'woocommerce_output_all_notices', 10);

//ДОБАВЛЯЕМ НАДПИСЬ В НАЛИЧИИ НА СТРАНИЦЕ МАГАЗИНА В КАРТОЧКЕ ТОВАРА и проверяем главная это страница или нет
add_action( 'woocommerce_after_shop_loop_item_title', 'my_sold_out_loop', 5 );
function my_sold_out_loop() {
    global $product;
	if(!is_front_page()){
		if ( !$product->is_in_stock()) {
			echo '<div class="catalog-card__info-btn">Нет в наличии</div>';
		}else{
			echo '<div class="catalog-card__info-btn">В наличии</div>';
		}
	}else{
		'';
	}
    
}


//ДОБАВЛЯЕМ НАДПИСЬ В НАЛИЧИИ НА СТРАНИЦЕ МАГАЗИНА В КАРТОЧКЕ ТОВАРА и проверяем главная это страница или нет
add_action( 'woocommerce_single_product_summary', 'my_sold_out_loop_product', 4 );
function my_sold_out_loop_product() {
    global $product;
	if(!is_front_page()){
		if ( !$product->is_in_stock()) {
			echo '<div class="catalog-card__info-btn">Нет в наличии</div>';
		}else{
			echo '<div class="catalog-card__info-btn">В наличии</div>';
		}
	}else{
		'';
	}
    
}



// add_action( 'woocommerce_after_cart_item_name', 'truemisha_product_in_stock_in_cart', 25, 2 );
 //<!-- ВЫВОДИМ КНОПКУ В НАЛИЧИИ НА СТРАНИЦЕ КОРЗИНЫ ЧТОБЫ ОТОБРАЖАЛОСЬ НАДО ВКЛЮЧИТЬ УПАРВЛЕНИЕ ЗАПАСАМИ В АДМИНКЕ -->
function truemisha_product_in_stock_in_cart( $cart_item, $cart_item_key ) {
 
	$product = $cart_item[ 'data' ];
 
	if ( $product->backorders_require_notification() && $product->is_on_backorder( $cart_item['quantity'] ) ) {
		return;
	}

	echo wc_get_stock_html( $product );
 }
	







// ДИНАМИЧСКОЕ ОБНОВОЕНИЕ СЧЁТЧИКА ТОВАРОВ В ИКОНКЕ КОРЗИНЫ ЧЕРЕЗ ajax
add_filter('woocommerce_add_to_cart_fragments', function($fragments) {

    $fragments['.badge'] =                                                                          '<span class="badge">' . WC()->cart->get_cart_contents_count() . '</span>';
        
    return $fragments;
    });
	


//ОТКЛЮЧАЕМ ВСЁ ЧТО НЕ НУЖНО НА СТРАНИЦЕ ОДНОГО ТОВАРА
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30);
remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10);
remove_action('woocommerce_single_product_summary','woocommerce_template_single_meta', 40);
remove_action('woocommerce_single_product_summary','woocommerce_template_single_excerpt', 20);
remove_action('woocommerce_single_product_summary','woocommerce_template_single_price', 10);
remove_action('woocommerce_single_product_summary','woocommerce_template_single_sharing', 50);



//ВЫВОДИМ КРАТКОЕ ОПИСАНИЕ ТОВАРА НА СТРАНИЦЕ КОРЗИНЫ
add_filter( 'woocommerce_cart_item_name', 'add_excerpt_in_cart_item_name', 10, 3 );
function add_excerpt_in_cart_item_name( $item_name,  $cart_item,  $cart_item_key ){
    $excerpt = wp_strip_all_tags( get_the_excerpt($cart_item['product_id']), true );
    $excerpt_html = '
        <p class="cart-block__content-text" name="short-description">'.$excerpt.'</p>';

    return $item_name . $excerpt_html;
}



// СТРАНИЦА ОФОРМЛЕНИЯ ЗАКАЗА
// https://woocommerce.com/document/tutorial-customising-checkout-fields-using-actions-and-filters/
// УБИРАЕМ ПОЛЕ КРЫЛО,ПОДЪЕЗД,ЭТАЖ И НАЗВАНИЕ КОМПАНИИ
add_filter( 'woocommerce_default_address_fields' , function ( $fields ) {
	unset( $fields['address_2']);
	unset( $fields['company']);
	return $fields;
	
} );


//ТАК МОЖНО ПЕРЕИМЕНОВАТЬ ЗАГОЛОВКИ В ТАБАХ НА СТАНИЦЕ ТОВАРА
// add_filter( 'woocommerce_product_tabs', 'truemisha_rename_tabs', 25 );
 
// function truemisha_rename_tabs( $tabs ) {
 
// 	$tabs[ 'description' ][ 'title' ] = 'Про товар';
// 	$tabs[ 'reviews' ][ 'title' ] = 'Что думают люди';
// 	$tabs[ 'additional_information' ][ 'title' ] = 'Характеристики';
 
// 	return $tabs;
 
// }
 