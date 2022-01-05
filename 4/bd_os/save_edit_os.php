<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<html><body>
<?php
 $conn = mysqli_connect("eu-cdbr-west-01.cleardb.com","b82a476b3b9e9d","0de723ba", "heroku_3e0e4fe3001638d") or die ("Невозможно подключиться к серверу");
 mysqli_query($conn , 'SET NAMES cp1251');
 $zapros="UPDATE os SET name='".$_GET['name'].
"', equipment='".$_GET['equipment']."', bitness='"
.$_GET['bitness']."', developer='".$_GET['developer'].
"', population='".$_GET['population']."' WHERE id='"
.$_GET['id']."'";
 mysqli_query($conn, $zapros);
if (mysqli_affected_rows()>0) {
 echo 'Все сохранено. <a href="index.php"> Вернуться </a>'; }
 else { echo 'Ошибка сохранения. <a href="index.php">
Вернуться</a> '; }
?>
</body></html>