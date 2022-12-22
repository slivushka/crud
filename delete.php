<?php 
include "config.php"; 
if ($_COOKIE['role'] == 'admin') {
    if(isset($_GET['id'])) {
    $user_id = $_GET['id'];
    $sql = "DELETE FROM `users` WHERE `id`='$user_id'";
     $result = $conn->query($sql);
     if ($result == TRUE) {
        header('Location: userlist.php');
    }else{
        echo "Error:" . $sql . "<br>" . $conn->error;
    }}
   
}  else {echo "У Вас недостаточно прав ($_COOKIE[role])";}
// && 
?>