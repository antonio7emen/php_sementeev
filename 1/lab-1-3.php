<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<h1> Сементеев А. А. </h1>
<h2> Упражнение 1-4 </h2>

<?php
	$NUM_E=2.71828;
	echo 'Число е = ' . $NUM_E . '<br>';
	$num_el=$NUM_E;
	echo '$num_el = ' . $num_el . ' - ' . gettype($num_el) . '<br>';
	settype($num_el, 'string');
	echo '$num_el = ' . $num_el . ' - ' . gettype($num_el) . '<br>';
	settype($num_el, 'int');
	echo '$num_el = ' . $num_el . ' - ' . gettype($num_el) . '<br>';
	settype($num_el, 'bool');
	echo '$num_el = ' . $num_el . ' - ' . gettype($num_el) . '<br>';
?>

<br><a href='.'>Назад</a><br>