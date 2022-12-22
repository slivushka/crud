<?php
include "config.php";


//auth
// if(array_key_exists('login',$_POST)){
//     auth($conn); }
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

setcookie('user', $user['login'], time() + 3600, "/crudapp/");
setcookie('role', $user['role'], time() + 3600, "/crudapp/");

$conn->close();
header('Location: /crudapp/profile.php');    
}

if(isset($_POST['test']))
{
   auth($conn);
}

//check
// if(array_key_exists('register',$_POST)){
//     check($conn); }  

function check($conn) {
    include "config.php";
    if(array_key_exists('register',$_POST)) {
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
   $login = $_POST['login'];
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    $role = $_POST['role'];
    
    if (mb_strlen($login) < 4 || mb_strlen($login) > 90) {
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
    $sql = "INSERT INTO `users`(`login`, `pass`, `name`, `role`) VALUES ('$login','$pass','$name', '$role')";
    $result = $conn->query($sql);
    if ($result == TRUE) {
        header('Location: /crudapp/');
    } else {
      echo "Error:". $sql . "<br>". $conn->error;
    }
    $conn->close();
}}

if(isset($_POST['register']))
{
   check($conn);
}


function profile(){
if (!isset($_COOKIE['user'])):
    echo 'Пожалуйства войдите в учетную запись';
endif;
}



    if(isset($_COOKIE['user'])) {
        $sql = "SELECT * FROM users";
        $result = $conn->query($sql);
       
        }    

?>