<?php
 mysql_connect("localhost","root","") or die ("����������
������������ � �������");
 mysql_select_db("os") or die("��� ����� �������!");
 $zapros="DELETE FROM os WHERE id='" . $_GET['id']."'";
 mysql_query($zapros);
 header("Location: index.php");
 exit;
?>