<HTML><BODY>
<h1>��������� �. �.</h1>
<h1>������� �23</h1>
<FORM method="post" action="<?php print $PHP_SELF ?>"> 
������� �����:<br><textarea type="text" name="w" rows="5" cols="40"></textarea><br><br>
<INPUT type="submit" name="obr" value="���������">
</FORM>
</BODY></HTML>
<?
 if(isset($_POST["obr"])) {
  $w = $_POST["w"];
  $w = str_replace("<i>", "<������>", $w);
  $w = str_replace("<I>", "<������>", $w);
  $w = str_replace("</i>", "<����� �������>", $w);
  $w = str_replace("</I>", "<����� �������>", $w);
  echo $w;
 }
?>

<br><a href='.'>�����</a><br>