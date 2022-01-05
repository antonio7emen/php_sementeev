<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<h1>Сементеев А. А.</h1>
<h2>Задание 2-1</h2>

<?php
 echo "1) \$treug[] = ";
 for ($i = 1; $i <= 10; $i++) {
  $treug[] = $i * ($i + 1) / 2;
  echo $treug[$i - 1] . " ";
 }
 echo "<br>";

 echo "2) \$kvd[] = ";
 for ($i = 1; $i <= 10; $i++) {
  $kvd[] = $i * $i;
  echo $kvd[$i - 1] . " ";
 }
 echo "<br>";

 echo "3) \$rez[] = ";
 $rez = array_merge($treug, $kvd);
 for ($i = 0; $i <= count($rez); $i++) {
  echo $rez[$i] . " ";
 }
 echo "<br>";

 echo "4) \$rez[] (Отсортированный) = ";
 sort($rez);
 for ($i = 0; $i <= count($rez); $i++) {
  echo $rez[$i] . " ";
 }
 echo "<br>";
 
 echo "5) \$rez[] (Без \$rez[0]) = ";
 unset($rez[0]);
 for ($i = 0; $i <= count($rez); $i++) {
  echo $rez[$i] . " ";
 }
 echo "<br>";

 echo "6) \$rez1[] = ";
 $rez1 = array_unique($rez);
 for ($i = 0; $i <= count($rez1) + 1; $i++) {
  echo $rez1[$i] . " ";
 }
 echo "<br>";
?>

<br><a href='.'>Назад</a><br>