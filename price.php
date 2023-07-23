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

    		<!-- Интернет-магазин -->
    		<article id="price-wrapper">

        	<h2>Лучшие товары этой недели:</h2><hr>

					<div id="price" class="flex-start">
						<!-- Первый товар -->
						<section class="guitar-block1 flex-top">
							<h2>Акустическая гитара</h2>
							<img src="img/akustic.png" alt="akustic">
							<p>Belucci BC3905BK</p>
							<a href="#" class="button-buy">3 500Р</a>
						</section>
						<!-- Второй товар -->
						<section class="guitar-block2 flex-top">
							<h2>Электрогитара</h2>
							<img src="img/electro.png" alt="electro">
							<p>Caraya E100BK</p>
							<a href="#" class="button-buy">7 800Р</a>
						</section>
						<!-- Третий товар -->
						<section class="guitar-block3 flex-top">
							<h2>Бас-гитара</h2>
							<img src="img/bas.png" alt="bas">
							<p>Cort C4</p>
							<a href="#" class="button-buy">48 000Р</a>
						</section>
					</div>

					<!-- Прайс-лист -->
					<div class="table-price">

							<h3>Прайс-лист товаров GuitarShop</h3>
							<table class="iksweb">
								<tbody>
									<tr>
										<th>Тип</th>
										<th>Наименование</th>
										<th>Цена</th>
									</tr>
									<tr>
										<td>Акустика</td>
										<td><a href ="#">YAMAHA F310</a></td>
										<td>19 890Р</td>
									</tr>
									<tr>
										<td>Электрогитара</td>
										<td><a href ="#">IBANEZ GRG121DX</a></td>
										<td>25 900Р</td>
									</tr>
									<tr>
										<td>Акустика</td>
										<td><a href ="#">FENDER CD-60</a></td>
										<td>23 700Р</td>
									</tr>
									<tr>
										<td>Электрогитара</td>
										<td><a href ="#">IBANEZ GRX70QA</a></td>
										<td>26 300Р</td>
									</tr>
									<tr>
										<td>Бас-гитара</td>
										<td><a href ="#">DENN SB100 BK</a></td>
										<td>16 089Р</td>
									</tr>
									<tr>
										<td>Акустика</td>
										<td><a href ="#">FENDER SQUIER</a></td>
										<td>11 700Р</td>
									</tr>
									<tr>
										<td>Акустика</td>
										<td><a href ="#">YAMAHA F310</a></td>
										<td>19 890Р</td>
									</tr>
									<tr>
										<td>Электрогитара</td>
										<td><a href ="#">TERRIS TST-39 BK</a></td>
										<td>8 340Р</td>
									</tr>
									<tr>
										<td>Электрогитара</td>
										<td><a href ="#">YAMAHA PACIFICA</a></td>
										<td>36 390Р</td>
									</tr>
									<tr>
										<td>Акустика</td>
										<td><a href ="#">ROCKDALE AURO</a></td>
										<td>7 700 р</td>
									</tr>
									<tr>
										<td>Бас-гитара</td>
										<td><a href ="#">IBANEZ GSR200-TR</a></td>
										<td>27 900Р</td>
									</tr>
									<tr>
										<td>Бас-гитара</td>
										<td><a href ="#">IBANEZ SR305EB</a></td>
										<td>52 000Р</td>
									</tr>
									<tr>
										<td>Акустика</td>
										<td><a href ="#">FENDER CD NATUR</a></td>
										<td>28 100Р</td>
									</tr>
									<tr>
										<td>Акустика</td>
										<td><a href ="#">IBANEZ TCY10E-BK</a></td>
										<td>25 920Р</td>
									</tr>
								</tbody>
							</table>

					</div>

    		</article>

				<!-- Правый сайдбар -->
				<?php include "include/sidebar.html" ?>

			</main>

		</div>

		<!-- Подвал -->
		<?php include "include/footer.html" ?>
	</body>
</html>
