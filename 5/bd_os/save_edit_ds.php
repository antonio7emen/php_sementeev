<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<?php
session_start();
if(!$_SESSION["type"]) header("Location: .");
?>

<html><body>
<?php
 $conn = mysqli_connect("eu-cdbr-west-01.cleardb.com","b82a476b3b9e9d","0de723ba", "heroku_3e0e4fe3001638d") or die ("���������� ������������ � �������");
 mysqli_query($conn, 'SET NAMES cp1251');
 $zapros="UPDATE ds SET name='".$_GET['name']. "', url='".$_GET['url']."' WHERE id=".$_GET['id'];
 mysqli_query($conn, $zapros);
if (mysqli_affected_rows($conn)>0) {
 echo '��� ���������. <a href="index.php"> ��������� </a>'; }
 else { echo '������ ����������. <a href="index.php">
���������</a> '; }
?>
</body></html>