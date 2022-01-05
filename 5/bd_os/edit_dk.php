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
 $rows=mysql_query("SELECT * FROM dk WHERE id=".$_GET['id']);
 while ($st = mysql_fetch_array($rows)) {
 $date_in=$st["date_in"];
 $date_out=$st["date_out"];
 $id_os=$st["id_os"];
 $id_ds=$st["id_ds"];
 $price = $st['price'];
 $key = $st['key'];
 }
print "<form action='save_edit_dk.php' metod='get'>";
print "<br>Дата приобретения: <input name='date_in' size='20' type='date'
value='".$date_in."'>";
print "<br>Дата окончания: <input name='date_out' size='20' type='date'
value='".$date_out."'>";
print "<br>id ОС: <input name='id_os' size='20' type='text'
value='".$id_os."'>";
print "<br>id Цифрового магазина: <input name='id_ds' size='20' type='text'
value='".$id_ds."'>";
print "<br>Стоимость, $: <input name='price' size='20' type='text'
value='".$price."'>";
print "<br>Ключ: <input name='key' size='20' type='text'
value='".$key."'>";
print "<input type='hidden' name='id' value='".$_GET['id']."'>";
print "<input type='submit' name='' value='Сохранить'>";
print "</form>";
print "<p><a href=\"index.php\"> Вернуться </a>";
?>
</body>
</html>