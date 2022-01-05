<html><body>
<?php
 mysql_connect("localhost","root","") or die ("Невозможно
подключиться к серверу");
 mysql_query('SET NAMES cp1251');
 mysql_select_db("users") or die("Нет такой таблицы!");
 $zapros="UPDATE user SET user_name='".$_GET['name'].
"', user_login='".$_GET['login']."', user_password='"
.$_GET['password']."', user_e_mail='".$_GET['e_mail'].
"', user_info='".$_GET['info']."' WHERE id_user="
.$_GET['id'];
 mysql_query($zapros);
if (mysql_affected_rows()>0) {
 echo 'Все сохранено. <a href="index.php"> Вернуться к списку
пользователей </a>'; }
 else { echo 'Ошибка сохранения. <a href="index.php">
Вернуться к списку пользователей</a> '; }
?>
</body></html>