<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<HTML>
<h1>Сементеев А. А.</h1>
<h2>Задание 2-6</h2>
<BODY>
<TABLE border=1>
<?php
 $m = rand(1, 10);
 $n = rand(1, 10);

 echo "Матрица A размером " . $m . "x" . $n;
 for ($i = 0; $i < $m; $i++) {
  echo "<tr>";
  for ($j = 0; $j < $m; $j++) {
   echo "<td align=center>";
   $temp[] = rand(-10, 10);
   echo $temp[$j] . "</td>";
  }
  echo ("</tr>");
  $arr[] = $temp;
  unset($temp);
 }
 
 array_unshift($arr, null);
 $arr = call_user_func_array("array_map", $arr); //Транспонирование матрицы
?>

</TABLE>
<TABLE border=1>
<?php
 echo "<br>Вектор B";
 for ($i = 0; $i < $m; $i++) {
  $s = 0;
  for ($j = 0; $j < $m; $j++) {
   $s += $arr[$i][$j];
  }
  echo "<tr><td align=center>" . $s . "</td></tr>";
 }
?>

</TABLE>

<br><a href='.'>Назад</a><br>
</BODY>
</HTML>