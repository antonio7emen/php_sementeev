<?php
 session_start();
 if($_SESSION["type"] == 2) { //Только администраторы
  mysql_connect("localhost","root","") or die ("Невозможно подключиться к серверу!");
  mysql_query('SET NAMES cp1251');
  mysql_select_db("os") or die("База данных отсутствует!");
  $sql_add = "INSERT INTO users SET username='" . $_GET['username']."', password='".md5($_GET['password'])."', type='".$_GET['type']. "'";
  mysql_query($sql_add);
  if (mysql_affected_rows()>0) { // если нет ошибок при выполнении запроса
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