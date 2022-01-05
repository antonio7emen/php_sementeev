<?php
 mysql_connect("localhost","root","") or die ("Невозможно
подключиться к серверу");
 mysql_select_db("os") or die("Нет такой таблицы!");
 $zapros="DELETE FROM os WHERE id='" . $_GET['id']."'";
 mysql_query($zapros);
 header("Location: index.php");
 exit;
?>