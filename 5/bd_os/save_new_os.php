<?php
session_start();
if(!$_SESSION["type"]) header("Location: .");
?>

<?php
 // ����������� � ���� ������:
 $conn = mysqli_connect("eu-cdbr-west-01.cleardb.com","b82a476b3b9e9d","0de723ba", "heroku_3e0e4fe3001638d") or die ("���������� ������������ � �������");
 mysqli_query($conn, 'SET NAMES cp1251'); // ��� ���������
 // ������ ������� �� ���������� ������ � �������:
 $sql_add = "INSERT INTO os SET name='" . $_GET['name']
."', equipment='".$_GET['equipment']."', bitness='"
.$_GET['bitness']."', developer='".$_GET['developer'].
"', population='".$_GET['population']. "'";
 mysqli_query($conn, $sql_add); // ���������� �������
 if (mysqli_affected_rows($conn)>0) // ���� ��� ������ ��� ���������� �������
 { print "<p>������ ���������.";
 print "<p><a href=\"index.php\"> ��������� </a>"; }
 else { print "������ ����������. <a href=\"index.php\">
��������� </a>"; }
?>