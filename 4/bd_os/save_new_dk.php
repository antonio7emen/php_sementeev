<?php
 // Подключение к базе данных:
 mysql_connect("localhost","root","") or die ("Невозможно
подключиться к серверу");
 mysql_query('SET NAMES cp1251'); // Тип кодировки
 mysql_select_db("os") or die("Нет такой таблицы!");
 // Строка запроса на добавление записи в таблицу:
 $sql_add = "INSERT INTO os.dk (`id`, `date_in`, `date_out`, `id_os`, `id_ds`, `price`, `key`) VALUES (NULL, '".$_GET["date_in"]."', '".$_GET["date_out"]."', '".$_GET["id_os"]."', '".$_GET["id_ds"]."', '".$_GET["price"]."', '".$_GET["key"]."')";
 mysql_query($sql_add); // Выполнение запроса
 if (mysql_affected_rows()>0) // если нет ошибок при выполнении запроса
 { print "<p>Запись сохранена.";
 print "<p><a href=\"index.php\"> Вернуться на главную </a>"; }
 else { print "Ошибка сохранения. <a href=\"index.php\">
Вернуться на главную </a>"; }
?>