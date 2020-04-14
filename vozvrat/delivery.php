<?php
/*
Template Name: delivery
*/
?>

<?php get_header() ?>

<main class="container">
	<div class="col-md-8">
		<section class="delivery">
			<h2 class="delivery__main-title">Доставка и оплата товаров по городу Нижневартовск</h2>
			<div class="delivery__tabs-wr">
				<ul class="nav nav-pills" role="tablist">
					<li class="nav-item delivery__item">
						<a class="nav-link active nav-link__pickup" data-toggle="pill" href="#pickup">
						<img alt="Самовывоз" src="<?php bloginfo('template_url'); ?>/images/delivery/pickup.svg">
						<span class="nav-item__text">Самовывоз</span>
						</a>
					</li>
					<li class="nav-item delivery__item">
						<a class="nav-link nav-link__expressDel" data-toggle="pill" href="#expressDel">
							<img alt="Курьерская доставка" src="<?php bloginfo('template_url'); ?>/images/delivery/expressDel.svg">
							<span class="nav-item__text">Курьерская доставка</span>
						</a>
					</li>
					<li class="nav-item delivery__item">
						<a class="nav-link nav-link__otherCities" data-toggle="pill" href="#otherCities">
							<img alt="Доставка в другие города и регионы" src="<?php bloginfo('template_url'); ?>/images/delivery/otherCities.svg">
							<span class="nav-item__text"> Доставка в другие города и регионы</span>
						</a>
					</li>
				</ul>

				<div class="tab-content">
					<div id="pickup" class="container tab-pane active">
						<h3 class="delivery__title">Вы можете забрать товар самостоятельно из следующих точек выдачи заказа</h3>
						<p class="delivery__info__title">Адрес пункта выдачи заказов:</p>
						<address class="delivery__info">ТЦ Новый Гулливер, Индустриальная,<br> 46 ст1 Панель 14,<br> Нижневартовск</address>
						<p class="delivery__info">Ежедневно<time>10:00–19:00</time></p>
						<iframe class="delivery__map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1936.647354720702!2d76.53080154712323!3d60.96148913256016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x436d3e969bc39d61%3A0x1aa1c44d8205df95!2sDoor+Fair!5e0!3m2!1sen!2sua!4v1556979686744!5m2!1sen!2sua" width="100%" height="450" frameborder="0" allowfullscreen></iframe>
					</div>
					<div id="expressDel" class="container tab-pane fade">
						<h3 class="delivery__title">Доставку осуществляет собственная курьерская служба интернет магазина по предварительной договоренности по телефону с выяснением 	адреса и удобного для вас времени доставки</h3>
						<p class="delivery__info">Доставка бесплатна по Нижневартовску при заказе от 3000р.</p>
						<p class="delivery__info">Если заказ меньше, то цена доставки составит 450р.</p>
						<iframe class="delivery__map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62002.333624272236!2d76.46762977001956!3d60.94632274842855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x436d3ea933d05687%3A0xd611216bd7fa542d!2sNizhnevartovsk%2C+Khanty-Mansi+Autonomous+Okrug%2C+Russia!5e0!3m2!1sen!2sua!4v1556981650131!5m2!1sen!2sua" width="100%" height="450" frameborder="0" allowfullscreen></iframe>
					</div>
					<div id="otherCities" class="container tab-pane fade">
						<h3 class="delivery__title">Доставка товаров в регионы</h3>
						<p class="delivery__info">Бесплатная доставка до любой транспортной компании на заказы от 3000р.</p>
						<p class="delivery__info">Мы гарантируем сохранность груза</p>
						<p class="delivery__info">Отправка в течение 2-3 рабочих дней после оплаты счета</p>
						<p class="delivery__info">После отправки Вы получаете всю информацию о грузе: номер накладной, дату отправки, стоимость доставки.</p>
						<p class="delivery__info">Услуги транспортной компании оплачиваются отдельно покупателем, по факту получения груза</p>
						<p class="delivery__info">Стоимость грузоперевозки формируется исходя из веса и объема груза.</p>
						<img  class="delivery__map-img" alt="Карта" src="<?php bloginfo('template_url'); ?>/images/delivery/delivery_map.png">
					</div>
				</div>
			</div>
			<div class="delivery__payment-wr">
				<h3 class="delivery__title">Способы оплаты</h3>
		        <ul class="delivery__payment-list">
		          <li class="delivery__payment-mt">Заказ вы можете оплатить в наших розничных  магазинах любым <br> способам: карта, наличные, безналичный расчет</li>
		          <li class="delivery__payment-mt">Банковскими картами</li>
		          <li class="delivery__payment-mt">Безналичный перевод</li>
		          <li class="delivery__payment-mt">Яндекс деньги</li>
		        </ul> 
			</div>
			<div class="delivery__orderIns-wr">
				<h3 class="delivery__title">Как сделать заказ</h3>
				<div class="delivery__orderSteps-wr">
					<div class="delivery__orderStep">
		            	<img src="<?php bloginfo('template_url'); ?>/images/delivery/order/order-1.png" alt="Инструкция">
		            	<p>Нажмите на кнопку «Купить», товар добавится в корзину</p>
		          	</div>
		            <div class="delivery__orderStep">
		             	<img src="<?php bloginfo('template_url'); ?>/images/delivery/order/order-2.png" alt="Инструкция">
		            	<p>Выберите подходящий вам способ доставки</p>
		            </div>
		            <div class="delivery__orderStep">
		              	<img src="<?php bloginfo('template_url'); ?>/images/delivery/order/order-3.png" alt="Инструкция">
		             	<p>Выберите подходящий вам способ оплаты</p>
		            </div>
		            <div class="delivery__orderStep">
		              	<img src="<?php bloginfo('template_url'); ?>/images/delivery/order/order-4.png" alt="Инструкция">
		             	<p>Нажмите «Оформить», вам позвонит менеджер для подтверждения заказа</p>
		            </div>
		            <div class="delivery__orderStep">
		              	<img src="<?php bloginfo('template_url'); ?>/images/delivery/order/order-5.png" alt="Инструкция">
		             	<p>Получите заказ. Были рады принести Вам Свет.</p>
		           	</div>
				</div>
			</div>
			<div class="delivery__tips">
				<h3 class="delivery__title">Памятка покупателю</h3>
				<ul class="delivery__tips-list">
					<li>При получении покупки осмотрите упаковку на наличие повреждений и следов вскрытия. Затем осмотрите сам товар на предмет его целостности и комплектации;</li> 
					<li>Вы можете выбрать удобный вам временной интервал доставки в общении с менеджером, а также подходящее число доставки. В день доставки вы получите смс уведомление с телефоном курьера и его именем;</li>
					<li>Если нужно изменить время доставки, то за день Вам необходимо связаться с менеджером по телефону <nobr><a class="delivery__tilis-link" href="tel:8(800) 100-75-80">8(800) 100-75-80</a></nobr></li>
					<li>Перед доставкой, курьеры связываются с покупателями и договариваются о точном времени;</li>
					<li>Юридическим лицам для получения товара необходимо предоставить либо доверенность и паспорт лица, на которого выписана доверенность, либо печать организации. В противном случае, мы можем организовать повторную доставку, но она будет оплачиваться отдельно;</li>
					<li>Просьба заранее заказывать пропуска, если доставка осуществляется на закрытые территории.</li>
				</ul>
		    </div>
		    <div class="delivery__refund">
		        <h3 class="delivery__title">Вовзрат светильника</h3>
		        <div class="delivery__refund-instr">
		            <div class="delivery__refund-item">
		                <img src="<?php bloginfo('template_url'); ?>/images/delivery/refund/refund-1.png" alt="Инструкция">
		                <p>Заполнить форму Заявления</p> 
		            </div>
		            <div class="delivery__refund-item">      
		                <img src="<?php bloginfo('template_url'); ?>/images/delivery/refund/refund-2.png" alt="Инструкция">
		                <p>Отправить отсканированное Заявления по электронной почте</p> 
		            </div>
		            <div class="delivery__refund-item">
		                <img src="<?php bloginfo('template_url'); ?>/images/delivery/refund/refund-3.png" alt="Инструкция">
		                <p>Принимается решение по возврату (в течение 2-х дней)</p> 
		            </div>
		            <div class="delivery__refund-item">
		                <img src="<?php bloginfo('template_url'); ?>/images/delivery/refund/refund-4.png" alt="Инструкция">
		                <p>Отправляется уведомление клиенту по электронной почте о решении</p>  
		            </div>
		            <div class="delivery__refund-item">
		                <img src="<?php bloginfo('template_url'); ?>/images/delivery/refund/refund-5.png" alt="Инструкция">
		                <p>Клиент доставляет товар на склад в транспортную компанию</p> 
		            </div>
		            <div class="delivery__refund-item">
		                <img src="<?php bloginfo('template_url'); ?>/images/delivery/refund/refund-6.png" alt="Инструкция">
		                <p>В течение 10 дней после приемки товара осуществляется возврат денежных средств Покупателю</p>
		            </div>     
		        </div>
		       <a class="delivery__refund-link" href="<?php echo get_page_link( 3447 ); ?>">Подробнее</a>
		    </div>
		</section>
	</div>

</main>

<?php get_footer() ?>