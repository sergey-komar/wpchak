<?php
?>
<!DOCTYPE html>
<html lang="<?php language_attributes()?>">

<head>
  <meta charset="<?php bloginfo('charset')?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head();?>
</head>

<body <?php body_class();?>>
<?php wp_body_open();?>

  <header class="header">
    <div class="container">
      <div class="header__inner">
        <div class="header__top">
          <a href="#" class="logo logo-mobile">
            <img src="<?php echo get_template_directory_uri()?>/assets/images/home/logo.svg" alt="img">
          </a>
          <a href="#" class="header__top-item header__top-item--phone">+7 (963) 474-06-50</a>
          <a href="#" class="header__top-item header__top-item--addres">
            г. Челябинск, ул. Родькина, 13, помещение 202/2
          </a>
          <a href="#" class="header__top-item header__top-item--mail">chelcom@mail.ru</a>
          <a href="#" class="header__top-item header__top-item--time">Пн-Пт 9:00-17:00</a>
          <div class="nav-icon">
            <div class="nav-icon__middle"></div>
          </div>
        </div>
        <div class="header__center">
          <a href="#" class="logo">
            <img src="<?php echo get_template_directory_uri()?>/assets/images/home/logo.svg" alt="img">
          </a>
         
          <!-- ПОИСК -->
            <?php aws_get_search_form( true ); ?>
        
      
          <div class="header__center-wrapper">
            <a href="<?php echo wc_get_cart_url()?>" class="header__center-basket">
              <img src="<?php echo get_template_directory_uri()?>/assets/images/home/basket.svg" alt="img">
              <span class="badge">
                <?php echo WC()->cart->get_cart_contents_count();?>
              </span>
            </a>
            <a href="./favorites.html" class="header__center-heart">
              <img src="<?php echo get_template_directory_uri()?>/assets/images/home/heart.svg" alt="img">
            </a>
          </div>
        </div>

        <div class="header__bottom">
          <nav class="menu">
            <?php
              wp_nav_menu([
                'theme_location' => 'menu-header',
                'container' => '',
                'menu_class' => 'menu__list'
              ])
            ?>
          </nav>
        </div>
      </div>
    </div>
  </header>