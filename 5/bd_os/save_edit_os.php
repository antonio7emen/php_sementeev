<?php
session_start();
if(!$_SESSION["type"]) header("Location: .");
?>

<html><body>
<?php
 mysql_connect("localhost","root","") or die ("����������
������������ � �������");
 mysql_query('SET NAMES cp1251');
 mysql_select_db("os") or die("��� ����� �������!");
 $zapros="UPDATE os SET name='".$_GET['name'].
"', equipment='".$_GET['equipment']."', bitness='"
.$_GET['bitness']."', developer='".$_GET['developer'].
"', population='".$_GET['population']."' WHERE id='"
.$_GET['id']."'";
 mysql_query($zapros);
if (mysql_affected_rows()>0) {
 echo '��� ���������. <a href="index.php"> ��������� </a>'; }
 else { echo '������ ����������. <a href="index.php">
���������</a> '; }
?>
</body></html>