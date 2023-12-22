<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- КАТЕГОРИИ НА ГЛАВНОЙ СТРАНИЦЕ -->
<!-- ПРОВЕРЯЕМ ГЛАВНАЯ ЭТО СТРАНИЦА ИЛИ НЕТ ЕСЛИ НЕТ ТО ДОБАВЛЯЕМ ДРУГИЕ КЛАССЫ -->
<?php $product_class = is_front_page() ? 'category-block' : 'catalog__wrapper'?>
    <div <?php wc_product_class( $product_class, $product ); ?>>

   
