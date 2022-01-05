<HTML><BODY>
<h1>Сементеев А. А.</h1>
<FORM method="post" action="<?php print $PHP_SELF ?>">
<INPUT type="text" name="d1" size="3"> 
<INPUT type="text" name="d2" size="3"><br>
Действие: <SELECT NAME="z" SIZE="1">
 <OPTION VALUE="1" SELECTED> Сложить
 <OPTION VALUE="2"> Вычесть
 <OPTION VALUE="3"> Умножить
 <OPTION VALUE="4"> Разделить
 </SELECT><br>
<INPUT type="submit" name="obr" value="Вперед!">
</FORM>
</BODY> </HTML>
<?
 if (isset($_POST["obr"])) {
  $d1 = $_POST["d1"];
  $d2 = $_POST["d2"];
  switch ($_POST["z"]) {
   case 1:
   $s = $d1 + $d2;
   break;
   case 2:
   $s = $d1 - $d2;
   break;
   case 3:
   $s = $d1 * $d2;
   break;
   case 4:
   $s = $d1 / $d2;
   break;
  }
  echo "Ответ: " . $s;
 }
?>

<br><a href='.'>Назад</a><br>