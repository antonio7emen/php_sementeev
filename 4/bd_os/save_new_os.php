<?php
 // ����������� � ���� ������:
 mysql_connect("localhost","root","") or die ("����������
������������ � �������");
 mysql_query('SET NAMES cp1251'); // ��� ���������
 mysql_select_db("os") or die("��� ����� �������!");
 // ������ ������� �� ���������� ������ � �������:
 $sql_add = "INSERT INTO os SET name='" . $_GET['name']
."', equipment='".$_GET['equipment']."', bitness='"
.$_GET['bitness']."', developer='".$_GET['developer'].
"', population='".$_GET['population']. "'";
 mysql_query($sql_add); // ���������� �������
 if (mysql_affected_rows()>0) // ���� ��� ������ ��� ���������� �������
 { print "<p>������ ���������.";
 print "<p><a href=\"index.php\"> ��������� </a>"; }
 else { print "������ ����������. <a href=\"index.php\">
��������� </a>"; }
?>