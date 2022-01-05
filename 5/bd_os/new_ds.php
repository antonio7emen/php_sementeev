<?php
session_start();
if(!$_SESSION["type"]) header("Location: .");
?>

<html>
<head> <title> Добавление новой записи </title> </head>
<body>
<H2>Добавление новой записи:</H2>
<form action="save_new_ds.php" metod="get">
<br>Название: <input name="name" size="20" type="text">
<br>URL: <input name="url" size="20" type="text">
<p><input name="add" type="submit" value="Добавить">
<input name="b2" type="reset" value="Очистить"></p>
</form>
<p>
<a href="index.php"> Вернуться </a>
</body>
</html>