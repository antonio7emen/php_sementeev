<?php
session_start();
if(!$_SESSION["type"]) header("Location: .");
?>

<?php
 // Подключение к базе данных:
 mysql_connect("localhost","root","") or die ("Невозможно
подключиться к серверу");
 mysql_query('SET NAMES cp1251'); // Тип кодировки
 mysql_select_db("os") or die("Нет такой таблицы!");
 // Строка запроса на добавление записи в таблицу:
 $sql_add = "INSERT INTO os SET name='" . $_GET['name']
."', equipment='".$_GET['equipment']."', bitness='"
.$_GET['bitness']."', developer='".$_GET['developer'].
"', population='".$_GET['population']. "'";
 mysql_query($sql_add); // Выполнение запроса
 if (mysql_affected_rows()>0) // если нет ошибок при выполнении запроса
 { print "<p>Запись сохранена.";
 print "<p><a href=\"index.php\"> Вернуться </a>"; }
 else { print "Ошибка сохранения. <a href=\"index.php\">
Вернуться </a>"; }
?>