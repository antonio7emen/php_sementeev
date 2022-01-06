<?php
 session_start();
 if($_SESSION["type"] == 2) { //Только администраторы
  $conn = mysqli_connect("eu-cdbr-west-01.cleardb.com","b82a476b3b9e9d","0de723ba", "heroku_3e0e4fe3001638d") or die ("Невозможно подключиться к серверу");
  mysqli_query($conn, 'SET NAMES cp1251');
  $sql_add = "INSERT INTO users SET username='" . $_GET['username']."', password='".md5($_GET['password'])."', type='".$_GET['type']. "'";
  mysqli_query($conn, $sql_add);
  if (mysqli_affected_rows($conn)>0) { // если нет ошибок при выполнении запроса
   echo "Запись сохранена.<br>";
   echo "<a href='.'>Вернуться на главную</a>";
  }
  else {
   echo "Ошибка сохранения. <a href='.'>Вернуться на главную</a>";
  }
 }
 else {
  header("Location: .");
 }
?>