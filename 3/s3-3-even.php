<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<HTML><BODY>
<h1>Сементеев А. А.</h1>
<FORM method="post" action="<?php print $PHP_SELF ?>"> 
Найти делители числа <INPUT type="text" name="d" size="3"><br>
Какие делители выводить из диапазона? <SELECT NAME="z" SIZE="1">
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
  $del = array();
  for($i = 2, $iter = 0; $i <= sqrt($_POST["d"]); $i++) {
   if($_POST["d"] % $i == 0) {
    $del[$iter] = $i;
    $iter++;
    $del[$iter] = $_POST["d"] / $i;
    $iter++;
   }
  }
  sort($del);
  switch ($_POST["z"]) {
   case 1:
   foreach ($del as $d) {
    if ($d % 2 == 0) echo $d . " ";
   }
   break;
   case 2:
   foreach ($del as $d) {
    if ($d % 2 == 1) echo $d . " ";
   }
   break;
   case 3:
   foreach ($del as $d) {
     $delit = 2;
     while ($d % $delit != 0) {
      $delit++;
     }
    if ($delit == $d) echo $d . " ";
   }
   break;
   case 4:
   foreach ($del as $d) {
     $delit = 2;
     while ($d % $delit != 0) {
      $delit++;
     }
    if ($delit != $d) echo $d . " ";
   }
   break;
  }
 }
?>

<br><a href='.'>Назад</a><br>