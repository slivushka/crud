<? 
require "config.php";
require "fu.php"; ?>
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
          <a class="nav-link" href="articles.php">Статьи</a>
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
          <button class="btn btn-success" type="submit" name="test">Авторизоваться</button>
        </form>
  </div>
        <?php endif; ?>
        
    </div>
</div>
<div class="chat">
<?php
require "config.php";
  $page_id = 150;// Уникальный идентификатор страницы (статьи или поста)
  $result_set = $conn->query("SELECT * FROM `comments` WHERE `page_id`='$page_id'"); //Вытаскиваем все комментарии для данной страницы
  while ($row = $result_set->fetch_assoc()) { ?>
      <?php echo "<p><b>$row[name]</b>: $row[text_comment]"?>
      <span class="time">11:02</span></p>
  <br>
  <?php }
?>

<?php if(isset($_COOKIE['user'])) { ?>
<form  name="comment" action="comments.php" method="post">
<div class="mb-3">
  <p> <label for="exampleFormControlInput1" class="form-label"><?php echo "$_COOKIE[user]:";?> </label>
</div>
    <div class="mb-3">
    <textarea class="form-control"  type="text" name="text_comment" placeholder="Текст комментария"></textarea>
</div>
  </p>
  <p>
    <input type="hidden" name="page_id" value="150" />
    <button type="submit" class="btn btn-primary">Отправить</button>
  </p>
  </div>
  <?php } else {
    echo "Ввойдите в учетную запись, чтобы оставить комментарий";
    }
    ?>
</form>
</body> 
</html>
