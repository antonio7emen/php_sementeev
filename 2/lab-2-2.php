<h1>Сементеев А. А.</h1>
<h2>Задание 2-2</h2>

<?php
 $len = rand(3, 20);
 for ($i = 0; $i < $len; $i++) {
  $arr[] = rand(10, 99);
 }

 echo "Массив из " . $len . " элементов, заполненный случайными числами:<br>";

 echo "4) ";
 sort($arr);
 for ($i = 0; $i < count($arr); $i++) {
  echo $arr[$i] . " ";
 }
 echo "<br>";
 
 echo "5) ";
 $arr = array_reverse($arr);
 for ($i = 0; $i < count($arr); $i++) {
  echo $arr[$i] . " ";
 }
 echo "<br>";
 
 echo "6) ";
 array_pop($arr);
 for ($i = 0; $i < count($arr); $i++) {
  echo $arr[$i] . " ";
 }
 echo "<br>";
 
 echo "7) ";
 $s = 0;
 for ($i = 0; $i < count($arr); $i++) {
  $s += $arr[$i];
 }
 echo "Количество элементов: " . count($arr) . "; Сумма: " . $s . "<br>";

 echo "8) Среднее арифметическое: " . $s / count($arr) . "<br>";
 
 echo "9) Наличие в массиве числа 50: ";
 if (in_array(50, $arr)) {
  echo "Да<br>";
 }
 else {
  echo "Нет<br>";
 }

 echo "10) ";
 $arr = array_unique($arr);
 for ($i = 0; $i < count($arr); $i++) {
  echo $arr[$i] . " ";
 }
 echo "<br>";
 
 
?>

<br><a href='.'>Назад</a><br>