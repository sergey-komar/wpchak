<?php
//СТРАНИЦА МАГАЗИНА

defined( 'ABSPATH' ) || exit;
?>
<?php get_header();?>
 <main class="main">
        <div class="breadcrumbs">
            <div class="container">
               
				<?php woocommerce_breadcrumb();?>
            </div>
        </div>

        <section class="catalog">
            <div class="container">
			<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
			<h1 class="woocommerce-products-header__title page-title catalog__title"><?php woocommerce_page_title(); ?></h1>
			<?php endif; ?>
                <div class="filter">
                    <div class="search__wrapper-filter">
                        Фильтры
                    </div>
                    <aside class="aside sidebar--mobile">
						
                        <?php
							wp_nav_menu([
								'theme_location' => 'menu-category',
								'container' => '',
								'menu_class' => 'aside__list',
								'walker' => new Chack_Menu_Categorys()
							])
						?>
                    </aside>
                </div>
                <div class="catalog__inner">
                    <aside class="aside">
						<?php
							wp_nav_menu([
								'theme_location' => 'menu-category',
								'container' => '',
								'menu_class' => 'aside__list',
								'walker' => new Chack_Menu_Categorys()
							])
						?>
                       
                       <?php
                        if(! is_active_sidebar('sidebar-1')){
                            return;
                        }
                        ?>
                         <?php dynamic_sidebar('sidebar-1');?>
                    </aside>

                    <div class="catalog-block">
                            <div class="catalog-block__item">
                                <div class="catalog-block__item-img">
                                    <img src="./images/catalog-img-1.png" alt="img">
                                </div>
                                <div class="catalog-block__content">
                                    <div class="catalog-block__content-title">
                                        Компенсаторы для водоснабжения
                                    </div>
                                    <a href="#" class="catalog-block__content-link">Односекционные</a>
                                    <a href="#" class="catalog-block__content-link">Односекционные</a>
                                    <a href="#" class="catalog-block__content-link">Односекционные</a>
                                    
                                    
                                    <div class="catalog-block__content-btn">
                                       
                                        <div class="catalog-block__content-hidden">
                                            <a href="#" class="catalog-block__content-link">
                                                Односекционные
                                            </a>                
                                            <a href="#" class="catalog-block__content-link">
                                                Односекционные
                                            </a>         
                                            <a href="#" class="catalog-block__content-link">
                                                Односекционные
                                            </a>
                                          
                                        </div>
                                        <div class="show">Ещё 8</div>
                                        <div class="hidden">свернуть</div>
                                    </div>
                                </div>
                            </div>
                            <div class="catalog-block__item">
                                <div class="catalog-block__item-img">
                                    <img src="./images/catalog-img-1.png" alt="img">
                                </div>
                                <div class="catalog-block__content">
                                    <div class="catalog-block__content-title">
                                        Компенсаторы для водоснабжения
                                    </div>
                                    <a href="#" class="catalog-block__content-link">Односекционные</a>
                                    <a href="#" class="catalog-block__content-link">Односекционные</a>
                                    <a href="#" class="catalog-block__content-link">Односекционные</a>
                                    
                                    
                                    <div class="catalog-block__content-btn">
                                       
                                        <div class="catalog-block__content-hidden">
                                            <a href="#" class="catalog-block__content-link">
                                                Односекционные
                                            </a>                
                                            <a href="#" class="catalog-block__content-link">
                                                Односекционные
                                            </a>         
                                            <a href="#" class="catalog-block__content-link">
                                                Односекционные
                                            </a>
                                          
                                        </div>
                                        Ещё 8
                                    </div>
                                </div>
                            </div>
                            <div class="catalog-block__item">
                                <div class="catalog-block__item-img">
                                    <img src="./images/catalog-img-1.png" alt="img">
                                </div>
                                <div class="catalog-block__content">
                                    <div class="catalog-block__content-title">
                                        Компенсаторы для водоснабжения
                                    </div>
                                    <a href="#" class="catalog-block__content-link">Односекционные</a>
                                    <a href="#" class="catalog-block__content-link">Односекционные</a>
                                    <a href="#" class="catalog-block__content-link">Односекционные</a>
                                    
                                    
                                    <div class="catalog-block__content-btn">
                                       
                                        <div class="catalog-block__content-hidden">
                                            <a href="#" class="catalog-block__content-link">
                                                Односекционные
                                            </a>                
                                            <a href="#" class="catalog-block__content-link">
                                                Односекционные
                                            </a>         
                                            <a href="#" class="catalog-block__content-link">
                                                Односекционные
                                            </a>
                                          
                                        </div>
                                        Ещё 8
                                    </div>
                                </div>
                            </div>
                            <div class="catalog-block__item">
                                <div class="catalog-block__item-img">
                                    <img src="./images/catalog-img-1.png" alt="img">
                                </div>
                                <div class="catalog-block__content">
                                    <div class="catalog-block__content-title">
                                        Компенсаторы для водоснабжения
                                    </div>
                                    <a href="#" class="catalog-block__content-link">Односекционные</a>
                                    <a href="#" class="catalog-block__content-link">Односекционные</a>
                                    <a href="#" class="catalog-block__content-link">Односекционные</a>
                                    
                                    
                                    <div class="catalog-block__content-btn">
                                       
                                        <div class="catalog-block__content-hidden">
                                            <a href="#" class="catalog-block__content-link">
                                                Односекционные
                                            </a>                
                                            <a href="#" class="catalog-block__content-link">
                                                Односекционные
                                            </a>         
                                            <a href="#" class="catalog-block__content-link">
                                                Односекционные
                                            </a>
                                          
                                        </div>
                                        Ещё 8
                                    </div>
                                </div>
                            </div>
                            <div class="catalog-block__item">
                                <div class="catalog-block__item-img">
                                    <img src="./images/catalog-img-1.png" alt="img">
                                </div>
                                <div class="catalog-block__content">
                                    <div class="catalog-block__content-title">
                                        Компенсаторы для водоснабжения
                                    </div>
                                    <a href="#" class="catalog-block__content-link">Односекционные</a>
                                    <a href="#" class="catalog-block__content-link">Односекционные</a>
                                    <a href="#" class="catalog-block__content-link">Односекционные</a>
                                    
                                    
                                    <div class="catalog-block__content-btn">
                                       
                                        <div class="catalog-block__content-hidden">
                                            <a href="#" class="catalog-block__content-link">
                                                Односекционные
                                            </a>                
                                            <a href="#" class="catalog-block__content-link">
                                                Односекционные
                                            </a>         
                                            <a href="#" class="catalog-block__content-link">
                                                Односекционные
                                            </a>
                                          
                                        </div>
                                        Ещё 8
                                    </div>
                                </div>
                            </div>
                            <div class="catalog-block__item">
                                <div class="catalog-block__item-img">
                                    <img src="./images/catalog-img-1.png" alt="img">
                                </div>
                                <div class="catalog-block__content">
                                    <div class="catalog-block__content-title">
                                        Компенсаторы для водоснабжения
                                    </div>
                                    <a href="#" class="catalog-block__content-link">Односекционные</a>
                                    <a href="#" class="catalog-block__content-link">Односекционные</a>
                                    <a href="#" class="catalog-block__content-link">Односекционные</a>
                                    
                                    
                                    <div class="catalog-block__content-btn">
                                       
                                        <div class="catalog-block__content-hidden">
                                            <a href="#" class="catalog-block__content-link">
                                                Односекционные
                                            </a>                
                                            <a href="#" class="catalog-block__content-link">
                                                Односекционные
                                            </a>         
                                            <a href="#" class="catalog-block__content-link">
                                                Односекционные
                                            </a>
                                          
                                        </div>
                                        Ещё 8
                                    </div>
                                </div>
                            </div>
                           
                           
                        </div>
                </div>
                   
                        
                
                    <div class="catalog-top">
                    <?php
                        if ( woocommerce_product_loop() ) {

                            /**
                             * Hook: woocommerce_before_shop_loop.
                             *
                             * @hooked woocommerce_output_all_notices - 10
                             * @hooked woocommerce_result_count - 20
                             * @hooked woocommerce_catalog_ordering - 30
                             */
                            do_action( 'woocommerce_before_shop_loop' );
                    ?>
                    </div>
                    <?php
                            woocommerce_product_loop_start();

                            if ( wc_get_loop_prop( 'total' ) ) {
                                while ( have_posts() ) {
                                    the_post();

                                    /**
                                     * Hook: woocommerce_shop_loop.
                                     */
                                    do_action( 'woocommerce_shop_loop' );

                                    wc_get_template_part( 'content', 'product' );
                                }
                            }

                            woocommerce_product_loop_end();

                            /**
                             * Hook: woocommerce_after_shop_loop.
                             *
                             * @hooked woocommerce_pagination - 10
                             */
                            do_action( 'woocommerce_after_shop_loop' );
                        } else {
                            /**
                             * Hook: woocommerce_no_products_found.
                             *
                             * @hooked wc_no_products_found - 10
                             */
                            do_action( 'woocommerce_no_products_found' );
                        }

                        /**
                         * Hook: woocommerce_after_main_content.
                         *
                         * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
                         */
                        do_action( 'woocommerce_after_main_content' );

                        /**
                         * Hook: woocommerce_sidebar.
                         *
                         * @hooked woocommerce_get_sidebar - 10
                         */
                        do_action( 'woocommerce_sidebar' );
                        ?>
                 
               
               
            </div>
        </section>
    </main>

<?php get_footer();?>
