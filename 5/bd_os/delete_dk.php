<?php
 session_start();
 if($_SESSION["type"] == 2) {
 mysql_connect("localhost","root","") or die ("����������
������������ � �������");
 mysql_select_db("os") or die("��� ����� �������!");
 $zapros="DELETE FROM dk WHERE id=" . $_GET['id'];
 mysql_query($zapros);
 }
 header("Location: index.php");
 exit;
?>