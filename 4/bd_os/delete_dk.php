<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<?php
 mysql_connect("localhost","root","") or die ("Невозможно
подключиться к серверу");
 mysql_select_db("os") or die("Нет такой таблицы!");
 $zapros="DELETE FROM dk WHERE id=" . $_GET['id'];
 mysql_query($zapros);
 header("Location: index.php");
 exit;
?>