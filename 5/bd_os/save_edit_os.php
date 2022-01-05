<?php
session_start();
if(!$_SESSION["type"]) header("Location: .");
?>

<html><body>
<?php
 mysql_connect("localhost","root","") or die ("Невозможно
подключиться к серверу");
 mysql_query('SET NAMES cp1251');
 mysql_select_db("os") or die("Нет такой таблицы!");
 $zapros="UPDATE os SET name='".$_GET['name'].
"', equipment='".$_GET['equipment']."', bitness='"
.$_GET['bitness']."', developer='".$_GET['developer'].
"', population='".$_GET['population']."' WHERE id='"
.$_GET['id']."'";
 mysql_query($zapros);
if (mysql_affected_rows()>0) {
 echo 'Все сохранено. <a href="index.php"> Вернуться </a>'; }
 else { echo 'Ошибка сохранения. <a href="index.php">
Вернуться</a> '; }
?>
</body></html>