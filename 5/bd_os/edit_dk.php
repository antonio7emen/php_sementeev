<?php header('Content-Type: text/html; charset=windows-1251'); ?>

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
 $conn = mysqli_connect("eu-cdbr-west-01.cleardb.com","b82a476b3b9e9d","0de723ba", "heroku_3e0e4fe3001638d") or die ("���������� ������������ � �������");
 mysqli_query($conn, 'SET NAMES cp1251');
 $rows=mysqli_query($conn, "SELECT * FROM dk WHERE id=".$_GET['id']);
 while ($st = mysqli_fetch_array($rows)) {
 $date_in=$st["date_in"];
 $date_out=$st["date_out"];
 $id_os=$st["id_os"];
 $id_ds=$st["id_ds"];
 $price = $st['price'];
 $key = $st['key'];
 }
print "<form action='save_edit_dk.php' metod='get'>";
print "<br>���� ������������: <input name='date_in' size='20' type='date'
value='".$date_in."'>";
print "<br>���� ���������: <input name='date_out' size='20' type='date'
value='".$date_out."'>";
print "<br>id ��: <input name='id_os' size='20' type='text'
value='".$id_os."'>";
print "<br>id ��������� ��������: <input name='id_ds' size='20' type='text'
value='".$id_ds."'>";
print "<br>���������, $: <input name='price' size='20' type='text'
value='".$price."'>";
print "<br>����: <input name='key' size='20' type='text'
value='".$key."'>";
print "<input type='hidden' name='id' value='".$_GET['id']."'>";
print "<input type='submit' name='' value='���������'>";
print "</form>";
print "<p><a href=\"index.php\"> ��������� </a>";
?>
</body>
</html>