<?php
 // ����������� � ���� ������:
 mysql_connect("localhost","root","") or die ("����������
������������ � �������");
 mysql_query('SET NAMES cp1251'); // ��� ���������
 mysql_select_db("users") or die("��� ����� �������!");
 // ������ ������� �� ���������� ������ � �������:
 $sql_add = "INSERT INTO user SET user_name='" . $_GET['name']
."', user_login='".$_GET['login']."', user_password='"
.$_GET['password']."', user_e_mail='".$_GET['e_mail'].
"', user_info='".$_GET['info']. "'";
 mysql_query($sql_add); // ���������� �������
 if (mysql_affected_rows()>0) // ���� ��� ������ ��� ���������� �������
 { print "<p>�������, �� ���������������� � ���� ������.";
 print "<p><a href=\"index.php\"> ��������� � ������
������������� </a>"; }
 else { print "������ ����������. <a href=\"index.php\">
��������� � ������ ���� </a>"; }
?>