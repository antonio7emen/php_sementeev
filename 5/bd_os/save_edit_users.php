<?php
session_start();
if($_SESSION["type"] != 2) header("Location: .");
?>

<html><body>
<?php
 mysql_connect("localhost","root","") or die ("Невозможно подключиться к серверу!");
 mysql_query('SET NAMES cp1251');
 mysql_select_db("os") or die("База данных отсутствует!");
 $zapros="UPDATE users SET username='".$_GET['username']."', password='".md5($_GET['password'])."', type='".$_GET['type']."' WHERE username='".$_GET['username']."'";
 mysql_query($zapros);
 if (mysql_affected_rows() > 0) {
  echo "Все сохранено. <a href='.'>Вернуться на главную</a>";
 }
 else {
  echo "Ошибка сохранения. <a href='.'>Вернуться на главную</a>";
 }
?>
</body></html>