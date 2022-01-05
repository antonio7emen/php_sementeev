<?php
 mysqli_connect("eu-cdbr-west-01.cleardb.com","b82a476b3b9e9d","0de723ba") or die ("Невозможно подключиться к серверу");
 $zapros="DELETE FROM dk WHERE id=" . $_GET['id'];
 mysqli_query($conn, $zapros);
 header("Location: index.php");
 exit;
?>