<?php require "fu.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="/crudapp/main.css">
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
      <?php if (!isset($_COOKIE['user'])) { ?>
    </div>
    <a class="nav-link" href="index.php">Вход в учетную запись</a>
  </div> 
  </div>
    <a class="nav-link" href="register.php">Регистрация</a>
  </div> 
  </nav>
  <p>Пожалуйства войдите в учетную запись</p>
    <?php } else { ?>
    </div>
    <a class="nav-link" href="register.php">Регистрация</a>
  </div>
</nav>

<table class="table table-bordered caption-top">
<caption>Список пользователей</caption>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Имя</th>
      <th scope="col">Логин</th>
      <th scope="col">Role</th>
      <th scope="col"> act</th>
    </tr>
  </thead>
  <tbody>
  <?php 
        $sql = "SELECT * FROM users";
        $result = $conn->query($sql);
         foreach ($result as $value) { ?>
    <tr>
      <th><?=$value['id'] ?></th>
      <td><?=$value['name'] ?></td>
      <td><?=$value['login'] ?></td>
      <td><?=$value['role'] ?></td>
      <td><a class="btn btn-primary" href="update.php?id=<?php echo $value['id']; ?>">Edit</a>&nbsp;
      <a class="btn btn-danger" href="delete.php?id=<?php echo $value['id']; ?>">Delete</a></td>
    </tr>
    <?php }} ?>
    <? unset($value) ?>
  </tbody>
</table>
    </div>
</div>
</body>
</html>
