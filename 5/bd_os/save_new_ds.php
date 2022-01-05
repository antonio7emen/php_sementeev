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
 $sql_add = "INSERT INTO ds SET name='" . $_GET['name']
."', url='".$_GET['url'] . "'";
 mysql_query($sql_add); // Выполнение запроса
 if (mysql_affected_rows()>0) // если нет ошибок при выполнении запроса
 { print "<p>Запись сохранена.";
 print "<p><a href=\"index.php\"> Вернуться к списку
пользователей </a>"; }
 else { print "Ошибка сохранения. <a href=\"index.php\">
Вернуться к списку книг </a>"; }
?>