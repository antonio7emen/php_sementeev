<?php
 session_start(); //�������������� ������

 mysql_connect("localhost", "root") or die ("���������� ������������ � �������!"); //������������ � ���� ������
 mysql_query('SET NAMES cp1251');
 mysql_select_db("os") or die("���� ������ �����������!");

 if($_SERVER["REQUEST_METHOD"] == "POST") { //���� ������ ��� �������� ����� �����(POST), �� ��������� ������������ ����� ������������ � ������
  $query=mysql_query("SELECT username, type FROM users WHERE username='".$_POST["username"]."' AND password='".md5($_POST["password"])."'");
  if($fetch = mysql_fetch_array($query)) { //���� ��� ������������ � ������ ���� � ���� ������, �� ��������� ���������� ������
   $_SESSION["username"] = $fetch["username"];
   $_SESSION["type"] = $fetch["type"];
   $_SESSION["count"] = 0;
  }
  else { //���� ��� ������������ � ������ �� ������� � ���� ������, �� �������� 
   echo "<html><head><title>�����������</title></head><body>";
   echo "�������� ��� ������������ ��� ������!<br>";
   echo "<p><a href='.'> ��������� </a>";
  }
 }
 elseif(!$_SESSION["username"]) { //���� ������ ��� �������� ����� ������(GET) � ���������� ������ �����, ������ ������� ����� ����������� 
  echo "<html><head><title>�����������</title></head><body>";
  echo "<h1 align='center'>������������ �������</h1>";
  echo "<div align='center'><form method='post' action='". $PHP_SELF ."'>";
  echo "<p>������������:</p><input type='text' name='username' size='16'>";
  echo "<p>������:</p><input type='password' name='password' size='16'><br><br>";
  echo "<input type='submit' name='submit' value='�����'></form></div>";
 }

 if($_SESSION["username"]) { //���� ������ �������, ������� ��������� ���� ������
  $query=mysql_query("SELECT type FROM users WHERE username='" . $_SESSION["username"] . "'");
  if($fetch = mysql_fetch_array($query)) $_SESSION["type"] = $fetch["type"];

  echo "<html><head><title>" . $_SESSION["username"] . "</title></head><body>"; //������ �������� ������� �� ��� ������������
  echo "<h2>������������ �������:</h2>";
  echo "<table border='1'>";
  echo "<tr><th>id</th><th>��������</th><th>������������</th><th>�����������</th>";
  echo "<th>�����������</th><th>�������������, ���.</th><th>�������������</th>";
  if($_SESSION["type"] == 2) echo "<th>����������</th>";
  echo "</tr>";
  $query=mysql_query("SELECT * FROM os");
  while($fetch=mysql_fetch_array($query)) {
   echo "<tr><td>" . $fetch["id"] . "</td>";
   echo "<td>" . $fetch["name"] . "</td>";
   echo "<td>" . $fetch["equipment"] . "</td>";
   echo "<td>" . $fetch["bitness"] . "</td>";
   echo "<td>" . $fetch["developer"] . "</td>";
   echo "<td>" . $fetch["population"] . "</td>";
   echo "<td><a href='edit_os.php?&id=" . $fetch["id"] . "'>�������������</a></td>";
   if($_SESSION["type"] == 2) echo "<td><a href='delete_os.php?id=" . $fetch["id"]. "'>�������</a></td>";
   echo "</tr>";
  }
  echo "</table><br>";
  $num_rows = mysql_num_rows($query);
  echo "����� �������: " . $num_rows . " ";
  echo "<a href='new_os.php'>�������� ������</a>";

  echo "<h2>�������� ��������:</h2>";
  echo "<table border='1'>";
  echo "<tr><th>id</th><th>��������</th><th>URL</th><th>�������������</th>";
  if($_SESSION["type"] == 2) echo "<th>����������</th>";
  echo "</tr>";
  $query=mysql_query("SELECT * FROM ds");
  while($fetch=mysql_fetch_array($query)) {
   echo "<tr><td>" . $fetch["id"] . "</td>";
   echo "<td>" . $fetch["name"] . "</td>";
   echo "<td>" . $fetch["url"] . "</td>";
   echo "<td><a href='edit_ds.php?&id=" . $fetch["id"] . "'>�������������</a></td>";
   if($_SESSION["type"] == 2) echo "<td><a href='delete_ds.php?id=" . $fetch["id"]. "'>�������</a></td>";
   echo "</tr>";
  }
  echo "</table><br>";
  $num_rows = mysql_num_rows($query);
  echo "����� �������: " . $num_rows . " ";
  echo "<a href='new_ds.php'>�������� ������</a>";

  echo "<h2>�������� �����:</h2>";
  echo "<table border='1'>";
  echo "<tr><th>id</th><th>���� ������������</th><th>���� ���������</th>";
  echo "<th>id ��</th><th>id ��������� ��������</th><th>���������, $";
  echo "</th><th>����</th><th>�������������</th>";
  if($_SESSION["type"] == 2) echo "<th>����������</th>";
  echo "</tr>";
  $query=mysql_query("SELECT * FROM dk");
  while($fetch=mysql_fetch_array($query)) {
   echo "<tr><td>" . $fetch["id"] . "</td>";
   echo "<td>" . $fetch["date_in"] . "</td>";
   echo "<td>" . $fetch["date_out"] . "</td>";
   echo "<td>" . $fetch["id_os"] . "</td>";
   echo "<td>" . $fetch["id_ds"] . "</td>";
   echo "<td>" . $fetch["price"] . "</td>";
   echo "<td>" . $fetch["key"] . "</td>";
   echo "<td><a href='edit_dk.php?&id=" . $fetch["id"] . "'>�������������</a></td>";
   if($_SESSION["type"] == 2) echo "<td><a href='delete_dk.php?id=" . $fetch["id"]. "'>�������</a></td>";
   echo "</tr>";
  }
  echo "</table><br>";
  $num_rows = mysql_num_rows($query);
  echo "����� �������: " . $num_rows . " ";
  echo "<a href='new_dk.php'>�������� ������</a>";
  

  if($_SESSION["type"] == 2) {
   echo "<h2>������������:</h2>";
   echo "<table border='1'>";
   echo "<tr><th>��� ������������</th><th>������</th><th>����� �������</th>";
   echo "<th>�������������</th><th>����������</th></tr>";
   $query=mysql_query("SELECT username, password, type FROM users");
   while($fetch=mysql_fetch_array($query)) {
    echo "<tr><td>" . $fetch["username"] . "</td>";
    echo "<td>" . $fetch["password"] . "</td>";
    echo "<td>" . $fetch["type"] . "</td>";
    echo "<td><a href='edit_users.php?username=" . $fetch["username"] . "'>�������������</a></td>";
    echo "<td><a href='delete_users.php?username=" . $fetch["username"]. "'>�������</a></td></tr>";
   }
   echo "</table><br>";
   
   $num_rows = mysql_num_rows($query);
   echo "����� �������: " . $num_rows . " ";
   echo "<a href='new_users.php'>�������� ������</a>";
  }

  echo "<br><br>";
  echo "<a href='gen_pdf.php'> ��������� PDF </a><br>";
  echo "<a href='gen_xls.php'> ��������� Excel </a><br>";
  
  $_SESSION["count"]++;
  echo "<br><br><br><br>���������� ����������� �� ������: " . $_SESSION["count"];
  echo "<br><a href='exit.php'>�����</a>"; //������ ������� �������� ������
 }
?>