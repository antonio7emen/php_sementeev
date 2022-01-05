<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<h1> Сементеев А. А. </h1>
<h2> Задача 2-2<br>Вариант №20 (№4) </h2>

<?php
 $n = rand(1, 1000);
 $m = rand(1, 1000);
 if ($n > $m) {
  $t = $n;
  $n = $m;
  $m = $t;
 }
 echo ("Диапазон от " . $n . " до " . $m . "<br>");
 for ($i = $n; $i <= $m; $i++) {
  $d = $i;
  $s = 0;
  while ($d > 0) {
   $s = $s + $d % 10;
   $d = (int)($d / 10);
  }
  if ($i % $s == 0) {
   echo ($i . "<br>");
  }
 }
?>

<br><a href='.'>Назад</a><br>