<!DOCTYPE HTML>
<!--
	Landed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Elements - Landed by HTML5 UP</title>
		<meta charset="utf-8" />
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
<li><a href="no-sidebar.php">Клубы</a></li>
<li>
<a href="#">Уникальные мероприятия</a>
<ul>
<li><a href="#"> 1</a></li>
<li><a href="#"> 2</a></li>
<li><a href="#"> 3</a></li>
<li><a href="#"> 4</a></li>
</ul>
</li>
</ul>
</li>
<li><a href="elements.php">Карта</a></li>
<li><a href="#" class="button special">Мультипаспорт</a></li>
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
#map { height: 500px; }
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
[44.891, 37.324, 1], // пример точки с координатами и количеством людей
[44.891, 37.325, 5],
[44.891, 37.326, 10]
], {radius: 25}).addTo(map);
</script>
	

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>