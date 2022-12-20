<?php
include "config.php";

//auth
function auth($conn) {
    $login = $_POST['login'];
    $pass = $_POST['pass']; 
    $pass = md5($pass);
  
    $sql = "SELECT * FROM users WHERE login='$login' and pass='$pass'"; 
  
    $result = $conn->query($sql);  
    $user = $result->fetch_assoc();

    if ($user == null) {
        echo "Такой пользователь не найден \n";
        exit();
    }

setcookie('user', $user['name'], time() + 3600, "/demo/");

$conn->close();
header('Location: /crudapp/');    
}
$auth = auth($conn);

//check
function check($conn) {
    include "config.php";
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
   
    
    if (mb_strlen($login) < 5 || mb_strlen($login) > 90) {
        echo "Недопустимая длина логина";
        exit();
    } else if (mb_strlen($name) < 3 || mb_strlen($name) > 50) {
        echo "Недопустимая длина имени";
        exit();
    } else if (mb_strlen($pass) < 2 || mb_strlen($pass) > 10) {
        echo "Недопустимая длина пароля";
        exit();
    }
    $pass = md5($pass);
    $sql = "INSERT INTO `users`(`login`, `pass`, `name`) VALUES ('$login','$pass','$name')";
    $result = $conn->query($sql);
    if ($result == TRUE) {
        header('Location: /demo/login.php');
    } else {
      echo "Error:". $sql . "<br>". $conn->error;
    }
    $conn->close();
}
$check = check($conn);

?>