<?php
 session_start();
 if($_SESSION["type"] == 2) { //������ ��������������
  mysql_connect("localhost","root","") or die ("���������� ������������ � �������!");
  mysql_query('SET NAMES cp1251');
  mysql_select_db("os") or die("���� ������ �����������!");
  $sql_add = "INSERT INTO users SET username='" . $_GET['username']."', password='".md5($_GET['password'])."', type='".$_GET['type']. "'";
  mysql_query($sql_add);
  if (mysql_affected_rows()>0) { // ���� ��� ������ ��� ���������� �������
   echo "������ ���������.<br>";
   echo "<a href='.'>��������� �� �������</a>";
  }
  else {
   echo "������ ����������. <a href='.'>��������� �� �������</a>";
  }
 }
 else {
  header("Location: .");
 }
?>