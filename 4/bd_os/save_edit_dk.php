<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<html><body>
<?php
 $conn = mysqli_connect("eu-cdbr-west-01.cleardb.com","b82a476b3b9e9d","0de723ba", "heroku_3e0e4fe3001638d") or die ("���������� ������������ � �������");
 mysqli_query('SET NAMES cp1251');
 $zapros="UPDATE dk SET `date_in`='".$_GET['date_in']. "', `date_out`='".$_GET['date_out']."', `id_os`='".$_GET['id_os']."', `id_ds`='".$_GET['id_ds']."', `price`='".$_GET['price']."', `key`='".$_GET['key']."' WHERE `id`=".$_GET['id'];
 mysqli_query($conn, $zapros);
if (mysqli_affected_rows()>0) {
 echo '��� ���������. <a href="index.php"> ��������� </a>'; }
 else { echo '������ ����������. <a href="index.php">
���������</a> '; }
?>
</body></html>