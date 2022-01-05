<h1>Сементеев А. А.</h1>
<h2>Задание 2-3</h2>

<?php
 echo "1) Ассоциативный массив<br>";
 $cust = array(
  "cnum" => 2001,
  "cname" => "Hoffman",
  "city" => "London",
  "snum" => 1001,
 );
 foreach($cust as $key => $value) {
  echo $key . " = " . $value . "<br>";
 }
 echo "<br>";
 
 echo "2) Добавление нового значения<br>";
 $cust["raiting"] = 100;
 foreach($cust as $key => $value) {
  echo $key . " = " . $value . "<br>";
 }
 echo "<br>";
 
 echo "3) Сортировка по значениям<br>";
 asort($cust);
 foreach($cust as $key => $value) {
  echo $key . " = " . $value . "<br>";
 }
 echo "<br>";
 
 echo "4) Соритровка по ключам<br>";
 ksort($cust);
 foreach($cust as $key => $value) {
  echo $key . " = " . $value . "<br>";
 }
 echo "<br>";

 echo "4) Сорировка функцией Sort()<br>";
 sort($cust);
 foreach($cust as $key => $value) {
  echo $key . " = " . $value . "<br>";
 }
 echo "<br>";
?>

<br><a href='.'>Назад</a><br>