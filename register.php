<?php
require "config.php";
require "fu.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма регистрации</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/demo/css/style.css">
</head>
<body>
<div class="container mt-4">
  <?php
  if(!isset($_COOKIE['user'])):
  ?>
    <div class="row">
        <div class="col">
            
            <form action='fu.php' method="post">
            <h1>Регистрация</h1>
              <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
              <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя"><br>
              <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
              <button class="btn btn-success" type="submit">Зарегистрировать</button>
            </form> 
        </div>
        <?php else: ?>
          <p>Привет <?=$_COOKIE['user']?>. Для выхода нажмите <a href="/demo/exit.php">здесь</a>.</p>
        <?php endif; ?>
    </div>
</div>
</body>
</html>