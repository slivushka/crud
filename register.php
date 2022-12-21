<?php
require "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма регистрации</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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
              <button class="btn btn-success" type="submit" name="register">Зарегистрировать</button>
            </form> 
        </div>
        <?php else: ?>
          <p>Привет <?=$_COOKIE['user']?>. Вы уже зарегистрированы. Для возврата нажмите <a href="/crudapp/">здесь</a>.</p>
        <?php endif; ?>
    </div>
</div>
</body>
</html>