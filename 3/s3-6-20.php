<HTML><BODY>
<h1>��������� �. �.</h1>
<h1>������� �20</h1>
<FORM method="post" action="<?php print $PHP_SELF ?>"> 
������� �����: <INPUT type="text" name="w" size="20"><br><br>
<INPUT type="submit" name="obr" value="���������">
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

<br><a href='.'>�����</a><br>