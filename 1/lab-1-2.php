<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<h1> Сементеев А. А. </h1>
<h2> Упражнение 1-3 </h2>

<p> Арифметические операции:
<p>
<?php
	$x=rand(1, 10);
	$y=rand(1, 10);
	echo($x . '+' . $y . '=' . ($x + $y) . '<br>');
	echo($x . '-' . $y . '=' . ($x - $y) . '<br>');
	echo($x . '*' . $y . '=' . ($x * $y) . '<br>');
	echo($x . '/' . $y . '=' . ($x / $y) . '<br>');
?>

<br><a href='.'>Назад</a><br>