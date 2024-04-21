<?php
	include 'db/Database.php';
	$con = new Database();
?>

<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Контакты пресс-службы КГЭУ</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

	
	<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<script src="https://kit.fontawesome.com/d4c3b7adb2.js" crossorigin="anonymous"></script>
		
	</head>
	<body>

	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-xs-5 text-right menu-1">
					<ul>
						<li><a href="work.html">Сотрудники</a></li>
						<li><a href="about.html">История</a></li>
					</ul>
				</div>
				<div class="col-xs-2 text-center">
					<div id="fh5co-logo"><a href="index.html">Основное</a></div>
				</div>
				<div class="col-xs-5 text-left menu-1">
					<ul>
						<li><a href="blog.html">Новости</a></li>
						<li class="active"><a href="contact.php">Контакты</a></li>
					</ul>
				</div>
			</div>
			
		</div>
	</nav>

	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/img_bg_2.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Наши контакты</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-md-push-0 animate-box">
					
					<div class="fh5co-contact-info">
						<h3>Контактная информация</h3>
						<ul>
							<li class="address">ул. Красносельская 51, <br> Казань, Республика Татарстан</li>
							<li class="phone"><a href="tel://8435194323">(843)5194323, 5194382</a></li>
							<li class="email"><a href="mailto:media@kgeu.ru">media@kgeu.ru</a></li>
							<li class="url"><a href="https://kgeu.ru/Home/About/159">О пресс-службе</a></li>
						</ul>
						<div class="footer__map">
							<iframe height="250px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2241.6476631881023!2d49.096635898338185!3d55.81671697611509!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x415952b53dca84cb%3A0xc8d7610da659fa75!2z0JrQk9Ct0KM!5e0!3m2!1sru!2sru!4v1684863984847!5m2!1sru!2sru"
        					style="border:0;" allowfullscreen="" loading="lazy"
       						referrerpolicy="no-referrer-when-downgrade">
        					</iframe>
    					</div>
					</div>

				</div>
				<div class="col-md-6 animate-box">
					<h3>Заполни обращение</h3>

					<?php 	
						if (isset($_POST['submit'])) {
							if ($con->Submit() === true) {
								echo '<div class="alert alert-success"> Обращение успешно создано! </div>';
							} else {
								echo '<div class="alert alert-danger">' . $con->Submit() . '</div>';
							}
						}
					?>

					<form method="post" id="form">
						<div class="row form-group">
							<div class="col-md-6">
								<input type="text" id="fname" name="fname" class="form-control" placeholder="Фамилия">
							</div>
							<div class="col-md-6">
								<input type="text" id="lname" name="lname" class="form-control" placeholder="Имя">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<input type="text" id="email" name="email" class="form-control" placeholder="Эл.почта">
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<input type="text" id="subject" name="subject" class="form-control" placeholder="Тема обращения">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<textarea name="message" id="message" name="message" cols="30" rows="10" class="form-control" placeholder="Ваше обращение"></textarea>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" name="submit" value="Submit" class="btn btn-primary">
						</div>

					</form>		
				</div>
			</div>
			
		</div>
	</div>

	<div id="fh5co-started">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Связь с сотрудниками</h2>
					<p>Чтобы связаться с нашими сотрудниками нажмите на кнопку.</p>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<form class="form-inline">
						<div class="col-md-6 col-md-offset-3 col-sm-6">
							<button type="submit" class="btn btn-default btn-block">Свяжиетсь с нами</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-2 col-sm-4 col-xs-6">
					<ul class="fh5co-footer-links">
						<li><a href="about.html">История</a></li>
						<li><a href="contact.php">Помощь</a></li>
						<li><a href="contact.php">Контакты</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6">
					<ul class="fh5co-footer-links">
						<li><a href="#">Отзывы</a></li>
						<li><a href="#">Справочник</a></li>
						<li><a href="#">Справочная</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6">
					<ul class="fh5co-footer-links">
						<li><a href="work.html">Команда</a></li>
						<li><a href="contact.php">Реклама</a></li>
						<li><a href="#">API</a></li>
					</ul>
				</div>
				<div class="col-md-4 col-sm-12 col-xs-12 fh5co-widget col-md-push-1">
					<h3>Немного о КГЭУ</h3>
					<p>Государственное высшее учебное заведение, которое является одним из трёх специализированных энергетических вузов в России, расположено в Казани. Университет ведёт подготовку специалистов в области энергетики, а также переподготовку кадров и повышение квалификации.</p>
					<p><a href="https://kgeu.ru/Section?idSection=1&idSectionMenu=3" target="_blank">Узнать больше</a></p>
				</div>
			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2024 Press center of KSPEU. All Rights Reserved.</small> 
						<small class="block">Designed by Artyom Ignatov. Images: <a href="https://kgeu.ru/Employee/List/159?idShablonMenu=6" target="_blank">KSPEU</a></small>
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="https://vk.com/kgeu_official" target="_blank"><i class="icon-vk"></i></a></li>
							<li><a href="https://t.me/kgeu_telegram" target="_blank"><i class="fa-brands fa-telegram"></i></a></li>
							<li><a href="https://ok.ru/kgeu.official" target="_blank"><i class="fa-brands fa-odnoklassniki"></i></a></li>
							<li><a href="https://kgeu.ru/" target="_blank"><i class="fa-solid fa-globe"></i></a></li>
							<i class="fa-solid fa-sparkle"></i>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Main -->
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>

	<script src="js/main.js"></script>
	</body>
</html>

