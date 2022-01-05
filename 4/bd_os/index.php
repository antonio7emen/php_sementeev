<html>
<head> <title> Сведения о популярных операционных системах </title> </head>
<body>
<?php
 mysql_connect("localhost", "root") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
 mysql_query('SET NAMES cp1251'); // тип кодировки
 // подключение к базе данных:
 mysql_select_db("os") or die("Нет такой таблицы!");
?>
<h2>Операционные системы:</h2>
<table border="1">
<tr>
 <th> id </th>
 <th> Название </th> <th> Оборудование </th>
 <th> Разрядность </th> <th> Разработчик </th> <th> Пользователей, млн. </th>
 <th> Редактировать </th> <th> Уничтожить </th> </tr>
<?php
$result=mysql_query("SELECT * FROM os"); // запрос на выборку сведений о пользователях
while ($row=mysql_fetch_array($result)){// для каждой строки из запроса
 echo "<tr>";
 echo "<td>" . $row["id"] . "</td>";
 echo "<td>" . $row["name"] . "</td>";
 echo "<td>" . $row["equipment"] . "</td>";
 echo "<td>" . $row["bitness"] . "</td>";
 echo "<td>" . $row["developer"] . "</td>";
 echo "<td>" . $row["population"] . "</td>";
 echo "<td><a href='edit_os.php?id=" . $row["id"]
. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
 echo "<td><a href='delete_os.php?id=" . $row["id"]
. "'>Удалить</a></td>"; // запуск скрипта для удаления записи
 echo "</tr>";
}
echo "</table>";
$num_rows = mysql_num_rows($result); // число записей в таблице БД
print("<P>Всего записей: $num_rows </p>");
?>
<p> <a href="new_os.php"> Добавить запись </a>

<h2>Цифровые магазины:</h2>
<table border="1">
<tr>
 <th> id </th>
 <th> Название </th> <th> URL </th>
 <th> Редактировать </th> <th> Уничтожить </th> </tr>
<?php
$result=mysql_query("SELECT * FROM ds");
while ($row=mysql_fetch_array($result)){// для каждой строки из запроса
 echo "<tr>";
 echo "<td>" . $row["id"] . "</td>";
 echo "<td>" . $row["name"] . "</td>";
 echo "<td>" . $row["url"] . "</td>";
 echo "<td><a href='edit_ds.php?id=" . $row["id"]
. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
 echo "<td><a href='delete_ds.php?id=" . $row["id"]
. "'>Удалить</a></td>"; // запуск скрипта для удаления записи
 echo "</tr>";
}
echo "</table>";
$num_rows = mysql_num_rows($result); // число записей в таблице БД
print("<P>Всего записей: $num_rows </p>");
?>
<p> <a href="new_ds.php"> Добавить запись </a>

<h2>Цифровые ключи:</h2>
<table border="1">
<tr>
 <th> id </th>
 <th> Дата приобретения </th> <th> Дата окончания </th>
 <th> id ОС </th> <th> id Цифрового магазина </th> 
 <th> Стоимость, $ </th> <th> Ключ </th> </tr>
<?php
$result=mysql_query("SELECT * FROM dk");
while ($row=mysql_fetch_array($result)){// для каждой строки из запроса
 echo "<tr>";
 echo "<td>" . $row["id"] . "</td>";
 echo "<td>" . $row["date_in"] . "</td>";
 echo "<td>" . $row["date_out"] . "</td>";
 echo "<td>" . $row["id_os"] . "</td>";
 echo "<td>" . $row["id_ds"] . "</td>";
 echo "<td>" . $row["price"] . "</td>";
 echo "<td>" . $row["key"] . "</td>";
 echo "<td><a href='edit_dk.php?id=" . $row["id"]
. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
 echo "<td><a href='delete_dk.php?id=" . $row["id"]
. "'>Удалить</a></td>"; // запуск скрипта для удаления записи
 echo "</tr>";
}
echo "</table>";
$num_rows = mysql_num_rows($result); // число записей в таблице БД
print("<P>Всего записей: $num_rows </p>");
?>
<p> <a href="new_dk.php"> Добавить запись </a>
<br><br>
<p> <a href="gen_pdf.php"> Сохранить PDF </a>
<p> <a href="gen_xls.php"> Сохранить Excel </a>

</body> </html>
