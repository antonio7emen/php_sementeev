<?php
 session_start();
 if($_SESSION["type"] == 2) {
 $conn = mysqli_connect("eu-cdbr-west-01.cleardb.com","b82a476b3b9e9d","0de723ba", "heroku_3e0e4fe3001638d") or die ("���������� ������������ � �������");
 mysqli_query($conn, 'SET NAMES cp1251');
  $rows=mysqli_query($conn, "SELECT username, type FROM users WHERE username='".$_GET['username']."'");
  while ($st = mysqli_fetch_array($rows)) {
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