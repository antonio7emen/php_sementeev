<?php
 session_start();
 if($_SESSION["type"] == 2) {
 mysql_connect("localhost","root","") or die ("Невозможно подключиться к серверу!");
 mysql_query('SET NAMES cp1251');
 mysql_select_db("os") or die("База данных отсутствует!");
  $rows=mysql_query("SELECT username, type FROM users WHERE username='".$_GET['username']."'");
  while ($st = mysql_fetch_array($rows)) {
   $username=$_GET["username"];
   $type = $st['type'];
  }
  echo "<html><head><title>Редактирование данных</title></head><body>";
  echo "<form action='save_edit_users.php' metod='get'>";
  echo "Имя пользователя: <input name='username' size='20' type='text' value='".$username."'>";
  echo "<br>Пароль: <input name='password' size='20' type='password' value=''>";
  echo "<br>Права доступа: <input name='type' size='10' type='text' value='".$type."'>";
  echo "<input type='submit' name='' value='Сохранить'></form>";
  echo "<p><a href='.'>Вернуться на главную</a></body></html>";
 }
 else {
  header("Location: .");
 }
?>