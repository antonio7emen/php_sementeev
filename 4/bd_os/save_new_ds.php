<?php
 // ����������� � ���� ������:
 $conn = mysqli_connect("eu-cdbr-west-01.cleardb.com","b82a476b3b9e9d","0de723ba", "heroku_3e0e4fe3001638d") or die ("���������� ������������ � �������");
 mysql_query($conn, 'SET NAMES cp1251'); // ��� ���������
 // ������ ������� �� ���������� ������ � �������:
 $sql_add = "INSERT INTO ds SET name='" . $_GET['name']
."', url='".$_GET['url'] . "'";
 mysql_query($conn, $sql_add); // ���������� �������
 if (mysql_affected_rows()>0) // ���� ��� ������ ��� ���������� �������
 { print "<p>������ ���������.";
 print "<p><a href=\"index.php\"> ��������� � ������
������������� </a>"; }
 else { print "������ ����������. <a href=\"index.php\">
��������� � ������ ���� </a>"; }
?>