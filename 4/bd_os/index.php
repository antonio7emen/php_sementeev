<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<html>
<head> <title> ������������ ������� </title> </head>
<body>
<?php
 mysqli_connect("eu-cdbr-west-01.cleardb.com","b82a476b3b9e9d","0de723ba") or die ("���������� ������������ � �������"); // ������������ ���������� � ��������
 mysqli_query('SET NAMES cp1251'); // ��� ���������
 mysqli_select_db("heroku_3e0e4fe3001638d") or die("��� ����� �������!");
?>
<h2>������������ �������:</h2>
<table border="1">
<tr>
 <th> id </th>
 <th> �������� </th> <th> ������������ </th>
 <th> ����������� </th> <th> ����������� </th> <th> �������������, ���. </th>
 <th> ������������� </th> <th> ���������� </th> </tr>
<?php
$result=mysqli_query("SELECT * FROM os"); // ������ �� ������� �������� � �������������
while ($row=mysqli_fetch_array($result)){// ��� ������ ������ �� �������
 echo "<tr>";
 echo "<td>" . $row["id"] . "</td>";
 echo "<td>" . $row["name"] . "</td>";
 echo "<td>" . $row["equipment"] . "</td>";
 echo "<td>" . $row["bitness"] . "</td>";
 echo "<td>" . $row["developer"] . "</td>";
 echo "<td>" . $row["population"] . "</td>";
 echo "<td><a href='edit_os.php?id=" . $row["id"]
. "'>�������������</a></td>"; // ������ ������� ��� ��������������
 echo "<td><a href='delete_os.php?id=" . $row["id"]
. "'>�������</a></td>"; // ������ ������� ��� �������� ������
 echo "</tr>";
}
echo "</table>";
$num_rows = mysqli_num_rows($result); // ����� ������� � ������� ��
print("<P>����� �������: $num_rows </p>");
?>
<p> <a href="new_os.php"> �������� ������ </a>

<h2>�������� ��������:</h2>
<table border="1">
<tr>
 <th> id </th>
 <th> �������� </th> <th> URL </th>
 <th> ������������� </th> <th> ���������� </th> </tr>
<?php
$result=mysqli_query("SELECT * FROM ds");
while ($row=mysqli_fetch_array($result)){// ��� ������ ������ �� �������
 echo "<tr>";
 echo "<td>" . $row["id"] . "</td>";
 echo "<td>" . $row["name"] . "</td>";
 echo "<td>" . $row["url"] . "</td>";
 echo "<td><a href='edit_ds.php?id=" . $row["id"]
. "'>�������������</a></td>"; // ������ ������� ��� ��������������
 echo "<td><a href='delete_ds.php?id=" . $row["id"]
. "'>�������</a></td>"; // ������ ������� ��� �������� ������
 echo "</tr>";
}
echo "</table>";
$num_rows = mysqli_num_rows($result); // ����� ������� � ������� ��
print("<P>����� �������: $num_rows </p>");
?>
<p> <a href="new_ds.php"> �������� ������ </a>

<h2>�������� �����:</h2>
<table border="1">
<tr>
 <th> id </th>
 <th> ���� ������������ </th> <th> ���� ��������� </th>
 <th> id �� </th> <th> id ��������� �������� </th> 
 <th> ���������, $ </th> <th> ���� </th> </tr>
<?php
$result=mysqli_query("SELECT * FROM dk");
while ($row=mysqli_fetch_array($result)){// ��� ������ ������ �� �������
 echo "<tr>";
 echo "<td>" . $row["id"] . "</td>";
 echo "<td>" . $row["date_in"] . "</td>";
 echo "<td>" . $row["date_out"] . "</td>";
 echo "<td>" . $row["id_os"] . "</td>";
 echo "<td>" . $row["id_ds"] . "</td>";
 echo "<td>" . $row["price"] . "</td>";
 echo "<td>" . $row["key"] . "</td>";
 echo "<td><a href='edit_dk.php?id=" . $row["id"]
. "'>�������������</a></td>"; // ������ ������� ��� ��������������
 echo "<td><a href='delete_dk.php?id=" . $row["id"]
. "'>�������</a></td>"; // ������ ������� ��� �������� ������
 echo "</tr>";
}
echo "</table>";
$num_rows = mysqli_num_rows($result); // ����� ������� � ������� ��
print("<P>����� �������: $num_rows </p>");
?>
<p> <a href="new_dk.php"> �������� ������ </a>
<br><br>
<p> <a href="gen_pdf.php"> ��������� PDF </a>
<p> <a href="gen_xls.php"> ��������� Excel </a>

</body> </html>
