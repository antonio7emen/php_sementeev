<h1>Сементеев А. А.</h1>
<h2>Задание 2-5</h2>
<?php
 function func($u, $t) {
  if ($u >= 0 && $t >= 0) {
   return $u;
  }
  elseif ($u < 0 && t >= 0) {
   return $t;
  }
  elseif ($u >= 0 && t < 0) {
   return $u - 2 * $t;
  }
  else {
   return $u * $t + 3 * $t;
  }
 }

 $a = rand(-10, 10);
 $b = rand(-10, 10);

 echo "a = " . $a . "<br>" . "b = " . $b . "<br>";
 echo "z = " . func($a - $b * $b, $b - $a) + func($a, $b - $a * $a);
?>

<br><a href='.'>Назад</a><br>