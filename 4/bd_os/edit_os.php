<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<html>
<head
<title> �������������� ������ </title>
</head>
<body>
<?php
 $conn = mysqli_connect("eu-cdbr-west-01.cleardb.com","b82a476b3b9e9d","0de723ba", "heroku_3e0e4fe3001638d") or die ("���������� ������������ � �������");
 mysqli_query($conn, 'SET NAMES cp1251');
 $rows=mysqli_query($conn, "SELECT * FROM os WHERE id='".$_GET['id']."'");
 while ($st = mysqli_fetch_array($rows)) {
 $id=$st['id'];
 $name=$st['name'];
 $equipment = $st['equipment'];
 $bitness = $st['bitness'];
 $developer = $st['developer'];
 $population = $st['population'];
 }
print "<form action='save_edit_os.php' metod='get'>";
print "��������: <input name='name' size='20' type='text'
value='".$name."'>";
print "<br>������������: <input name='equipment' size='20' type='text'
value='".$equipment."'>";
print "<br>�����������: <input name='bitness' size='10' type='text'
value='".$bitness."'>";
print "<br>�����������: <input name='developer' size='20' type='text'
value='".$developer."'>";
print "<br>�������������, ���.: <input name='population' size='10' type='text'
value='".$population."'>";
print "<input type='hidden' name='id' value='".$id."'> <br>";
print "<input type='submit' name='' value='���������'>";
print "</form>";
print "<p><a href=\"index.php\"> ��������� </a>";
?>
</body>
</html>