<?php
//ТАБЫ НА СТРАНИЦЕ ТОВАРА
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<div class="tabs">
	<div class="tabs__title">О товаре</div>

	<div class="tabs__inner">
	<div class="tabs__item">
		<button class="tabs__item-btn active">Характеристики:</button>
		<div class="tabs__content">
		<div class="tabs__info">
			<?php if(have_rows('harakteristiki_tovara')) : while(have_rows('harakteristiki_tovara')) : the_row();?>
			<div class="tabs__desc">
				<div class="tabs__desc-title">
					<?php the_sub_field('harakteristiki_tovara_zagolovok');?>
				</div>
				<div class="tabs__desc-text">
					<?php the_sub_field('harakteristiki_tovara_tekst');?>
				</div>
			</div>
			<?php endwhile; endif;?>
		</div>
	</div>
	</div>

	<div class="tabs__item">
		<button class="tabs__item-btn tabs__item-btn--desc">Описание</button>
		<div class="tabs__content">
			<?php the_content();?>
	</div>
	</div>
	</div>

	<div class="product-delivery">
		<div class="product-delivery__title">Доставка и оплата</div>
		<p class="product-delivery__text">
			ООО «Челябинская арматурная компания» сотрудничает с юридическими и частными лицами. Продукция отпускается как оптом, так и в розницу.
		</p>

		<div class="product-delivery__block">
			<div class="product-delivery__item">
				<div class="product-delivery__item-title">Оплата товара</div>
				<p class="product-delivery__item-text">
					По условиям ООО «ЧАК», приобретение продукции возможно как по полной, так и по частичной предоплате. Постоянные клиенты, а также заказчики крупных партий трубопроводной и запорной арматуры могут рассчитывать на скидку от компании.
				</p>
				<p class="product-delivery__item-text">
					Для большего удобства расчет проводится как наличными средствами, так и по безналу. Доставка в стоимость не входит и оплачивается дополнительно.
					На всю продукцию предоставляется гарантия сроком до полутора лет с момента отгрузки. Если вы получили некачественный товар, компания гарантирует его замену в течение месяца.
				</p>
			</div>
			<div class="product-delivery__item">
				<div class="product-delivery__item-title">Получение товара и доставка</div>
				<p class="product-delivery__item-text">
					Есть два способа получения товара – самовывоз и доставка транспортной компанией.
				</p>
				<p class="product-delivery__item-text">
					В первом случае продукцию можно забрать с нашего склада в рабочие часы в будни.
					Если вы находитесь в другом регионе или за пределами РФ, наши сотрудники организуют доставку любой транспортной компанией, на ваш выбор. Доставка до терминала ТК бесплатная, расходы на дальнейшую транспортировку груза оплачивает заказчик.
				</p>
			</div>
			
		</div>
	</div>

	
</div>


