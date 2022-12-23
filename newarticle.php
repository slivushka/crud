<?php
require "config.php";
require "fu.php";
$sql = "SELECT * FROM users WHERE login='$_COOKIE[user]'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
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
          <a class="nav-link" aria-current="page" href="index.php">Главная</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="userlist.php">Пользователи</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="profile.php">Профиль</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="articles.php">Статьи</a>
        </li>
      </ul>
    </div>
  </div>  
</nav>
<form action='fu.php' method="post">
<div class="container mt-4">
  <div class="mb-3 row">
    <label for="author" class="col-sm-2 col-form-label">Ваше имя:</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="author" name="author" value="<?php echo "$row[name]"; ?>">
    </div>
  </div>
  <div class="mb-3">
  <label for="articlename" class="form-label">Название статьи</label>
  <input type="text" class="form-control" id="articlename" name="articlename">
</div>
<div class="mb-3">
  <label for="articletext" class="form-label">Содержание статьи</label>
  <textarea class="form-control" id="articletext" name="articletext" rows="3"></textarea>
</div>
<button class="btn btn-success" type="submit" name="addarticle">Добавить</button>
</div> 
</form> 
</body>
</html>