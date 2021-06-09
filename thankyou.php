<?php session_start();?>

<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Enya - современный и креативный веб-дизайн</title>
		<link rel="preconnect" href="https://fonts.gstatic.com" />
		<link
			href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Roboto+Condensed:wght@700&family=Roboto:wght@500&display=swap"
			rel="stylesheet"
		/>
		<link rel="stylesheet" href="css/swiper-bundle.min.css"/>
		<link rel="stylesheet" href="css/jquery.fancybox.min.css" />
		<link rel="stylesheet" href="css/style.css" />
	</head>
	<body>
		<header class="navbar">
			<div class="navbar-menu navbar-menu--fixed">
				<div class="navbar-menu__fixed-wrapper">
					<a href="index.html" class="logo navbar__logo">
						<img src="img/logo.svg" alt="Logo: Enya" class="logo__image" />
					</a>					
				</div>
			</div>
			<div class="container">
				<div class="navbar-menu">
					<a href="index.html" class="logo navbar__logo">
						<img src="img/logo.svg" alt="Logo: Enya" class="logo__image" />
					</a>
					<div class="navbar-menu__wrapper">
						<ul class="navbar-menu__list">
							<li class="navbar-menu__item">
								<a href="#" class="navbar-menu__link">Рекомендации</a>
							</li>
							<li class="navbar-menu__item">
								<a href="#" class="navbar-menu__link">Книги</a>
							</li>
							<li class="navbar-menu__item">
								<a href="#" class="navbar-menu__link">Блог</a>
							</li>
						</ul>
						<button class="menu-button navbar__menu-button">
							<span class="menu-button__line"></span>
							<span class="menu-button__line"></span>
							<span class="menu-button__line"></span>
						</button>						
					</div>
					<!-- /.navbar-menu__wrapper -->
				</div>
				<!-- /.navbar-menu -->
				<div class="navbar-menu navbar-menu--mobile">
					<ul class="navbar-menu__mobile-active">
						<li class="navbar-menu__item-mobile">
							<a href="#" class="navbar-menu__link-mobile">Рекомендации</a>
						</li>
						<li class="navbar-menu__item-mobile">
							<a href="#" class="navbar-menu__link-mobile">Книги</a>
						</li>
						<li class="navbar-menu__item-mobile">
							<a href="#" class="navbar-menu__link-mobile">Блог</a>
						</li>						
					</ul>
				</div>
			</div>
			<!-- /.navbar -->
		</header>
		<div class="container">
			<div class="thankyou">
				<h1 class="thankyou__title">							
					<?php echo $_SESSION['thankyou_title'];?>
				</h1>							
				<p class="thankyou__text">
					<?php  echo $_SESSION['thankyou_description'];?>
				</p>						
				<a href="index.html" class="thankyou__button">Назад</a>		
			</div>
		</div>
		<footer class="footer">
			<div class="container">
				<div class="footer-wrapper">
					<div class="footer__logo-info">
					<a href="index.html" class="footer__logo-link">
							<img src="img/logo.svg" alt="Icon: Logo" class="footer__logo" />
						</a>
						<span class="footer__text"
							>Создайте современный и креативный веб-сайт с crealand</span
						>
						<div class="footer__social-wrapper">
						<a
								href="https://www.google.com.ua/"
								target="_blank"
								class="social-link"
							>
								<img
									src="img/icon-google.svg"
									alt="Icon: Google"
									class="footer__social"
								/>
							</a>
							<a href="https://twitter.com" target="_blank" class="social-link">
								<img
									src="img/icon-twiter.svg"
									alt="Icon: Twiter"
									class="footer__social"
								/>
							</a>
							<a
								href="https://instagram.com"
								target="_blank"
								class="social-link"
							>
								<img
									src="img/icon-instagram.svg"
									alt="Icon: Instagram"
									class="footer__social"
								/>
							</a>
							<a
								href="https://www.linkedin.com"
								target="_blank"
								class="social-link"
							>
								<img
									src="img/icon-likedin.svg"
									alt="Icon: LikedIn"
									class="footer__social"
								/>
							</a>
						</div>
					</div>
					<!-- /.footer__logo-info -->
					<div class="footer__company-services">
						<div class="footer__product footer__about">
							<h3 class="footer__title">Продукт</h3>
							<ul class="footer__ul">
								<li class="footer__list">
									<a href="#" class="footer__link">Лэндинг</a>
								</li>
								<li class="footer__list">
									<a href="#" class="footer__link">Функции</a>
								</li>
								<li class="footer__list">
									<a href="#" class="footer__link">Документация</a>
								</li>
								<li class="footer__list">
									<a href="#" class="footer__link">Скидки</a>
								</li>
								<li class="footer__list">
									<a href="#" class="footer__link">Расценки</a>
								</li>
							</ul>
						</div>
						<!-- /.footer__product -->
						<div class="footer__services footer__about">
							<h3 class="footer__title">Сервисы</h3>
							<ul class="footer__ul">
								<li class="footer__list">
									<a href="#" class="footer__link">Документация</a>
								</li>
								<li class="footer__list">
									<a href="#" class="footer__link">Дизайн</a>
								</li>
								<li class="footer__list">
									<a href="#" class="footer__link">Темы</a>
								</li>
								<li class="footer__list">
									<a href="#" class="footer__link">Илюстрации</a>
								</li>
								<li class="footer__list">
									<a href="#" class="footer__link">UI Kit</a>
								</li>
							</ul>
						</div>
						<!-- /.footer__services -->
						<div class="footer__company footer__about">
							<h3 class="footer__title">Компания</h3>
							<ul class="footer__ul">
								<li class="footer__list">
									<a href="#" class="footer__link">О нас</a>
								</li>
								<li class="footer__list">
									<a href="#" class="footer__link">Условия</a>
								</li>
								<li class="footer__list">
									<a href="#" class="footer__link">Privacy Policy</a>
								</li>
								<li class="footer__list">
									<a href="#" class="footer__link">Careers</a>
								</li>
							</ul>
						</div>
						<!-- /.footer__company -->
						<div class="footer__more footer__about">
							<h3 class="footer__title">Еще..</h3>
							<ul class="footer__ul">
								<li class="footer__list">
									<a href="#" class="footer__link">Документация</a>
								</li>
								<li class="footer__list">
									<a href="#" class="footer__link">Лицензия</a>
								</li>
								<li class="footer__list">
									<a href="#" class="footer__link">Изменения</a>
								</li>
							</ul>
						</div>
						<!-- /.footer__more -->
					</div>
				</div>
				<!-- /.footer-wrapper -->
				<div class="footer__like">
					<img
						src="img/footer-like.svg"
						alt="Icon: Like"
						class="footer__like-icon"
					/>
					<span class="footer__like-text"
						>Copyright © 2019. Crafted with love.</span
					>
				</div>
				<!-- /.footer__like -->
			</div>
			<!-- /.container -->
		</footer>	
		<script src="js/jquery-3.6.0.min.js"></script>
		<script src="js/swiper-bundle.min.js"></script>
		<script src="js/jquery.fancybox.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>
