<html>
<head
<title> Редактирование данных </title>
</head>
<body>
<?php
 mysql_connect("localhost","root","") or die ("Невозможно
подключиться к серверу");
 mysql_query('SET NAMES cp1251');
 mysql_select_db("os") or die("Нет такой таблицы!");
 $rows=mysql_query("SELECT * FROM os WHERE id='".$_GET['id']."'");
 while ($st = mysql_fetch_array($rows)) {
 $id=$st['id'];
 $name=$st['name'];
 $equipment = $st['equipment'];
 $bitness = $st['bitness'];
 $developer = $st['developer'];
 $population = $st['population'];
 }
print "<form action='save_edit_os.php' metod='get'>";
print "Название: <input name='name' size='20' type='text'
value='".$name."'>";
print "<br>Оборудование: <input name='equipment' size='20' type='text'
value='".$equipment."'>";
print "<br>Разрядность: <input name='bitness' size='10' type='text'
value='".$bitness."'>";
print "<br>Разработчик: <input name='developer' size='20' type='text'
value='".$developer."'>";
print "<br>Пользователей, млн.: <input name='population' size='10' type='text'
value='".$population."'>";
print "<input type='hidden' name='id' value='".$id."'> <br>";
print "<input type='submit' name='' value='Сохранить'>";
print "</form>";
print "<p><a href=\"index.php\"> Вернуться </a>";
?>
</body>
</html>