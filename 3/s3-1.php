<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<h1>Сементеев А. А.</h1>
<?
if (isset($_POST["obr"])) {
 if($_POST["d1"] > $_POST["d2"]) {
  echo $_POST["d1"];
  }
 elseif($_POST["d1"] < $_POST["d2"]) {
  echo $_POST["d2"];
  }
 else {
  echo "Два числа равны";
  }
 }
?>

<br><a href='.'>Назад</a><br>