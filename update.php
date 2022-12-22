<?php 
include "config.php";
if ($_COOKIE['role'] == 'admin' || $_COOKIE['role'] == 'moder' ) {
    if (isset($_POST['update'])) {
    
        $user_id = $_POST['id'];
        $name = $_POST['name'];
        $login = $_POST['login'];
        $sql = "UPDATE users SET `name`='$name',`login`='$login' WHERE `id`='$user_id'"; 
        $result = $conn->query($sql); 
        if ($result == TRUE) {
            header('Location: userlist.php');
        }else{
            echo "Error:" . $sql . "<br>" . $conn->error;
        }
    } 
    
if (isset($_GET['id'])) {
    $user_id = $_GET['id']; 
    $sql = "SELECT * FROM users WHERE `id`='$user_id'";
    $result = $conn->query($sql); 
    if ($result->num_rows > 0) {        
        while ($row = $result->fetch_assoc()) {
            $name = $row['name'];
            $login = $row['login'];
            $id = $row['id'];
        }    
} } 
else { 
    header('Location: index.php');
    } 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="/crudapp/main.css">
</head>
<body>
<div class="container mt-4">
<div class="row">
        <div class="col">
       
        <form action="" method="post"> 
            <h1>Форма редактирования</h1>
            <br>Имя<br>
            <input type="text" name="name" value="<?php echo $name; ?>">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <br>Логин<br>
            <input type="text" name="login" value="<?php echo $login; ?>">
            <br>
            <button class="btn btn-success" value="Update" name="update" type="submit">Save</button>
        </form> 
    </dev>
    </div>
    </div>
        </body>
        </html> 
   <?php } else { echo "У вас недостаточно прав ($_COOKIE[role])"; } ?>