<html>
<head> <title> �������� � �������������� ����� </title> </head>
<body>
<?php
 mysql_connect("localhost", "root") or die ("����������
������������ � �������"); // ������������ ���������� � ��������
 mysql_query('SET NAMES cp1251'); // ��� ���������
 // ����������� � ���� ������:
 mysql_select_db("users") or die("��� ����� �������!");
?>
<h2>������������������ ������������:</h2>
<table border="1">
<tr> // ����� ������ �������
 <th> ��� </th> <th> E-mail </th>
 <th> ������������� </th> <th> ���������� </th> </tr>
<?php
$result=mysql_query("SELECT id_user, user_name, user_e_mail
FROM user"); // ������ �� ������� �������� � �������������
while ($row=mysql_fetch_array($result)){// ��� ������ ������ �� �������
 echo "<tr>";
 echo "<td>" . $row['user_name'] . "</td>";
 echo "<td>" . $row['user_e_mail'] . "</td>";
 echo "<td><a href='edit.php?id_user=" . $row['id_user']
. "'>�������������</a></td>"; // ������ ������� ��� ��������������
 echo "<td><a href='delete.php?id_user=" . $row['id_user']
. "'>�������</a></td>"; // ������ ������� ��� �������� ������
 echo "</tr>";
}
print "</table>";
$num_rows = mysql_num_rows($result); // ����� ������� � ������� ��
print("<P>����� �������������: $num_rows </p>");
?>
<p> <a href="new.php"> �������� ������������ </a>
</body> </html>
