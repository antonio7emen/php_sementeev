<h1>��������� �. �.</h1>
<?
if ($_POST["d"]=="plus") {
 $c=$_POST["a"]+$_POST["b"];
 if ($_POST["f"].checked==checked) {
 echo ($_POST['a']."+".$_POST['b']."=".$c);
 } else { echo ("��������� = ".$c); }
} else {
 $c=$_POST["a"]*$_POST["b"];
 if (isset($_POST["f"])) {
 echo ("��������� = ".$c);
 } else {
 echo ($_POST['a']."*".$_POST['b']." = ".$c); }}
echo ("<BR> <A href='f4.html'> ��������� ����� </A>");
?>

<br><a href='.'>�����</a><br>