<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<h1>��������� �. �.</h1>
<?
if (isset($_POST["obr"])) {
 if($_POST["d1"] > $_POST["d2"]) {
  echo $_POST["d1"];
  }
 elseif($_POST["d1"] < $_POST["d2"]) {
  echo $_POST["d2"];
  }
 else {
  echo "��� ����� �����";
  }
 }
?>

<br><a href='.'>�����</a><br>