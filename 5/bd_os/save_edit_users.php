<?php
session_start();
if($_SESSION["type"] != 2) header("Location: .");
?>

<html><body>
<?php
 mysql_connect("localhost","root","") or die ("���������� ������������ � �������!");
 mysql_query('SET NAMES cp1251');
 mysql_select_db("os") or die("���� ������ �����������!");
 $zapros="UPDATE users SET username='".$_GET['username']."', password='".md5($_GET['password'])."', type='".$_GET['type']."' WHERE username='".$_GET['username']."'";
 mysql_query($zapros);
 if (mysql_affected_rows() > 0) {
  echo "��� ���������. <a href='.'>��������� �� �������</a>";
 }
 else {
  echo "������ ����������. <a href='.'>��������� �� �������</a>";
 }
?>
</body></html>