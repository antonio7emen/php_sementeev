<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<HTML><BODY>
<h1>Сементеев А. А.</h1>
<FORM method="post" action="<?php print $PHP_SELF ?>"> 
Логин: <INPUT type="text" name="l" size="10"><br>
<INPUT type="submit" name="obr" value="Войти">
</FORM>
</BODY></HTML>
<?
 if (isset($_POST["obr"])) {
  $flag = 0;
  if ($_POST["l"] == "sementeev_php") {
   echo "Здравстуйте, Сементеев Антон Артемович";
  }
  elseif ($_POST["l"] == "ivanov_php") {
   echo "Здравстуйте, Иванов Иван Иванович";
  }
  elseif ($_POST["l"] == "sergeev_php") {
   echo "Здравстуйте, Сергеев сергей Сергеевич";
  }
  elseif ($_POST["l"] == "nikolai_php") {
   echo "Здравстуйте, Николаев Николай Николаевич";
  }
  else {
   echo "Вы не зарегистрированный пользователь!";
  }
 }
?>

<br><a href='.'>Назад</a><br>