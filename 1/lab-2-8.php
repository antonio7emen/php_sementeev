<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<h1> ????????? ?. ?. </h1>
<h2> ?????????? 1-13 </h2>

<?php
$a=rand(1,10);
$b=rand(10,20);
print ("<p> ????? ?? ??????? [".$a.",".$b."]: <br>");
for ($i=$a; $i<=$b; ++$i) {
 echo($a . "<br>");
 $a=++$a; }
?>

<br><a href='.'>?????</a><br>