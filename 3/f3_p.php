<h1>Сементеев А. А.</h1>
<?
if ($_POST["d"]=="plus") {
 $c=$_POST["a"]+$_POST["b"];
 echo ("сумма чисел = $c");
} else {
 $c=$_POST["a"]*$_POST["b"];
 echo ("произведение чисел = $c");
 }
echo ("<BR> <A href='f3.html'> Вернуться назад </A>");
?>

<br><a href='.'>Назад</a><br>