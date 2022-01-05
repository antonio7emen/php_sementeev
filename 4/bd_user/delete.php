<?php
 mysql_connect("localhost","root","") or die ("Невозможно
подключиться к серверу");
 mysql_select_db("users") or die("Нет такой таблицы!");
 $zapros="DELETE FROM user WHERE id_user=" . $_GET['id_user'];
 mysql_query($zapros);
 header("Location: index.php");
 exit;
?>