<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<HTML><BODY>
<h1>��������� �. �.</h1>
<FORM method="post" action="<?php print $PHP_SELF ?>"> 
�����: <INPUT type="text" name="l" size="10"><br>
<INPUT type="submit" name="obr" value="�����">
</FORM>
</BODY></HTML>
<?
 if (isset($_POST["obr"])) {
  $flag = 0;
  if ($_POST["l"] == "sementeev_php") {
   echo "�����������, ��������� ����� ���������";
  }
  elseif ($_POST["l"] == "ivanov_php") {
   echo "�����������, ������ ���� ��������";
  }
  elseif ($_POST["l"] == "sergeev_php") {
   echo "�����������, ������� ������ ���������";
  }
  elseif ($_POST["l"] == "nikolai_php") {
   echo "�����������, �������� ������� ����������";
  }
  else {
   echo "�� �� ������������������ ������������!";
  }
 }
?>

<br><a href='.'>�����</a><br>