<?php
?>
  <footer class="footer">
    <div class="footer__img">
        <img src="<?php echo get_template_directory_uri()?>/assets/images/home/footer-img.png" alt="img">
    </div>
    <div class="footer__bg">
        <div class="container">
        <div class="footer__inner">
            <div class="footer__item footer__item--logo">
            <a href="#" class="footer__logo">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/home/footer-logo.png" alt="img">
            </a>
            <p class="footer__text">
                Политика конфиденциальности
            </p>
            </div>

            <div class="footer__wrapper">
            <div class="footer__item">
                <a href="#" class="footer__item-text footer__item-text--phone">
                +7 (963) 474-06-50
                </a>
                <a href="#" class="footer__item-text footer__item-text-addres">
                chelcom@mail.ru
                </a>
                <a href="#" class="footer__item-text footer__item-text--mail">
                г. Челябинск, ул. Родькина, 13, помещение 202/2
                </a>
                <a href="#" class="footer__item-text footer__item-text--time">
                Пн-Пт 9:00-17:00
                </a>
            </div>

            <div class="footer__item">
                <ul class="footer__menu">
                <li>
                    <a href="#">О нас</a>
                </li>
                <li>
                    <a href="#">Доставка и оплата</a>
                </li>
                <li>
                    <a href="#">Каталог</a>
                </li>
                <li>
                    <a href="#">Задвижки</a>
                </li>
                <li>
                    <a href="#">Клапаны </a>
                </li>
                <li>
                    <a href="#">Контакты</a>
                </li>
                </ul>
            </div>
            </div>
        
        </div>
        </div>
    </div>
    </footer>


    <script>
    jQuery( function( $ ) {
      var delay;
 
      // Вешаем "слушателя".
      $( '.woocommerce' ).on( 'change', 'input.qty, .plus, .minus', function() {
  
        if ( undefined !== delay ) {
          clearTimeout( delay );
        }
  
        // Делаем задержку в полсекунды, чтобы не генерить 
        // лишние запросы на сервер.
        delay = setTimeout(
          function() {
            // Кликаем на кпоку обновления корзины.
            $( '[name="update_cart"]' ).trigger( 'click' );
          },
          300
        );
  
      } );
    } );
	
	

jQuery(document).ready(function($) {
    $('body').on('added_to_cart',function(e,data) {
        //alert('Added ' + data['div.widget_shopping_cart_content']);
        if ($('#hidden_cart').length == 0) { //add cart contents only once
            //$('.added_to_cart').after('<a href="#TB_inline?width=600&height=550&inlineId=hidden_cart" class="thickbox">View my inline content!</a>');
            $(this).append('<a href="#TB_inline?width=300&height=550&inlineId=hidden_cart" id="show_hidden_cart" title="<h2>Cart</h2>" class="thickbox" style="display:none"></a>');
            $(this).append('<div id="hidden_cart" style="display:none">'+data['div.widget_shopping_cart_content']+'</div>');
        }
        $('#show_hidden_cart').click();
    });
});
    </script>

  <?php wp_footer();?>
</body>

</html>