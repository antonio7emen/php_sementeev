<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<h1> Сементеев А. А. </h1>
<h2> Упражнение 1-7 </h2>

<p> Наибольшее число:
<p>
<?php
$x=rand(1,10);
$y=rand(1,10);
print ('$x =' . $x . "<br>");
print ('$y =' . $y . "<br>");
if ($x>$y) echo("Наибольшее =" . $x);
elseif ($x<$y) echo ("Наибольшее =" . $y);
else print ("Наибольшего нет");
?>
<br><a href='.'>Назад</a><br>