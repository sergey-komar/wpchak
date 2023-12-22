<?php
/** 
 * Template Name: Главная
*/
?>
<?php get_header();?>
  <main class="main">
      <div class="slider-home">
        <div class="container">
          <div class="slider-home__inner">
            <div class="slider-home__wrapper">
              <div class="slider-home__item">
                <div class="slider-home__content">
                  <h1 class="slider-home__content-title">Задвижки</h1>
                  <div class="slider-home__content-text">
                    В ассортименте «Челябинской арматурной компании» – ряд моделей шланговых алюминиевых задвижек, которые используются для перекрытия потока агрессивных и неагрессивных, жидких и вязких сред, а также минеральных масел и нефтепродуктов. 
                  </div>
                  <a href="#" class="slider-home__content-btn btn">Смотреть задвижки</a>
                </div>
                <div class="slider-home__img">
                  <img src="<?php echo get_template_directory_uri()?>/assets/images/home/slider-home-img.png" alt="img">
                </div>
              </div>
            </div>
          
            <div class="slider-home__wrapper">
              <div class="slider-home__item">
                <div class="slider-home__content">
                  <h1 class="slider-home__content-title">Задвижки</h1>
                  <div class="slider-home__content-text">
                    В ассортименте «Челябинской арматурной компании» – ряд моделей шланговых алюминиевых задвижек, которые используются для перекрытия потока агрессивных и неагрессивных, жидких и вязких сред, а также минеральных масел и нефтепродуктов. 
                  </div>
                  <a href="#" class="slider-home__content-btn">Смотреть задвижки</a>
                </div>
                <div class="slider-home__img">
                  <img src="<?php echo get_template_directory_uri()?>/assets/images/home/slider-home-img.png" alt="img">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  
      <section class="category">
        <div class="container">
          <h2 class="category__title title">
            Категории товаров
          </h2>
       
        
            <!-- ВЫВОДИМ КАТЕГОРИИ -->
            <?php echo do_shortcode( '[product_categories hide_empty="0"]' ) ?>
          
            <!-- <div class="category-block__item category-block__item--last">
              <div class="category-block__content">
                <div class="category-block__item-title category-block__item-title--last">
                  Хотите найти конкретный товар
                </div>
                <div class="category-block__item-text">
                  Найдите его по поиску!
                </div>
                <form class="category-block__form">
                  <button class="category-block__form-btn">
                    <img src="./images/home/category-search.svg" alt="img">
                  </button>
                  <input type="text" class="category-block__form-input" placeholder="Найти...">
                </form>
              </div>
              <div class="category-block__item-img category-block__item-img--last">
                <img src="./images/home/category-basket.png" alt="img">
              </div>
            </div>  -->
           
          </div>
        </div>
      </section>
 
      <section class="goods">
        <div class="container">
          <h2 class="goods__title title">ТОВАРЫ</h2>
          <div class="goods-block">
            <!-- ВЫВОДИМ ТОВАРЫ 8 ШТУК -->
            <?php echo do_shortcode('[products limit="8"]');?>
          </div>
          <!-- ВЫВОДИМ ССЫЛКУ НА СТРАНИЦУ МАГАЗИНА -->
          <a href="<?php echo get_permalink( wc_get_page_id( 'shop' ) );?>" class="goods__link">Смотреть больше товаров</a>
        </div>
      </section>


      <section class="advantages">
        <div class="container">
          <div class="advantages-block">
            <div class="advantages-block__info">
              <div class="advantages-block__info-subtitle">Наши преимущества</div>
              <h2 class="advantages-block__info-title">Чем мы гордимся</h2>

              <p class="advantages-block__info-text">
                Благодаря современному оборудованию отечественного и зарубежного производства, квалифицированному персоналу и использованию инновационных технологий трубопроводная арматура, элементы трубопровода, задвижки, клапаны, вентили и другая продукция «Челябинской арматурной компании» выгодно отличается от других аналогичных товаров. 
              </p>
              <p class="advantages-block__info-text">
                Мы ценим время и деньги своих клиентов, поэтому предоставляем им качественные товары по приятным ценам. Для постоянных заказчиков действует гибкая система скидок, также есть специальные предложения и акции.
              </p>
            </div>

            <div class="advantages-block__content">
              <div class="advantages-block__content-item">
                <div class="advantages-block__img">
                  <img src="<?php echo get_template_directory_uri()?>/assets/images/home/advantages-icon-1.png" alt="img">
                </div>
                <div class="advantages-block__box">
                  <div class="advantages-block__box-title">Большой ассортимент</div>
                  <p class="advantages-block__box-text">
                    Мы изготавливаем изделия нестандартных форм и размеров по индивидуальным чертежам. 
                  </p>
                </div>

              </div>
              <div class="advantages-block__content-item">
                <div class="advantages-block__img">
                  <img src="<?php echo get_template_directory_uri()?>/assets/images/home/advantages-icon-2.png" alt="img">
                </div>
                <div class="advantages-block__box">
                  <div class="advantages-block__box-title">Высокое качество продукции</div>
                  <p class="advantages-block__box-text">
                    Контроль качества производится на всех этапах изготовления. Вся продукция сертифицирована, на неё предоставляется гарантия.
                  </p>
                </div>

              </div>
              <div class="advantages-block__content-item">
                <div class="advantages-block__img">
                  <img src="<?php echo get_template_directory_uri()?>/assets/images/home/advantages-icon-3.png" alt="img">
                </div>
                <div class="advantages-block__box">
                  <div class="advantages-block__box-title">Быстрая доставка</div>
                  <p class="advantages-block__box-text">
                    По Челябинску и области доставка может быть осуществлена в день поступления заказа, в другие регионы России и страны СНГ – от одного дня. 
                  </p>
                </div>

              </div>
              <div class="advantages-block__content-item">
                <div class="advantages-block__img">
                  <img src="<?php echo get_template_directory_uri()?>/assets/images/home/advantages-icon-4.png" alt="img">
                </div>
                <div class="advantages-block__box">
                  <div class="advantages-block__box-title">Круглосуточная поддержка</div>
                  <p class="advantages-block__box-text">
                    Обученный штат сотрудников ООО «ЧАК» может профессионально проконсультировать вас в любое время.
                  </p>
                </div>

              </div>
            </div>
          </div>
        </div>
      </section>


      <section class="special">
        <div class="container">
          <div class="special-block">
            <div class="special-block__content">
              <h3 class="special-block__content-title">
                Узнайте о наших специальных предложениях для вас. 
              </h3>
              <p class="special-block__content-text">
                Хотите получить коммерческое предложение быстрее? Позвоните нам 
                <span>+7 (999) 999-99-99</span>
              </p>
            </div>

            <form  class="special-block__form">
              <div class="special-block__form-title">
                Получить специальное предложение
              </div>
              <div class="special-block__form-input">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/home/special-user.png" alt="img">
                <input type="text" placeholder="Имя">
              </div>

              <div class="special-block__form-input">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/home/special-phone.png" alt="img">
                <input type="text" placeholder="Телефон">
              </div>

              <button class="special-block__form-btn btn">Оставить заявку</button>
              <p class="special-block__form-text">
                Отправляя заявку вы соглашаетесь на обработку персональных данных в соответствии с политикой конфиденциальности
              </p>
            </form>
          </div>
        </div>
      </section>

     
  </main>
<?php get_footer();?>