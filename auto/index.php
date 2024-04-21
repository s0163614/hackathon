<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Анапа</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
  <link rel="stylesheet" href="css/bootstrap.css">
</head>


<!— Header —>
<?php
/* <header id="header">
<h1 id="logo"><a href="../index.html">Лимонад волшебства</a></h1>
<nav id="nav">
<ul>
<li><a href="../index.html">Главная</a></li>
<li>
<a href="#">Путешествия</a>
<ul>
<li><a href="../left-sidebar.html">Пешие прогулки</a></li>
<li><a href="../right-sidebar.html">Достопримечательности</a></li>
<li><a href="../no-sidebar.html">Пляжи</a></li>
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
<li><a href="../elements.html">Карта</a></li>
<li><a href="#" class="button special">Мультипаспорт</a></li>
</ul>
</nav>
</header> */
?>

<?php
require_once __DIR__.'/boot.php';

$user = null;

if (check_auth()) {
    // Получим данные пользователя по сохранённому идентификатору
    $stmt = pdo()->prepare("SELECT * FROM `users` WHERE `id` = :id");
    $stmt->execute(['id' => $_SESSION['user_id']]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>

<body>

<div class="container">
  <div class="row py-5">
    <div class="col-lg-6">

        <?php if ($user) { ?>

          <h1>С возвращением,  <?=htmlspecialchars($user['username'])?>!</h1>

          <form class="mt-5" method="post" action="do_logout.php">
            <button type="submit" class="btn btn-primary">Logout</button>
          </form>

        <?php } else { ?>

          <h1 class="mb-5">Регистрация</h1>

            <?php flash(); ?>

          <form method="post" action="do_register.php">
            <div class="mb-3">
              <label for="username" class="form-label">Имя</label>
              <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Пароль</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="d-flex justify-content-between">
              <button type="submit" class="btn btn-primary">Регистрация</button>
              <a class="btn btn-outline-primary" href="login.php">Вход</a>
            </div>
          </form>

        <?php } ?>

    </div>
  </div>
</div>



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
