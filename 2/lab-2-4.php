<h1>Сементеев А. А.</h1>
<h2>Задание 2-4</h2>
<?php
 $len = rand(10, 30);
 for ($i = 0; $i < $len; $i++) {
  $arr[$i] = rand(-3, 10);
  echo $arr[$i] . " ";
 }
 echo "<br>";

 $flag = true;
 $max = 0;
 $curr = 0;
 for ($i = 0; $i < $len - 1; $i++) {
  if ($arr[$i] > 0) {
   if ($flag) {
    $curr++;
    $flag = false;
    if ($curr > $max) {
     $max = $curr;
    }
   }
   if ($arr[$i + 1] > 0) {
     $curr++;
    }
   else {
    $curr = 0;
    $flag = true;
   }
   if ($curr > $max) {
    $max = $curr;
   }
  }
  else {
   $curr = 0;
  }
 }
 echo $max;
?>

<br><a href='.'>Назад</a><br>