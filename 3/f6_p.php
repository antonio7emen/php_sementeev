<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<h1>��������� �. �.</h1>
<?
$s3=($_POST["f"]." ".$_POST["n"]);
$s4=". �� ���� �������������� ��� �� ����� �����.<br><br>";
$s5 = "����������: " . $_POST["e"];
switch ($_POST["z"]) {
 // �������, ���� ����� ��������� $z
 case 1:
 // 1 � ��� ��������� �����������
 $s1="��������� ";
 $s2="�������� ";
 break;
 case 2:
 // 2 � ��� ��������� ���������
 $s1="��������� ";
 $s2="������� ";
 break;
 case 3:
 // 3 � ��� ��������� ����������
 $s1="��������� ";
 $s2="������� ";
 break;
}
echo ($s1 . $s2 . $s3 . $s4 . $s5);
?>

<br><a href='.'>�����</a><br>