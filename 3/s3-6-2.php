<HTML><BODY>
<h1>Сементеев А. А.</h1>
<h1>Вариант №2</h1>
<FORM method="post" action="<?php print $PHP_SELF ?>"> 
Введите слово A: <INPUT type="text" name="a" size="20"><br><br>
Введите слово B: <INPUT type="text" name="b" size="20"><br><br>
<INPUT type="submit" name="obr" value="Отправить">
</FORM>
</BODY></HTML>
<?
 if(isset($_POST["obr"])) {
  $a = $_POST["a"];
  $b = $_POST["b"];
  $flag = true;
  foreach(str_split($b) as $char_b) {
   if(!in_array($char_b, str_split($a))) {
    $flag = false;
    break;
   }
  }
  if($flag) echo "Да";
  else echo "Нет";
 }
?>

<br><a href='.'>Назад</a><br>