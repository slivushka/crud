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
    </div>
    <a class="nav-link" href="register.php">Регистрация</a>
    
  </div>
</nav>
<table class="table">
          <thead>
            <tr>
            <th>name</th>
            <th>login</th>
            </tr>
            </thead>
            <tbody> 
            
        <?php 
           include "config.php";
           if(isset($_COOKIE['user'])):
            $sql = "SELECT * FROM users";
            echo '<ul>';
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {
            ?>
                    <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['login']; ?></td>
                   <td><a class="btn btn-primary" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;
                   <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                    </tr>                       
        <?php       }
            } 
        ?>  
        <form>
</form>
        </tbody>
</table> <?php endif; ?>

<a href="index.php">
    <input class="btn btn-secondary d-block mx-auto" type="button" value="Назад">
</a>
    </div>
</div>
</body>
</html>