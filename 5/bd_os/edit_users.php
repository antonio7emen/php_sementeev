<?php
 session_start();
 if($_SESSION["type"] == 2) {
 mysql_connect("localhost","root","") or die ("���������� ������������ � �������!");
 mysql_query('SET NAMES cp1251');
 mysql_select_db("os") or die("���� ������ �����������!");
  $rows=mysql_query("SELECT username, type FROM users WHERE username='".$_GET['username']."'");
  while ($st = mysql_fetch_array($rows)) {
   $username=$_GET["username"];
   $type = $st['type'];
  }
  echo "<html><head><title>�������������� ������</title></head><body>";
  echo "<form action='save_edit_users.php' metod='get'>";
  echo "��� ������������: <input name='username' size='20' type='text' value='".$username."'>";
  echo "<br>������: <input name='password' size='20' type='password' value=''>";
  echo "<br>����� �������: <input name='type' size='10' type='text' value='".$type."'>";
  echo "<input type='submit' name='' value='���������'></form>";
  echo "<p><a href='.'>��������� �� �������</a></body></html>";
 }
 else {
  header("Location: .");
 }
?>