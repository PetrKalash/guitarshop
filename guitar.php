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

				<!-- Описание гитар -->
				<article id="guitar-info" class="flex-start">

					<!-- Акустика -->
					<section class="guitar-block1 flex-top">
						<h2>Акустическая гитара</h2>
						<img src="img/akustic.png" alt="akustic">
						<p><b>Акустическая гитара</b> – струнный щипкоковый музыкальный инстру<br>мент с
						шестью струнами из семейс<br>тва гитар, звучание которого осуществляется благодаря
						колеба<br>нию струн, усиливаемому за счёт резонирования полого корпуса</p>
					</section>
					<!-- Электро -->
					<section class="guitar-block2 flex-top">
						<h2>Электрогитара</h2>
						<img src="img/electro.png" alt="electro">
						<p><b>Электрогитара</b> – разновидность щипкового инструмента, оснащен<br>ная
						электромагнитными звукосни<br>мателями, что превращают струн<br>ные колебания в
						электроток</p>
					</section>
					<!-- Бас -->
					<section class="guitar-block3 flex-top">
						<h2>Бас-гитара</h2>
						<img src="img/bas.png" alt="bas">
						<p>
							<b>Бас-гитара</b> – струнно-щипковый электрический музыкальный инст<br>румент,
							предназначенный для игр<br>ы в басовом диапазоне. На этом инструменте играют
							преимуществ<br>енно пальцами
						</p>
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
