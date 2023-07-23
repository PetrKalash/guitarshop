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

				<!-- Главная страница -->
				<article id="main-info">

					<!-- Приветствие -->
					<section>
						<h2>Интернет-магазин гитар GuitarShop</h2><hr>
						<p>Добро пожаловать в интернет-магазин гитар <b>GuitarShop!</b> Здесь вы сможете
						найти качественную гитару для себя или своих близких по разумной цене из
						огромного выбора самых разнообразных гитарных инструментов. Чтобы совершить
						покупку*, зайдите в раздел <a href="price.html" class="links">"Прайс"</a>. Также
						на сайте присутствует информационный блок с новостями о гитарном мире и своя
						собственная небольшая <a href="guitar.html" class="links">энциклопедия</a>
						гитар. Надеемся, что вы найдете нужную для себя гитару и обязательно
						порекомендуете нас своим друзьям!</p>
					</section>
					<!-- Список предлагаемых услуг -->
					<section class="home-info flex-space-between">

						<!-- Информация -->
						<div class="guitar-spisok flex-column">
							<h3>Мы предлагаем:</h3>
							<ul>
								<li><b>Акустические гитары</b> - от 2 000Р до 60 000Р</li>
								<li><b>Электрогитары</b> - от 2 500Р до 100 000Р</li>
								<li><b>Бас-гитары</b> - от 1 500Р до 55 000Р</li>
							</ul>
							<p>*Доставка осуществляется по всей России в течение 10 дней
						</div>

							<!-- Анимированная гитара -->
							<a href="price.html">
								<img src="img/akustic.png" alt="akustic" class="animate-grow">
							</a>

					</section>
					<!-- Примечание -->
					<section class="small-info">
						<p>© Подробнее о <b>GuitarShop</b> вы можете узнать в разделе
						<a href="about.html" class="links">"О компании"</a></p>
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
