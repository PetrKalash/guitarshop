<!DOCTYPE html>
<html lang="ru">
	<head>
		<?php include "include/head.html" ?>
	</head>

	<body>
		<!-- Обертка -->
		<div id="wrapper">

			<!-- Хедер -->
			<div id="header-wrapper">
				<!-- Логотип -->
				<?php include "include/header.html" ?>
				<!-- Панель навигации -->
				<?php include "include/nav.html" ?>
			</div>

			<!-- Основной контент -->
			<main id="content-main" class="container flex-space-between">

				<!-- Информация о компании -->
				<article id="company-info">

					<!-- Краткое описание фирмы -->
					<section class="text-info">
						<h2>О компании</h2><hr>
						<p>Вот уже 30 лет GuitarShop находится на российском рынке и занимается интернет
						продажей самых различных видов гитарных инструментов, начиная с классических и
						заканчивая электронными. Вы можете легко выбрать нужный вид гитары, посмотрев весь
						ассортимент на странице покупок и найти нужную вам по доступной цене</p>
					</section>
					<!-- Местоположение фирмы -->
					<section>
						<h3>Где нас найти:</h3>
						<section class="map">
			    		<div class="content-map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2384.225380656263!2d34.30298351578161!3d53.3034097856277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4132a822d241e42d%3A0xdfb2f7699514fe6a!2z0JHQk9Ci0KMsINCR0YDRj9C90YHQutC40Lkg0LPQvtGB0YPQtNCw0YDRgdGC0LLQtdC90L3Ri9C5INGC0LXRhdC90LjRh9C10YHQutC40Lkg0YPQvdC40LLQtdGA0YHQuNGC0LXRgg!5e0!3m2!1sru!2sru!4v1662318577444!5m2!1sru!2sru"
								width="600" height="350" style="border:1px solid gray;" loading="lazy"
								referrerpolicy="no-referrer-when-downgrade"></iframe></div>
						</section>
					</section>
					<!-- Контакты -->
					<section class="flex-space-between">
						<p class="tel"><strong>Телефон:</strong> +79999999999</p>
							<ul class="social-icons">
								<li><a href="#"><i class="fa fa-vk"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-telegram"></i></a></li>
							</ul>
					</section>

				</article>

				<!-- Правый сайдбар -->
				<?php include "include/sidebar.html" ?>

		</main>

	</div>

	<!-- Подвал -->
	<?php include "include/footer.html" ?>
</body>
</html>
