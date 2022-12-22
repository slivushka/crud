<?php
require "fu.php";
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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
      <?php if (!isset($_COOKIE['user'])) {?>

    </div>
    <a class="nav-link" href="index.php">Вход в учетную запись</a>
  </nav>
  <p>Пожалуйста, войдите в учетную запись</p>
</div> 
<?php } else { ?>
  </div>
    <a class="nav-link" href="exit.php">Выход из учетной записи</a>
  </nav>
  </div> 
<ul class="list-group">
<?php
            $sql = "SELECT * FROM users WHERE login='$_COOKIE[user]'";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            echo "<p>Ваше имя $row[name]</p>";
            echo "<p>Ваш логин $row[login]</p>";
            echo "<p>Ваша роль $row[role]</p>";
}
?>
</ul>


</body>
</html>