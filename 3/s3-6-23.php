<HTML><BODY>
<h1>Сементеев А. А.</h1>
<h1>Вариант №23</h1>
<FORM method="post" action="<?php print $PHP_SELF ?>"> 
Введите текст:<br><textarea type="text" name="w" rows="5" cols="40"></textarea><br><br>
<INPUT type="submit" name="obr" value="Отправить">
</FORM>
</BODY></HTML>
<?
 if(isset($_POST["obr"])) {
  $w = $_POST["w"];
  $w = str_replace("<i>", "<курсив>", $w);
  $w = str_replace("<I>", "<курсив>", $w);
  $w = str_replace("</i>", "<конец курсива>", $w);
  $w = str_replace("</I>", "<конец курсива>", $w);
  echo $w;
 }
?>

<br><a href='.'>Назад</a><br>