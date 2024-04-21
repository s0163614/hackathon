<?php
require_once __DIR__.'/boot.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Проверка логина и пароля
    function authenticateUser($username, $password) {
        $pdo = pdo(); // Функция для получения PDO-объекта
        $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
        $stmt->execute(['username' => $username]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            return $user; // Возвращаем данные пользователя, если логин и пароль совпадают
        }
        return false; // Возвращаем false в случае неуспешной аутентификации
    }

    $authenticatedUser = authenticateUser($username, $password);

    if ($authenticatedUser) {
        $_SESSION['user_id'] = $authenticatedUser['id']; // Сохраняем ID пользователя в сессии
        $_SESSION['username'] = $authenticatedUser['username']; // Сохраняем имя пользователя в сессии
        $_SESSION['email'] = $authenticatedUser['email']; // Сохраняем электронную почту пользователя в сессии
        
        // Перенаправляем на главную страницу после успешной аутентификации
        header('Location: ../index.php');
        exit();
    } else {
        flash('Неверные учетные данные');
        // Показать форму входа с сообщением об ошибке
        // Можно добавить дополнительную логику обработки ошибки
    }
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Вход</title>
  <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div class="container">
  <div class="row py-5">
    <div class="col-lg-6">
      <h1 class="mb-5">Логин</h1>
        <?php flash() ?>
      <form method="post" action="login.php">
        <div class="mb-3">
          <label for="username" class="form-label">Имя</label>
          <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Пароль</label>
          <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="d-flex justify-content-between">
          <button type="submit" class="btn btn-primary">Вход</button>
          <a class="btn btn-outline-primary" href="index.php">Регистрация</a>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>