<?php
 mysql_connect("localhost","root","") or die ("����������
������������ � �������");
 mysql_select_db("users") or die("��� ����� �������!");
 $zapros="DELETE FROM user WHERE id_user=" . $_GET['id_user'];
 mysql_query($zapros);
 header("Location: index.php");
 exit;
?>