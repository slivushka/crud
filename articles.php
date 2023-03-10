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

<table class="table table-bordered caption-top">
<caption>Список статей</caption>
  <thead>
    <tr>
      <th scope="col">автор</th>
      <th scope="col">название</th>
      <th scope="col">текст</th>
      <th scope="col"> act</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  require "config.php";

        $sql = "SELECT * FROM articles";
        $result = $conn->query($sql);
         foreach ($result as $value) { ?>
    <tr>
      <th><?=$value['author'] ?></th>
      <td><?=$value['articlename'] ?></td>
      <td><?=$value['text'] ?></td>
    </tr>
    <?php } ?>
    <? unset($value) ?>
  </tbody>
</table>

<a class="btn btn-success" href="newarticle.php">Создать</a></td>
</body>
</html>
