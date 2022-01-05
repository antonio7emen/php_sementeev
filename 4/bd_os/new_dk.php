<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<html>
<head> <title> Добавление новой записи </title> </head>
<body>
<H2>Добавление новой записи:</H2>
<form action="save_new_dk.php" metod="get">
<br>Дата приобретения: <input name="date_in" size="20" type="date">
<br>Дата окончания: <input name="date_out" size="20" type="date">
<br>id ОС: <input name="id_os" size="20" type="text">
<br>id Цифрового магазина: <input name="id_ds" size="20" type="text">
<br>Стоимость, $: <input name="price" size="20" type="text">
<br>Ключ: <input name="key" size="20" type="text">
<p><input name="add" type="submit" value="Добавить">
<input name="b2" type="reset" value="Очистить"></p>
</form>
<p>
<a href="index.php"> Вернуться </a>
</body>
</html>