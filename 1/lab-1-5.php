<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<h1> ????????? ?. ?. </h1>
<h2> ?????? 1-1<br>??????? ?20 (?5) </h2>

<?php
	echo '(4c + d - 1) / (c - a / 2)<br>';

	$a = rand(-20, 20);
	$c = rand(-20, 20);
	$d = rand(-20, 20);

	echo '(4 * ' . $c . ' + ' . $d . ' -1) / ';
	echo '(1 - ' . $a . ' / 2) ';
	echo '= ' . (4 * $c + $d - 1) / ($c - $a / 2);

?>

<br><a href='.'>?????</a><br>