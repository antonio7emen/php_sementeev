<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<?php
session_start();
if(!$_SESSION["type"]) header("Location: .");
?>

<html>
<head> <title> ���������� ����� ������ </title> </head>
<body>
<H2>���������� ����� ������:</H2>

<?php
 $conn = mysqli_connect("eu-cdbr-west-01.cleardb.com","b82a476b3b9e9d","0de723ba", "heroku_3e0e4fe3001638d") or die ("���������� ������������ � �������");
 mysqli_query($conn, "SET NAMES cp1251");
?>

<form action="save_new_dk.php" metod="get">
<br>���� ������������: <input name="date_in" size="20" type="date">
<br>���� ���������: <input name="date_out" size="20" type="date">

<?php
print "<br>id ��: <select name='id_os'>";
$result=mysqli_query($conn, "SELECT * FROM os");
echo "<option value='' selected hidden>...</option>";
foreach($result as $row) echo "<option value='".$row["id"]."'>".$row["name"]." ".$row["model"]."</option>";
echo "</select>";
?>

<?php
print "<br>id ��������� ��������: <select name='id_ds'>";
$result=mysqli_query($conn, "SELECT * FROM ds");
echo "<option value='' selected hidden>...</option>";
foreach($result as $row) echo "<option value='".$row["id"]."'>".$row["name"]." ".$row["model"]."</option>";
echo "</select>";
?>

<br>���������, $: <input name="price" size="20" type="text">
<br>����: <input name="key" size="20" type="text">
<p><input name="add" type="submit" value="��������">
<input name="b2" type="reset" value="��������"></p>
</form>
<p>
<a href="index.php"> ��������� </a>
</body>
</html>