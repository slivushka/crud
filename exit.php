<?php
setcookie('user', $user['name'], time() - 3600, "/crudapp/");
header('Location: /crudapp/');
?>