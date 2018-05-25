<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use app\components\getPhotos;
use app\components\getVideos;

$this->title = 'URUSOV-STROY | Ремонт квартир, дизайн интерьера, Нальчик ';
?>

        <nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="<?=Yii::$app->homeUrl?>"><img src='<?=Yii::$app->homeUrl?>/images/logo.png'></a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li class="has-dropdown">
									<a href="#">Услуги</a>
									<ul class="dropdown">
										<li><a href="#design-project" id="adesignproject">Дизайн-проект</a></li>
										<li><a href="#remont-project" id="aremontproject">Ремонт квартир и домов</a></li>
										<li><a href="#">Изготовление корпусной мебели на заказ</a></li>
									</ul>
								</li>
								<li><a href="#advantages" id="aadvantages">Преимущества</a></li>
								<li><a href="#" id="avideorow">Видео</a></li>
								<li><a href="#photorow" id="aphotorow">Фото</a></li>
								<li><a href="#colorlib-footer" id="colorlibfooter">Контакты</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<div id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(<?=Yii::$app->homeUrl?>/images/img_bg_1.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>Мы предлагаем разработать</h2>
				   					<h1>Дизайн Вашего интерьера</h1>
									 <a class="btn" data-toggle="modal" data-target="#myModal3">Заказать звонок</a>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(<?=Yii::$app->homeUrl?>/images/img_bg_2.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>Также мы предлагаем провести</h2>
				   					<h1>Ремонт Вашей квартиры</h1>
									<a class="btn" data-toggle="modal" data-target="#myModal3">Заказать звонок</a>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(<?=Yii::$app->homeUrl?>/images/img_bg_3.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>Плюс ко всему подберем</h2>
				   					<h1>Мебель под интерьер</h1>
									<a class="btn" data-toggle="modal" data-target="#myModal3">Заказать звонок</a>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   		
			  	</ul>
		  	</div>
		</div>

	
        <div id="">
		    <div class="container">
			    <div class="row margin-bottom72">
				     <div class="col-md-4 text-center">
					     <img src="<?=Yii::$app->homeUrl?>/images/urusov-stroy.jpg">
					 </div>
				     <div class="col-md-8 text-left">
		<p>
		    Обсуждая ремонт нашего жилья, мы часто сталкиваемся с выражениями «ремонт под ключ» или «комплексный ремонт», подразумевающие как бы некий вариант проведения ремонтно-отделочных работ.
Компания «URUSOV-STROY» предлагает проведение комплексных мероприятий, которые позволяют полностью обустроить любое помещение, а заодно и реализовать дизайнерские идеи, которые становятся основой качества и комфортного проживания в новом доме.
На сегодняшний день у нас есть свои дизайнеры и бригады для ремонтных работ. Ремонт от     компании «URUSOV-STROY» выгоден для Вас – заказывая дизайн-проект и его реализацию, Вы получаете полный сервис, начиная с разработки проекта, комплектации его по выгодным ценам, заканчивая профессиональным воплощением его в жизнь. Исключены ошибки в проектировании, так как дизайнеры работают в тесной связке с техническим отделом.

		</p>
		             </div>
		        </div>
		    </div>
		</div>
        <div id="design-project">
		    <div class="container">
				<div class="row margin-bottom36">
				    <div class="col-md-12 text-center">
					    <h3>Наша компания «URUSOV-STROY» предлагает следующие услуги:</h3>
					</div>
		        </div>
				<div class="row">
				    <div class="col-md-12 text-center animate-box">
					    <h1>Дизайн-проект</h1>
					</div>
		        </div>
				<div class="row margin-bottom72">
				    <div class="col-md-6 text-center ">
					    <a class="trigger" onclick="appiarbox1()">- Для чего нужен дизайн-проект?</a>
					</div>
					<div class="col-md-6 text-center ">
                        <a class="trigger" onclick="appiarbox2()">- Какие преимущества у дизайн-проекта?</a>						
		            </div>
                </div>
<div class="row appbox margin-bottom72" id="appbox1" style="display:none"><strong>Цель дизайна интерьера</strong> – создание обстановки, в которой будет комфортно всем обитателям дома и их гостям. Ваши требования и пожелания должны быть основой для первоначальной планировки и функционального назначения помещений. Обращаясь к дизайнеру, Вы гарантируете результат, в котором будут объединены Ваши пожелания и современные тенденции, соблюдены требования к электрическим, строительным и ремонтно-отделочным работам. 
Поэтому первым шагом на пути к интерьеру мечты всегда является создание дизайн-проекта.<br><br>
<a class="triggerw liless" onclick="hidebox12()">Свернуть<span class="icon-arrow-up2"></span></a>
</div>							    
<div class="row appbox margin-bottom72" id="appbox2" style="display:none">
<strong>Экономия денег.</strong> Вы будете иметь представление о стоимости всех необходимых работ и избавите себя от незапланированных затрат в будущем.<br>
<strong>Готовый визуальный образ.</strong> У Вас появляется возможность увидеть интерьер своей будущей квартиры и понять, насколько точно она соответствует Вашим вкусовым предпочтениям.<br>
<strong>Эффективность и безопасность.</strong> Специалисты предоставляют Вам пакет технической документации, в который входят схемы перепланировки, электрообеспечения квартиры, зонирования и т.д. Все это позволит провести ремонтные работы более эффективно, предоставит Вам возможность безопасной эксплуатации квартиры, после завершения в ней ремонта.<br><br>
<a class="triggerw liless" onclick="hidebox12()">Свернуть<span class="icon-arrow-up2"></span></a>
</div>
				
				<div class="row margin-bottom36">
				    <div class="col-md-4 margin-bottom72" id="left" >
				    <div class="service-block">					
				       <div class="service-body">					
					    <h3 class="text-center">Технический дизайн-проект</h3>
                            <ul>
							    <li>Обмерный план;</li>
							    <li>2 варианта планировки;</li>
							    <li>План демонтажа перегородок;</li>
							    <li>План монтажа перегородок;</li>
							    <li>План расстановки мебели;</li>
							    <li>План пола;</li>
							    <li>План потолка;</li>
								<a id="tech-adropdown" class="limore" onclick="techdown()">Подробнее</a>
								<span id="tech-dropdown" style="display:none">	
							    <li>План осветительных приборов;</li>
							    <li>План розеток;</li>
							    <li>План выключателей;</li>
							    <li>Планы корпусной мебели, изготавливаемой на заказ;</li>
							    <li>Развертки стен.</li>
								<a class="liless" onclick="techdown()">Свернуть</a>
							</ul>
							
					    </div>
						<div class="service-footer">
						<h2 class="price text-center">от 500р. м.кв.</h2>
							<a class="btn" data-toggle="modal" data-target="#myModal">Заказать</a>
						</div>
					</div>
					</div>
					<div class="col-md-4  margin-bottom72" id="center">
					  <div class="service-block">
                      <div class="service-body">					  
					    <h3 class="text-center">Полный дизайн-проект</h3>
                            <ul>
							    <li>Обмерный план;</li>
							    <li>2 варианта планировки;</li>
							    <li>План демонтажа перегородок;</li>
							    <li>План монтажа перегородок;</li>
							    <li>План расстановки мебели;</li>
							    <li>План пола;</li>
							    <li>План потолка;</li>
								<a id="full-adropdown" class="limore" onclick="fulldown()">Подробнее</a>
								<span id="full-dropdown" style="display:none">	
							    <li>План осветительных приборов;</li>
							    <li>План розеток;</li>
							    <li>План выключателей;</li>
							    <li>Планы корпусной мебели, изготавливаемой на заказ;</li>
							    <li>Развертки стен;</li>
							    <li>3D визуализация.</li>
								<a class="liless" onclick="fulldown()">Свернуть</a>
							</ul>
							

					  </div>
					  <div class="service-footer">
					  <h2 class="price text-center">от 1000р. м.кв.</h2>
						    <a class="btn" data-toggle="modal" data-target="#myModal">Заказать</a>
						</div>
					  </div>
					</div>
					<div class="col-md-4  margin-bottom72" id="right">
					  <div class="service-block">
                      <div class="service-body">					  
					    <h3 class="text-center">VIP дизайн-проект</h3>
                            <ul>
							    <li>Обмерный план;</li>
							    <li>2 варианта планировки;</li>
							    <li>План демонтажа перегородок;</li>
							    <li>План монтажа перегородок;</li>
							    <li>План расстановки мебели;</li>
							    <li>План пола;</li>
							    <li>План потолка;</li>
								<a id="dvip-adropdown" class="limore" onclick="dvipdown()">Подробнее</a>
								<span id="dvip-dropdown" style="display:none">	
							    <li>План осветительных приборов;</li>
							    <li>План розеток;</li>
							    <li>План выключателей;</li>
							    <li>Планы корпусной мебели, изготавливаемой на заказ;</li>
							    <li>Развертки стен со спецификацией отделочных материалов;</li>
							    <li>3D визуализация;</li>
							    <li>Предоставление сметы с ссылками на материалы и мебель;</li>
							    <li>Авторский надзор.</li>
								<a class="liless" onclick="dvipdown()">Свернуть</a>
							</ul>
							
					  </div>
					   <div class="service-footer">
					   <h2 class="price text-center">от 1500р. м.кв.</h2>
						    <a class="btn" data-toggle="modal" data-target="#myModal">Заказать</a>
						</div>
					  </div>
					</div>
				</div>
		    </div>
			
		</div>
        

        <div id="remont-project">
		    <div class="container">
				<div class="row margin-bottom36">
		        </div>
				<div class="row">
				    <div class="col-md-12 text-center animate-box">
					    <h1>Ремонт квартир и домов</h1>
					</div>
		        </div>
				<div class="row margin-bottom72">
				    <div class="col-md-12 text-center">
					    <a class="trigger" onclick="appiarbox3()">- Какой же сделать ремонт?</a>
					</div>
                </div>
				<div class="row">
				    <div class="col-md-12">						
						<div class="row appbox margin-bottom72" id="appbox3" style="display:none">
           <strong>Ремонт – понятие растяжимое…</strong> Какой же сделать ремонт: базовый; капитальный; VIP ремонт с составлением дизайн-проекта?<br>
		   Тут, конечно, все зависит не только от Вашего желания, но и от Ваших финансовых возможностей, так как ремонт – дело очень расходное.
		   <a class="triggerw liless" onclick="hidebox3()">Свернуть<span class="icon-arrow-up2"></span></a>
		   </div>
</p>
					</div>
					
		        </div>
				
				<div class="row margin-bottom72">
				    <div class="col-md-4 margin-bottom72" id="left" >
				    <div class="service-block">					
				       <div class="service-body">					
					    <h3 class="text-center">Базовый ремонт</h3>
                            <ul>
							    <li>Технический дизайн-проект;</li>
							    <li>Электропроводка;</li>
							    <li>Установка системы вентиляции;</li>
							    <li>Укладка полов;</li>
							    <li>Малярные работы;</li>
							    <li>Натяжные потолки;</li>
							    <li>Укладка плитки с декором;</li>
								<a id="base-adropdown" class="limore" onclick="basedown()">Подробнее</a>
								<span id="base-dropdown" style="display:none">	
							    <li>Поклейка и покраска обоев;</li>
							    <li>Установка межкомнатных дверей с доборами.</li>
								<a class="liless" onclick="basedown()">Свернуть</a>
							</ul>
							
					    </div>
						<div class="service-footer">
						<h2 class="price text-center">от 4000р. м.кв.</h2>
						    <a class="btn" data-toggle="modal" data-target="#myModal2">Заказать</a>
						</div>
					</div>
					</div>
					<div class="col-md-4  margin-bottom72" id="center">
					  <div class="service-block">
                      <div class="service-body">					  
					    <h3 class="text-center">Капитальный ремонт</h3>
                            <ul>
							    <li>Технический дизайн-проект;</li>
							    <li>Демонтаж;</li>
							    <li>Монтаж перегородок;</li>
							    <li>Электропроводка;</li>
							    <li>Трубы отопления;</li>
							    <li>Водоснабжение;</li>
							    <li>Установка системы вентиляции;</li>
								<a id="cap-adropdown" class="limore" onclick="capdown()">Подробнее</a>
								<span id="cap-dropdown" style="display:none">	
							    <li>Система «теплый пол»;</li>
							    <li>Стяжка полов;</li>
							    <li>Укладка полов;</li>
							    <li>Выравнивание стен и потолков;</li>
							    <li>Монтаж потолочных конструкций из ГКЛ;</li>
							    <li>Укладка плитки с декором;</li>
							    <li>Покраска стен и потолка;</li>
							    <li>Установка межкомнатных дверей с доборами;</li>
							    <li>Оснащение интерьера мебелью;</li>
							    <li>Уборка квартиры;</li>
								<a class="liless" onclick="capdown()">Свернуть</a>
							</ul>
							

					  </div>
					  <div class="service-footer">
					  <h2 class="price text-center">от 6500р. м.кв.</h2>
						     <a class="btn" data-toggle="modal" data-target="#myModal2">Заказать</a>
						</div>
					  </div>
					</div>
					<div class="col-md-4  margin-bottom72" id="right">
					  <div class="service-block">
                      <div class="service-body">					  
					    <h3 class="text-center">VIP ремонт</h3>
                            <ul>
							    <li>Технический дизайн-проект;</li>
							    <li>Демонтажные и монтажные работы;</li>
							    <li>Полная замена электропроводки;</li>
							    <li>Замена труб водоснабжения, отопления;</li>
							    <li>Установка системы вентиляции;</li>
								<a id="vip-adropdown" class="limore" onclick="vipdown()">Подробнее</a>
								<span id="vip-dropdown" style="display:none">
                                <li>Установка системы «теплый пол»;</li>
								<li>Выравнивание пола (стяжка);</li>							    
							    <li>Укладка художественного паркета, массивной доски и т.д.;</li>
							    <li>Выравнивание стен и потолков;</li>
							    <li>Монтаж многоуровневых потолочных конструкций из ГКЛ;</li>
							    <li>Укладка плитки с декором, мозаики;</li>
							    <li>Облицовка декоративной штукатуркой;</li>
							    <li>Покраска стен и потолков;</li>
							    <li>Установка межкомнатных дверей с доборами;</li>
							    <li>Оснащение интерьера мебелью;</li>
							    <li>Декорирование интерьера;</li>
							    <li>Уборка квартиры;</li>
								<a class="liless" onclick="vipdown()">Свернуть</a>
								</span>
							</ul>
							
					  </div>
					   <div class="service-footer">
					   <h2 class="price text-center">от 8500р. м.кв.</h2>
						     <a class="btn" data-toggle="modal" data-target="#myModal2">Заказать</a>
						</div>
					  </div>
					</div>
				</div>
		    </div>
		</div>
				
			<div class="videorow" id="videorow">			
		        <?=getVideos::getLinks()?>
		    </div>
         <div id="advantages">
		    <div class="container">
				<div class="row margin-bottom72">
		        </div>
				<div class="row">
				    <div class="col-md-12 text-center animate-box">
					    <h1>Наши преимущества</h1>
					</div>
		        </div>
				<div class="row margin-bottom72">
				<ul class="liadvant">
				<li><i class="icon-check"></i>Работаем без предоплаты</li>
                <li><i class="icon-check"></i>Весь процесс работы берем на себя: от дизайн-проекта до вывоза мусора.</li>
                <li><i class="icon-check"></i>Работы на объекте выполняются узкоспециализированными специалистами</li>
                <li><i class="icon-check"></i>Четкое соблюдение сроков</li>
                <li><i class="icon-check"></i>Онлайн трансляция ремонта</li>
                <li><i class="icon-check"></i>Фото-отчет с объекта каждые 2-3 дня</li>
                <li><i class="icon-check"></i>акупка материалов</li>
                <li><i class="icon-check"></i>Заключение официального договора</li>
				</ul>

				</div>
			</div>
		 </div>
		 <div class="photorow margin-bottom72" id="photorow">			
		        <?=getPhotos::getLinks()?>
		    </div>
		<footer id="colorlib-footer" role="contentinfo">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-4 colorlib-widget">
						<h4>Мы в соцсетях</h4>
						<p>Присоединяйтесь к нам в соцсетях и будьте в курсе новостей!</p>
						<p>
							<ul class="colorlib-social-icons">
								<li><a href="https://www.instagram.com/urusov_remont_design/" target="_blank"><i class="icon-instagram"></i></a></li>
								<li><a href="https://vk.com/id467122044" target="_blank"><i class="icon-vk"></i></a></li>
								<li><a href="https://www.facebook.com/%D0%A0%D0%B5%D0%BC%D0%BE%D0%BD%D1%82-%D0%9A%D0%B2%D0%B0%D1%80%D1%82%D0%B8%D1%80-%D0%98%D0%BD%D1%82%D0%B5%D1%80%D1%8C%D0%B5%D1%80-%D0%94%D0%B8%D0%B7%D0%B0%D0%B9%D0%BD-2376096705749398/" target="_blank"><i class="icon-facebook2"></i></a></li>

							</ul>
						</p>
					</div>
					
					<div class="col-md-4  col-md-push-1 colorlib-widget">
						<h4>Информация</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#" id="adesignproject"><i class="icon-check"></i> Услуги</a></li>
								<li><a href="#" id="aadvantages"><i class="icon-check"></i> Преимущества</a></li>
								<li><a href="#" id="avideorow"><i class="icon-check"></i> Видео</a></li>
								<li><a href="#" id="aphotorow"><i class="icon-check"></i> Фото</a></li>

							</ul>
						</p>
					</div>
					
							

					<div class="col-md-4 col-md-push-1">
						<h4>Контакты</h4>
						<ul class="colorlib-footer-links">
							<li><a href="tel://1234567920"><i class="icon-mobile2"></i> + 7 (929) 885 75 75</a></li>
							<li><a href="mailto:info@yoursite.com"><i class="icon-mail2"></i> urusovstroy@mail.ru</a></li>							
						</ul>
					</div>
				
			</div>
		</footer>
<?php
echo newerton\fancybox\FancyBox::widget([
    'target' => 'a[rel=fancybox]',
    'helpers' => true,
    'mouse' => true,
    'config' => [
        'maxWidth' => '90%',
        'maxHeight' => '90%',
        'playSpeed' => 7000,
        'padding' => 10,
        'fitToView' => false,
        'width' => '70%',
        'height' => '70%',
        'autoSize' => false,
        'closeClick' => false,
        'openEffect' => 'elastic',
        'closeEffect' => 'elastic',
        'prevEffect' => 'elastic',
        'nextEffect' => 'elastic',
        'closeBtn' => false,
        'openOpacity' => true,
        'helpers' => [
            'title' => ['type' => 'inner'],
            'buttons' => false,
            'thumbs' => false,
            'overlay' => [
                'css' => [
                    'background' => 'rgba(0, 0, 0, 0.8)',
                ]
            ]
        ],
    ]
]);
?>	    		