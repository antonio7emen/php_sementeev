<?php
session_start();
if(!$_SESSION["type"]) header("Location: .");
?>

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
 $rows=mysql_query("SELECT name, url FROM ds WHERE id=".$_GET['id']);
 while ($st = mysql_fetch_array($rows)) {
 $name=$st["name"];
 $url = $st['url'];
 }
print "<form action='save_edit_ds.php' metod='get'>";
print "Название: <input name='name' size='20' type='text'
value='".$name."'>";
print "<br>URL: <input name='url' size='20' type='text'
value='".$url."'>";
print "<input type='hidden' name='id' value='".$_GET['id']."'>";
print "<input type='submit' name='' value='Сохранить'>";
print "</form>";
print "<p><a href=\"index.php\"> Вернуться </a>";
?>
</body>
</html>