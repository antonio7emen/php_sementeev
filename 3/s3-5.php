<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<HTML><BODY>
<h1>Сементеев А. А.</h1>
<h1>Анкета "Ваш характер"</h1>
<FORM method="post" action="<?php print $PHP_SELF ?>"> 
<br><br>Введите Ваше имя<br><br><INPUT type="text" name="l" size="20"><br><br>

1. Считаете ли Вы, что у многих ваших знакомых хороший характер?<br><br>
Да <INPUT type="radio" name="q1" value="1" checked>   Нет <INPUT type="radio" name="q1" value="2"><br><br>
2. Раздражают ли Вас мелкие повседневные обязанности?<br><br>
Да <INPUT type="radio" name="q2" value="3" checked>   Нет <INPUT type="radio" name="q2" value="4"><br><br>
3. Верите ли Вы, что ваши друзья преданы Вам?<br><br>
Да <INPUT type="radio" name="q3" value="5" checked>   Нет <INPUT type="radio" name="q3" value="6"><br><br>
4. Неприятно ли Вам, когда незнакомый человек делает Вам замечание?<br><br>
Да <INPUT type="radio" name="q4" value="7" checked>   Нет <INPUT type="radio" name="q4" value="8"><br><br>
5. Способны ли Вы ударить собаку или кошку?<br><br>
Да <INPUT type="radio" name="q5" value="9" checked>   Нет <INPUT type="radio" name="q5" value="10"><br><br>
6. Часто ли Вы принимаете лекарства?<br><br>
Да <INPUT type="radio" name="q6" value="11" checked>   Нет <INPUT type="radio" name="q6" value="12"><br><br>
7. Часто ли Вы меняете магазин, в который ходите за продуктами?<br><br>
Да <INPUT type="radio" name="q7" value="13" checked>   Нет <INPUT type="radio" name="q7" value="14"><br><br>
8. Продолжаете ли Вы отстаивать свою точку зрения, поняв, что ошиблись?<br><br>
Да <INPUT type="radio" name="q8" value="15" checked>   Нет <INPUT type="radio" name="q8" value="16"><br><br>
9. Тяготят ли Вас общественные обязанности?<br><br>
Да <INPUT type="radio" name="q9" value="17" checked>   Нет <INPUT type="radio" name="q9" value="18"><br><br>
10. Способны ли Вы ждать более 5 минут, не проявляя беспокойства?<br><br>
Да <INPUT type="radio" name="q10" value="19" checked>   Нет <INPUT type="radio" name="q10" value="20"><br><br>
11. Часто ли Вам приходят в голову мысли о Вашей невезучести?<br><br>
Да <INPUT type="radio" name="q11" value="21" checked>   Нет <INPUT type="radio" name="q11" value="22"><br><br>
12. Сохранилась ли у Вас фигура по сравнению с прошлым?<br><br>
Да <INPUT type="radio" name="q12" value="23" checked>   Нет <INPUT type="radio" name="q12" value="24"><br><br>
13. Можете ли Вы с улыбкой воспринимать подтрунивание друзей?<br><br>
Да <INPUT type="radio" name="q13" value="25" checked>   Нет <INPUT type="radio" name="q13" value="26"><br><br>
14. Нравится ли Вам семейная жизнь?<br><br>
Да <INPUT type="radio" name="q14" value="27" checked>   Нет <INPUT type="radio" name="q14" value="28"><br><br>
15. Злопамятны ли Вы?<br><br>
Да <INPUT type="radio" name="q15" value="29" checked>   Нет <INPUT type="radio" name="q15" value="30"><br><br>
16. Находите ли Вы, что стоит погода, типичная для данного времени года?<br><br>
Да <INPUT type="radio" name="q16" value="31" checked>   Нет <INPUT type="radio" name="q16" value="32"><br><br>
17. Случается ли Вам с утра быть в плохом настроении?<br><br>
Да <INPUT type="radio" name="q17" value="33" checked>   Нет <INPUT type="radio" name="q17" value="34"><br><br>
18. Раздражает ли Вас современная живопись?<br><br>
Да <INPUT type="radio" name="q18" value="35" checked>   Нет <INPUT type="radio" name="q18" value="36"><br><br>
19. Надоедает ли Вам присутствие чужих детей в доме более одного часа?<br><br>
Да <INPUT type="radio" name="q19" value="37" checked>   Нет <INPUT type="radio" name="q19" value="38"><br><br>
20. Надоедает ли Вам делать лабораторные по PHP?<br><br>
Да <INPUT type="radio" name="q20" value="39" checked>   Нет <INPUT type="radio" name="q20" value="40"><br><br>
<INPUT type="submit" name="obr" value="Отправить">
</FORM>
</BODY></HTML>
<?
 if(isset($_POST["obr"])) {
  $res = 0;
  $pos = array(3, 9, 10, 13, 14, 19);
  for($i = 1; $i <= 20; $i++) {
   if(in_array($i, $pos)) {
    if($_POST["q" . $i] % 2 == 1) $res++;
   }
   else {
    if($_POST["q" . $i] % 2 == 0) $res++;
   }
  }
  echo $_POST["l"] . "<br>";
  if($res > 15) echo "У Вас покладистый характер";
  elseif($res >= 8 && $res <= 15) echo "«Вы не лишены недостатков, но с вами можно ладить";
  else echo "Вашим друзьям можно посочувствовать";
 }
?>

<br><a href='.'>Назад</a><br>