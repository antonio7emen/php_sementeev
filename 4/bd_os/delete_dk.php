<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<?php
 mysqli_connect("eu-cdbr-west-01.cleardb.com","b82a476b3b9e9d","0de723ba") or die ("Невозможно
подключиться к серверу");
 mysqli_select_db("os") or die("Нет такой таблицы!");
 $zapros="DELETE FROM dk WHERE id=" . $_GET['id'];
 mysqli_query($zapros);
 header("Location: index.php");
 exit;
?>