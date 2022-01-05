<?php
 // Подключение к базе данных:
 $conn = mysqli_connect("eu-cdbr-west-01.cleardb.com","b82a476b3b9e9d","0de723ba", "heroku_3e0e4fe3001638d") or die ("Невозможно подключиться к серверу");
 mysql_query($conn, 'SET NAMES cp1251'); // Тип кодировки
 // Строка запроса на добавление записи в таблицу:
 $sql_add = "INSERT INTO ds SET name='" . $_GET['name']
."', url='".$_GET['url'] . "'";
 mysql_query($conn, $sql_add); // Выполнение запроса
 if (mysql_affected_rows()>0) // если нет ошибок при выполнении запроса
 { print "<p>Запись сохранена.";
 print "<p><a href=\"index.php\"> Вернуться к списку
пользователей </a>"; }
 else { print "Ошибка сохранения. <a href=\"index.php\">
Вернуться к списку книг </a>"; }
?>