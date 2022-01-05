<?php
 session_start();
 if($_SESSION["type"] == 2) {
  mysql_connect("localhost","root","") or die ("Невозможно подключиться к серверу!");
  mysql_select_db("os") or die("База данных отсутствует!");
  $zapros="DELETE FROM users WHERE username='" . $_GET['username']."'";
  mysql_query($zapros);
 }
 
 if($_GET['username'] == $_SESSION['username']) session_destroy();
 header("Location: .");
?>