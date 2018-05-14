<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE HTML>
<html lang="<?= Yii::$app->language ?>">
<html>
  <head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
	
	<link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,700" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
  </head>
  <body>
  <?php $this->beginBody() ?>
    <div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="index.html"><img src="images/logo.png"></a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li></span><a href="index.html">Главная</a></li>
								<li class="has-dropdown">
									<a href="work.html">Услуги</a>
									<ul class="dropdown">
										<li><a href="#">Дизайн-проект</a></li>
										<li><a href="#">Ремонт квартир и домов</a></li>
										<li><a href="#">Изготовление корпусной мебели на заказ</a></li>
									</ul>
								</li>
								<li><a href="blog.html">Преимущества</a></li>
								<li><a href="about.html">О компании</a></li>
								<li><a href="contact.html">Контакты</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/img_bg_1.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2> Мы предлагаем разработать</h2>
				   					<h1>Дизайн Вашего интерьера</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/img_bg_2.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>Также мы предлагаем провести</h2>
				   					<h1>Ремонт Вашей квартиры</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/img_bg_3.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluids">
			   			<div class="row">
				   			<div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>Плюс ко всему подберем</h2>
				   					<h1>Мебель под интерьер</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   		
			  	</ul>
		  	</div>
		</aside>

	

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
				<div class="row margin-bottom36">
				    <div class="col-md-6 text-center ">
					    <a href="#"  id="trigger1">- Для чего нужен дизайн-проект?</a>
					</div>
					<div class="col-md-6 text-center animate-box">
					    <a href="#" id='trigger1'>- Какие преимущества у дизайн-проекта?</a>
					</div>
		        </div>
				<div id="appiarbox1" class="row appiar-box margin-bottom36">
				    <p>Цель дизайна интерьера – создание обстановки, в которой будет комфортно всем обитателям дома и их гостям. Ваши требования и пожелания должны быть основой для первоначальной планировки и функционального назначения помещений. Обращаясь к дизайнеру, Вы гарантируете результат, в котором будут объединены Ваши пожелания и современные тенденции, соблюдены требования к электрическим, строительным и ремонтно-отделочным работам. 
Поэтому первым шагом на пути к интерьеру мечты всегда является создание дизайн-проекта.</p>

				</div>
				<div class="row margin-bottom36">
				    <div class="col-md-4 margin-bottom36" id="left" >
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
						    <div class="btn">Заказать</div>
						</div>
					</div>
					</div>
					<div class="col-md-4  margin-bottom36" id="center">
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
						    <div class="btn">Заказать</div>
						</div>
					  </div>
					</div>
					<div class="col-md-4  margin-bottom36" id="right">
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
						    <div class="btn">Заказать</div>
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
				<div class="row margin-bottom36">
				    <div class="col-md-12 text-center ">
					    <p>Какой же сделать ремонт?<br>
           Ремонт – понятие растяжимое… Какой же сделать ремонт: базовый; капитальный; VIP ремонт с составлением дизайн-проекта?<br>
		   Тут, конечно, все зависит не только от Вашего желания, но и от Ваших финансовых возможностей, так как ремонт – дело очень расходное.
</p>
					</div>
					
		        </div>
				
				<div class="row margin-bottom36">
				    <div class="col-md-4 margin-bottom36" id="left" >
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
						    <div class="btn">Заказать</div>
						</div>
					</div>
					</div>
					<div class="col-md-4  margin-bottom36" id="center">
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
						    <div class="btn">Заказать</div>
						</div>
					  </div>
					</div>
					<div class="col-md-4  margin-bottom36" id="right">
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
						    <div class="btn">Заказать</div>
						</div>
					  </div>
					</div>
				</div>
		    </div>
		</div>
			
		<footer id="colorlib-footer" role="contentinfo">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-3 colorlib-widget">
						<h4>About Company</h4>
						<p>Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
						<p>
							<ul class="colorlib-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-3 col-md-push-1">
						<h4>Recent Blog</h4>
						<ul class="colorlib-footer-links">
							<li>
								<span>&mdash; 20 Jan, 2017</span>
								<a href="#">Results of Annual General Meeting</a>
							</li>
							<li>
								<span>&mdash; 19 Jan, 2017</span>
								<a href="#">Construction was awarded with “The Best Construction Company” prize</a>
							</li>
							<li>
								<span>&mdash; 18 Jan, 2017</span>
								<a href="#">New Saint Michael’s College Residence Hall Buzzing with Student Activity</a>
							</li>
						</ul>
					</div>
					<div class="col-md-3 col-md-push-1 colorlib-widget">
						<h4>Information</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#"><i class="icon-check"></i> Our Company</a></li>
								<li><a href="#"><i class="icon-check"></i> Certification</a></li>
								<li><a href="#"><i class="icon-check"></i> Our services</a></li>
								<li><a href="#"><i class="icon-check"></i> Career</a></li>
								<li><a href="#"><i class="icon-check"></i> Core Values</a></li>
								<li><a href="#"><i class="icon-check"></i> Company History</a></li>
								<li><a href="#"><i class="icon-check"></i> FAQ</a></li>
							</ul>
						</p>
					</div>

					<div class="col-md-3 col-md-push-1">
						<h4>Contact Info</h4>
						<ul class="colorlib-footer-links">
							<li>291 South 21th Street, <br> Suite 721 New York NY 10016</li>
							<li><a href="tel://1234567920"><i class="icon-phone"></i> + 1235 2355 98</a></li>
							<li><a href="mailto:info@yoursite.com"><i class="icon-envelope"></i> info@yoursite.com</a></li>
							<li><a href="http://luxehotel.com"><i class="icon-location4"></i> yourwebsite.com</a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center">
						<p>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
     					<small class="block">Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved.  <br>This template is made with <i class="icon-heart3" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></small>
    					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	

	



	<?php $this->endBody() ?>
  </body>
</html>
<?php $this->endPage() ?>