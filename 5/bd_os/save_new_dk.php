<?php
session_start();
if(!$_SESSION["type"]) header("Location: .");
?>

<?php
 // Подключение к базе данных:
 $conn = mysqli_connect("eu-cdbr-west-01.cleardb.com","b82a476b3b9e9d","0de723ba", "heroku_3e0e4fe3001638d") or die ("Невозможно подключиться к серверу");
 mysqli_query($conn, 'SET NAMES cp1251'); // Тип кодировки
 // Строка запроса на добавление записи в таблицу:
 $sql_add = "INSERT INTO dk (`id`, `date_in`, `date_out`, `id_os`, `id_ds`, `price`, `key`) VALUES (NULL, '".$_GET["date_in"]."', '".$_GET["date_out"]."', '".$_GET["id_os"]."', '".$_GET["id_ds"]."', '".$_GET["price"]."', '".$_GET["key"]."')";
 mysqli_query($conn, $sql_add); // Выполнение запроса
 if (mysqli_affected_rows($conn)>0) // если нет ошибок при выполнении запроса
 { print "<p>Запись сохранена.";
 print "<p><a href=\"index.php\"> Вернуться на главную </a>"; }
 else { print "Ошибка сохранения. <a href=\"index.php\">
Вернуться на главную </a>"; }
?>