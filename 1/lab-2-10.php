<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<HTML>
<TITLE> ������� ��������� </TITLE>
<BODY>
<h1> ��������� �. �. </h1>
<h2> ������ 1-2 </h2>
<TABLE border=1>
<?php
for ($i=0; $i<=9; $i++) {
 echo ("<tr>");
 for ($k=1; $k<=10; $k++) {
 echo ("<td align=center>");
 $p=$i*10+$k;
 if ($p % 2) {
  echo ("<font color='black'>" . $p . "</font>");
  }
 else {
  echo ("<font color='red'>" . $p . "</font>");
 }
 echo ("</td>");
 }
 echo ("</tr>");
}
?>
<br><a href='.'>�����</a><br>
</TABLE>
</BODY>
</HTML>