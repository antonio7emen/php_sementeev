<h1> Сементеев А. А. </h1>
<h2> Упражнение 1-13 </h2>

<?php
$a=rand(1,10);
$b=rand(10,20);
print ("<p> Числа из отрезка [".$a.",".$b."]: <br>");
for ($i=$a; $i<=$b; ++$i) {
 echo($a . "<br>");
 $a=++$a; }
?>

<br><a href='.'>Назад</a><br>