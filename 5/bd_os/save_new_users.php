<?php
 session_start();
 if($_SESSION["type"] == 2) { //������ ��������������
  $conn = mysqli_connect("eu-cdbr-west-01.cleardb.com","b82a476b3b9e9d","0de723ba", "heroku_3e0e4fe3001638d") or die ("���������� ������������ � �������");
  mysqli_query($conn, 'SET NAMES cp1251');
  $sql_add = "INSERT INTO users SET username='" . $_GET['username']."', password='".md5($_GET['password'])."', type='".$_GET['type']. "'";
  mysqli_query($conn, $sql_add);
  if (mysqli_affected_rows($conn)>0) { // ���� ��� ������ ��� ���������� �������
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