<?php
session_start();
if(!$_SESSION["type"]) header("Location: .");
?>

<html>
<head
<title> �������������� ������ </title>
</head>
<body>
<?php
 mysql_connect("localhost","root","") or die ("����������
������������ � �������");
 mysql_query('SET NAMES cp1251');
 mysql_select_db("os") or die("��� ����� �������!");
 $rows=mysql_query("SELECT name, url FROM ds WHERE id=".$_GET['id']);
 while ($st = mysql_fetch_array($rows)) {
 $name=$st["name"];
 $url = $st['url'];
 }
print "<form action='save_edit_ds.php' metod='get'>";
print "��������: <input name='name' size='20' type='text'
value='".$name."'>";
print "<br>URL: <input name='url' size='20' type='text'
value='".$url."'>";
print "<input type='hidden' name='id' value='".$_GET['id']."'>";
print "<input type='submit' name='' value='���������'>";
print "</form>";
print "<p><a href=\"index.php\"> ��������� </a>";
?>
</body>
</html>