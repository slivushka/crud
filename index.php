<? include "config.php";
include "fu.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/crudapp/main.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <p class="navbar-brand" href="#">AAA crud app</p>
      <span class="navbar-toggler-icon"></span>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Главная</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Пользователи</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Профиль</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">tbd</a>
        </li>
      </ul>
    </div>
    <a class="nav-link" href="register.php">Регистрация</a>
  </div>
</nav>
<div class="container mt-4">
  <?php
  if(!isset($_COOKIE['user'])):
  ?>
    <div class="row">
        <div class="col">
       
        <form action='fu.php' method="post">
        <h1>Авторизация</h1>
          <input type="text" class="form-control" name="login" id="login"  placeholder="Введите логин"><br>
          <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
          <button class="btn btn-success" type="submit">Авторизоваться</button>
        </form>
  </div>
        </tbody>
</table>
        <?php endif; ?>
    </div>
</div>
</body>
</html>