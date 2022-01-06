<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<?php
session_start();
if($_SESSION["type"] != 2) header("Location: .");
?>

<html><body>
<?php
 $conn = mysqli_connect("eu-cdbr-west-01.cleardb.com","b82a476b3b9e9d","0de723ba", "heroku_3e0e4fe3001638d") or die ("Невозможно подключиться к серверу");
 mysqli_query($conn, 'SET NAMES cp1251');
 $zapros="UPDATE users SET username='".$_GET['username']."', password='".md5($_GET['password'])."', type='".$_GET['type']."' WHERE username='".$_GET['username']."'";
 mysqli_query($conn, $zapros);
 if (mysqli_affected_rows($conn) > 0) {
  echo "Все сохранено. <a href='.'>Вернуться на главную</a>";
 }
 else {
  echo "Ошибка сохранения. <a href='.'>Вернуться на главную</a>";
 }
?>
</body></html>