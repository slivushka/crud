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
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <p class="navbar-brand" href="#">AAA crud app</p>
      <span class="navbar-toggler-icon"></span>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Главная</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="userlist.php">Пользователи</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="profile.php">Профиль</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">tbd</a>
        </li>
      </ul>
    </div>
    <a class="nav-link" href="index.php">Вход в учетную запись</a>
  </div>
</nav>
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
              <div class="form-check">
              <input class="form-check-input" type="radio" name="role" id="role" value="admin" checked>
              <label class="form-check-label" for="exampleRadios1">
              Admin
              </label>
              </div>
              <div class="form-check">
              <input class="form-check-input" type="radio" name="role" id="role" value="moder">
              <label class="form-check-label" for="exampleRadios2">
              Moderator
              </label>
              </div>
              <div class="form-check">
              <input class="form-check-input" type="radio" name="role" id="role" value="user">
              <label class="form-check-label" for="exampleRadios3">
              User
              </label>
              </div> <br>
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