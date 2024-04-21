<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start(); // Запускаем сессию, если она еще не запущена
}

$usernameDisplay = isset($_SESSION['username']) ? htmlspecialchars($_SESSION['username']) : 'Вход'; // Получаем имя пользователя из сессии

if (isset($_SESSION['user_id'])) {
    $loginLogoutText = $usernameDisplay;
    $loginLogoutLink = '#'; // Можете заменить на ссылку на профиль или выход
} else {
    $loginLogoutText = 'Вход'; // Заменяем на текст "Вход"
    $loginLogoutLink = 'auto/index.php';
}
?>

<!DOCTYPE HTML>
<!--
	Landed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>

		<title>Анапа</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>
		<div id="page-wrapper">

			<!-- Header -->
<header id="header">
<h1 id="logo"><a href="index.php">Лимонад волшебства</a></h1>
<nav id="nav">
<ul>
<li><a href="index.php">Главная</a></li>
<li>
<a href="#">Путешествия</a>
<ul>
<li><a href="left-sidebar.php">Пешие прогулки</a></li>
<li><a href="right-sidebar.php">Достопримечательности</a></li>
<li><a href="no-sidebar.php">Пляжи</a></li>

</ul>
</li>
<li><a href="elements.php">Карта</a></li>
<li><a href="#" class="button special modal-button">Мультипаспорт</a></li>
    <div id="modal" style="display: none;">
        <div id="modal-content" style="background-color: rgba(39, 40, 51, 0.965); padding: 20px;">
            <!-- Сюда будет добавлен контент для модального окна -->
            <button id="modal-close" style="float: right;">Закрыть</button>
        </div>
    </div>



<li><a href="auto/index.php" class="button special">Вход</a></li>
</ul>
</nav>
</header>

			<!-- Main -->
				<div id="main" class="wrapper style1">
					<div class="container">
						<header class="major">
							<h2>Лучшие пляжи Анапы</h2>
							<p>Сейчас ты увидишь лучшие пляжи на Юге России</p>
						</header>
						<div class="row 150%">
							<div class="8u 12u$(medium)">

								<!-- Content -->
									<section id="content">
										<a href="#" class="image fit"><img src="images/pic09.jpg" alt="" /></a>
										<h3>Немного об Анапе:</h3>
										<p>Город Анапа, расположенный на берегу Черного моря, известен своими прекрасными пляжами, уникальной архитектурой, историческими достопримечательностями и разнообразными возможностями для отдыха.</p>
										<p>Туристы могут насладиться прогулками по пляжам, посетить красивые парки и сады, познакомиться с историей города в музеях, оценить живописные виды с маяка на мысе Айя и посетить развлекательные заведения, такие как дельфинарий или аквапарк. В Анапе есть возможности для активного и спокойного отдыха, а также для знакомства с культурным наследием этого уникального морского курорта. Город предлагает разнообразные варианты отдыха для туристов всех возрастов и предпочтений, делая поездку в Анапу увлекательным и запоминающимся опытом! </p>
								
										</ul>
									</section>

							</div>
							<div class="4u$ 12u$(medium)">

								<!-- Sidebar -->
									<section id="sidebar">
										<section>
											<h3>Песчаный пляж «Miracleon» </h3>
											<p>Песчанный пляж, плавный заход в воду, шезлонги, бесплатный туалет и душ, ба, детская анимация, спасательная вышка, медицинский пост</p>
											<footer>
												<ul class="actions">
													<li><a href="#" class="button">Узнать больше</a></li>
												</ul>
											</footer>
										</section>
										<hr />
										<section>
											<a href="#" class="image fit"><img src="images/11111.jpg" alt="" /></a>
											<h3>Детский санаторий Вита</h3>	
											<p>Детский оздоровительный санаторий "Вита" распаложен в 15 минутах езды от аэропорта, здесь Вы получите замечательные ощущения, а так же шикарный загар</p>
											<footer>
												<ul class="actions">
													<li><a href="#" class="button">Узнать больше</a></li>
												</ul>
											</footer>
										</section>
									</section>

							</div>
						</div>
					</div>
				</div>

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
						<li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
						<li><a href="#" class="icon alt fa-envelope"><span class="label">Email</span></a></li>
					</ul>
					
				</footer>

		</div>
		
		<?php
    // Предполагая, что $loyalData - это массив с данными, которые нужно показать
    if ($loyalData) {
        $data = json_encode($loyalData); // Преобразование массива в JSON
        echo "<script> var loyalData = $data; </script>";
    }
?>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
<script>
        $(document).ready(function() {
    $('.modal-button').on('click', function(e) {
        e.preventDefault();
        
        $.ajax({
            url: 'loyal.php',
            type: 'GET',
            success: function(response) {
                var loyalData = response;
                var modalContent = '';

                if (loyalData.username) {
                    modalContent += "<p><strong>Имя пользователя:</strong> " + loyalData.username + "</p>";
                }
                if (loyalData.cart) {
                    modalContent += "<p><strong>Последний тур:</strong> " + loyalData.cart + "</p>";
                }
                if (loyalData.price) {
                    modalContent += "<p><strong>Цена тура:</strong> " + loyalData.price + "</p>";
                }
                if (loyalData.cash_back) {
                    modalContent += "<p><strong>Кэшбэк:</strong> " + loyalData.cash_back + "</p>";
                }
                
                $('#modal-content').html(modalContent);
                $('#modal').fadeIn();
            },
            error: function() {
                alert('Ошибка при получении данных');
            }
        });
    });

    $('#modal-close').on('click', function() {
        $('#modal').fadeOut();
    });
});
    </script>
	</body>
</html>