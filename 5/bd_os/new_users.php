<?php
 session_start();
 if($_SESSION["type"] == 2) { //������ ��������������
  echo "<html><head><title>���������� ����� ������</title></head><body>";
  echo "<h2>���������� ����� ������:</h2>";
  echo "<form action='save_new_users.php' metod='get'>";
  echo "<br>��� ������������: <input name='username' size='20' type='text'>";
  echo "<br>������: <input name='password' size='20' type='password'>";
  echo "<br>����� �������: <input name='type' size='10' type='text'><br><br>";
  echo "<input name='add' type='submit' value='��������'>";
  echo "<input name='b2' type='reset' value='��������'></form>";
  echo "<a href='index.php'>���������</a></body></html>";
 }
 else {
  header("Location: .");
 }
?>