<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<html>
<head> <title> Сведения о прользователях сайта </title> </head>
<body>
<?php
 $conn = mysqli_connect("eu-cdbr-west-01.cleardb.com","b82a476b3b9e9d","0de723ba", "heroku_3e0e4fe3001638d") or die ("Невозможно подключиться к серверу");
 mysqli_query($conn, 'SET NAMES cp1251'); // тип кодировки
?>
<h2>Зарегистрированные пользователи:</h2>
<table border="1">
<tr> // вывод «шапки» таблицы
 <th> Имя </th> <th> E-mail </th>
 <th> Редактировать </th> <th> Уничтожить </th> </tr>
<?php
$result=mysqli_query($conn, "SELECT id_user, user_name, user_e_mail
FROM user"); // запрос на выборку сведений о пользователях
while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
 echo "<tr>";
 echo "<td>" . $row['user_name'] . "</td>";
 echo "<td>" . $row['user_e_mail'] . "</td>";
 echo "<td><a href='edit.php?id_user=" . $row['id_user']
. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
 echo "<td><a href='delete.php?id_user=" . $row['id_user']
. "'>Удалить</a></td>"; // запуск скрипта для удаления записи
 echo "</tr>";
}
print "</table>";
$num_rows = mysqli_num_rows($result); // число записей в таблице БД
print("<P>Всего пользователей: $num_rows </p>");
?>
<p> <a href="new.php"> Добавить пользователя </a>
</body> </html>
