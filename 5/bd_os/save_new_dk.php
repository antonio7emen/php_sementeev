<?php
session_start();
if(!$_SESSION["type"]) header("Location: .");
?>

<?php
 // ����������� � ���� ������:
 mysql_connect("localhost","root","") or die ("����������
������������ � �������");
 mysql_query('SET NAMES cp1251'); // ��� ���������
 mysql_select_db("os") or die("��� ����� �������!");
 // ������ ������� �� ���������� ������ � �������:
 $sql_add = "INSERT INTO os.dk (`id`, `date_in`, `date_out`, `id_os`, `id_ds`, `price`, `key`) VALUES (NULL, '".$_GET["date_in"]."', '".$_GET["date_out"]."', '".$_GET["id_os"]."', '".$_GET["id_ds"]."', '".$_GET["price"]."', '".$_GET["key"]."')";
 mysql_query($sql_add); // ���������� �������
 if (mysql_affected_rows()>0) // ���� ��� ������ ��� ���������� �������
 { print "<p>������ ���������.";
 print "<p><a href=\"index.php\"> ��������� �� ������� </a>"; }
 else { print "������ ����������. <a href=\"index.php\">
��������� �� ������� </a>"; }
?>