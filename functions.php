<?php

function chack_scripts() {
    wp_enqueue_style('checkout-style', get_template_directory_uri() . '/assets/css/main.min.css', [], '2023', 'all');
    
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/style.min.css', [], '2023', 'all');


    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.min.js', [], '2023', true);
}

add_action('wp_enqueue_scripts', 'chack_scripts');



function debug($data) {
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

function chack() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('woocommerce');
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox');
    add_theme_support( 'wc-product-gallery-slider' );

    register_nav_menus([
        'menu-header' => 'меню в шапке',
        'menu-footer' => 'меню в футере',
        'menu-category' => 'меню категорий'
    ]);

}
add_action('after_setup_theme', 'chack');



function eshoper_widgets_init() {
    register_sidebar(
        array(
            'name' => esc_html__( 'Sidebar', 'eshoper' ),
			'id' => 'sidebar-1',
            'before_title'  => '<h5 class="widgettitle">',
		    'after_title'   => "</h5>\n",
			'description' => esc_html__( 'Add widgets here.', 'eshoper' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s border-bottom mb-4 pb-4">',
			'after_widget' => '</div>',
        )
    );
}
add_action('widgets_init', 'eshoper_widgets_init');





// ПОДКЛЮЧЕНИЕ ИЗ ПАПКИ INC
require_once get_template_directory() . '/inc/woocommerce-hooks.php';
require_once get_template_directory() . '/inc/class-woostudy-menu-categorys.php';