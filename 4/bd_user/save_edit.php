<html><body>
<?php
 mysql_connect("localhost","root","") or die ("����������
������������ � �������");
 mysql_query('SET NAMES cp1251');
 mysql_select_db("users") or die("��� ����� �������!");
 $zapros="UPDATE user SET user_name='".$_GET['name'].
"', user_login='".$_GET['login']."', user_password='"
.$_GET['password']."', user_e_mail='".$_GET['e_mail'].
"', user_info='".$_GET['info']."' WHERE id_user="
.$_GET['id'];
 mysql_query($zapros);
if (mysql_affected_rows()>0) {
 echo '��� ���������. <a href="index.php"> ��������� � ������
������������� </a>'; }
 else { echo '������ ����������. <a href="index.php">
��������� � ������ �������������</a> '; }
?>
</body></html>