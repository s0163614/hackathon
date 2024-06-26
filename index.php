<!DOCTYPE HTML>
<!—
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
<title>Анапа360+</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="assets/css/main.css" />
<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
</head>
<body class="landing">
<div id="page-wrapper">

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

<!— Banner —>
<section id="banner">
<div class="content">
<header>
<h2>Гид по Анапе.</h2>
<p>Расскажем и покажем достопримечательности.<br />
Не дадим заскучать!</p>
</header>
<span class="image">
<div class="tenor-gif-embed" data-postid="15389662957248741331" data-share-method="host" data-aspect-ratio="0.795833" data-width="100%">
<a href="https://tenor.com/view/raccoon-rave-dance-gif-15389662957248741331">Raccoon Rave GIF</a>from <a href="https://tenor.com/search/raccoon-gifs">Raccoon GIFs</a>
</div>
<img src="https://tenor.com/view/raccoon-rave-dance-gif-15389662957248741331" alt="Raccoon Rave GIF" autoplay="true"/>
</span>
<script type="text/javascript" async src="https://tenor.com/embed.js"></script></span>
</div>
<a href="#one" class="goto-next scrolly">Next</a>
</section>

<!— One —>
<section id="one" class="spotlight style1 bottom">
<span class="image fit main"><img src="images/pic02.jpg" alt="" /></span>
<div class="content">
<div class="container">
<div class="row">
<div class="4u 12u$(medium)">
<header>
<h2>Добро пожаловать в Анапу - жемчужину Черноморского побережья!</h2>
</header>
</div>
<div class="4u 12u$(medium)">
<p>Отдых в Анапе - это уникальная возможность окунуться в атмосферу курортного города
богатой историей и разнообразными развлечениями.Мы приглашаем вас
насладиться живописными пляжами, прогуляться по уютным улицам
старого города и открыть для себя многочисленные достопримечательности.</p>
</div>
<div class="4u$ 12u$(medium)">
<p>Мы также предлагаем широкий выбор экскурсий и туров,
чтобы вы могли максимально насытить свой отдых в Анапе впечатлениями и эмоциями.
Не упустите возможность провести незабываемый отпуск в Анапе!</p>
</div>
</div>
</div>
</div>
<a href="#two" class="goto-next scrolly">Next</a>
</section>

<!— Two —>
<section id="two" class="spotlight style2 right">
<span class="image fit main"><img src="images/pic03.jpg" alt="" /></span>
<div class="content" style="margin-bottom: -10px;">
<header>
<h2 style="margin-bottom: -10px;">На нашем сайте вы найдете полезную информацию о самых интересных местах Анапы,</h2>
<p>таких как:</p>
</header>
<p> -Пляжи с золотистым песком и чистым морем.<br />
-Парки и скверы, где можно насладиться красотой природы.<br />
-Исторические достопримечательности, рассказывающие о богатом прошлом города.<br />
-Развлекательные центры, рестораны и кафе, где вы сможете насладиться вкусной едой и атмосферой уютного отдыха.</p>
<ul class="actions">
<li><a href="#" class="button">Узнать больше</a></li>
</ul>
</div>
<a href="#three" class="goto-next scrolly">Next</a>
</section>

<!— Three —>
<section id="three" class="spotlight style3 left">
<span class="image fit main bottom"><img src="images/pic04.jpg" alt="" /></span>
<div class="content">
<header>
<h2>Так же вы можете воспользоваться тепловой картой!</h2>

</header>
<p>На тепловой карте можно будет определить, где сейчас скопление людей, для того чтобы присоединиться к ним, или же наоборот избегать!</p>
<ul class="actions">
<li><a href="elements.php" class="button">Узнать больше</a></li>
</ul>
</div>
<a href="#four" class="goto-next scrolly">Next</a>
</section>



<!— Five —>
<section id="five" class="wrapper style2 special fade">
<div class="container">
<header>
<h2>Оставить данные для обаратной связи:</h2>

</header>
<form method="post" action="#" class="container 50%">
<div class="row uniform 50%">
<div class="8u 12u$(xsmall)"><input type="email" name="email" id="email" placeholder="Ваш Email" /></div>
<div class="4u$ 12u$(xsmall)"><input type="submit" value="Отправить" class="fit special" /></div>
</div>
</form>
</div>
</section>

<!— Footer —>
<footer id="footer">
<ul class="icons">

<li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
<li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
<li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>

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

<!— Scripts —>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/jquery.dropotron.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
<script src="assets/js/main.js"></script>
 <script src="assets/js/jquery.min.js"></script>
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