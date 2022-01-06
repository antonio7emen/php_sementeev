<?php
 session_start();
 if($_SESSION["type"] == 2) {
 $conn = mysqli_connect("eu-cdbr-west-01.cleardb.com","b82a476b3b9e9d","0de723ba", "heroku_3e0e4fe3001638d") or die ("Невозможно подключиться к серверу");
 $zapros="DELETE FROM os WHERE id='" . $_GET['id']."'";
 mysqli_query($conn, $zapros);
 }
 header("Location: index.php");
 exit;
?>