<!DOCTYPE HTML>
<!--
	Landed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
	<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start(); // Запускаем сессию, если она еще не запущена
}
?>
		<title>Анапа</title>
		<meta charset="utf-8" />
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
<!— Header —>
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
<br>
<br>
<br>
<script src="https://api-maps.yandex.ru/2.1/?apikey=a04249f8-6c4f-41b3-b9e4-c0e437192937&lang=ru_RU" type="text/javascript"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Heatmap Example</title>
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<style>
#map { height: 1000px; }
</style>
</head>
<body>

<div id="map"></div>

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script src="https://unpkg.com/leaflet.heat/dist/leaflet-heat.js"></script>
<script>
var map = L.map('map').setView([44.8908, 37.3239], 15);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

var heat = L.heatLayer([
    [44.890, 37.325, 30], // Центр города
    [44.891, 37.326, 50], // Юг города
    [44.893, 37.323, 20], // Север города
    [44.886, 37.330, 10], // Восток города
    [44.891, 37.320, 40], // Запад города
    [44.889, 37.328, 15], // Восточный пляж
    [44.895, 37.314, 25], // Западный пляж
    [44.887, 37.324, 35], // Парк Горького
    [44.894, 37.318, 28], // Набережная
    [44.887, 37.331, 45], // Центральный пляж
    [44.893, 37.329, 22]  // Жемете
], { radius: 25 }).addTo(map);
</script>
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