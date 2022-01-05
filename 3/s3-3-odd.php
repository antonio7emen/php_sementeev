<HTML><BODY>
<h1>Сементеев А. А.</h1>
<FORM method="post" action="<?php print $PHP_SELF ?>"> 
Диапазон от 1 до <INPUT type="text" name="d" size="3"><br>
Какие числа выводить из диапазона? <SELECT NAME="z" SIZE="1">
 <OPTION VALUE="1" SELECTED> Четные
 <OPTION VALUE="2"> Нечетные
 <OPTION VALUE="3"> Простые
 <OPTION VALUE="4"> Составные
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
   for ($i = 1; $i <= $_POST["d"]; $i++) {
    if ($i % 2 == 0) echo $i . " ";
   }
   break;
   case 2:
   for ($i = 1; $i <= $_POST["d"]; $i++) {
    if ($i % 2 == 1) echo $i . " ";
   }
   break;
   case 3:
   for ($i = 2; $i <= $_POST["d"]; $i++) {
    $del = 2;
    while ($i % $del != 0) {
     $del++;
    }
    if ($del == $i) echo $i . " ";
   }
   break;
   case 4:
   for ($i = 2; $i <= $_POST["d"]; $i++) {
    $del = 2;
    while ($i % $del != 0) {
     $del++;
    }
    if ($del != $i) echo $i . " ";
   }
   break;
  }
 }
?>

<br><a href='.'>Назад</a><br>