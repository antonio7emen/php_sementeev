<?php
session_start();
if(!$_SESSION["type"]) header("Location: .");
?>

<?php
 // ����������� � ���� ������:
 mysql_connect("localhost","root","") or die ("����������
������������ � �������");
 mysql_query('SET NAMES cp1251'); // ��� ���������
 mysql_select_db("os") or die("��� ����� �������!");
 // ������ ������� �� ���������� ������ � �������:
 $sql_add = "INSERT INTO ds SET name='" . $_GET['name']
."', url='".$_GET['url'] . "'";
 mysql_query($sql_add); // ���������� �������
 if (mysql_affected_rows()>0) // ���� ��� ������ ��� ���������� �������
 { print "<p>������ ���������.";
 print "<p><a href=\"index.php\"> ��������� � ������
������������� </a>"; }
 else { print "������ ����������. <a href=\"index.php\">
��������� � ������ ���� </a>"; }
?>