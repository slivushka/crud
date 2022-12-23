<?php
  /* Принимаем данные из формы */
  include "config.php";
  if(isset($_COOKIE['user'])) {
  $name = $_COOKIE['user'];
  $page_id = $_POST["page_id"];
  $text_comment = $_POST["text_comment"];
  $name = htmlspecialchars($name);// Преобразуем спецсимволы в HTML-сущности
  $text_comment = htmlspecialchars($text_comment);// Преобразуем спецсимволы в HTML-сущности
  $conn->query("INSERT INTO `comments` (`name`, `page_id`, `text_comment`) VALUES ('$name', '$page_id', '$text_comment')");// Добавляем комментарий в таблицу
  header("Location: ".$_SERVER["HTTP_REFERER"]);
} else { echo 'error';}
  header("Location: ".$_SERVER["HTTP_REFERER"]);// Делаем реридект обратно
?>