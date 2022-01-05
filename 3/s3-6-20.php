<HTML><BODY>
<h1>Сементеев А. А.</h1>
<h1>Вариант №20</h1>
<FORM method="post" action="<?php print $PHP_SELF ?>"> 
Введите слово: <INPUT type="text" name="w" size="20"><br><br>
<INPUT type="submit" name="obr" value="Отправить">
</FORM>
</BODY></HTML>
<?
 if(isset($_POST["obr"])) {
  $w = str_split($_POST["w"]);
  for($i = 0; $i < count($w); $i++) {
   echo $w[($i + count($w) - 3) % count($w)];
  }
 }
?>

<br><a href='.'>Назад</a><br>