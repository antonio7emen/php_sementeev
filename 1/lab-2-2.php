<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<h1> ��������� �. �. </h1>
<h2> ���������� 1-7 </h2>

<p> ���������� �����:
<p>
<?php
$x=rand(1,10);
$y=rand(1,10);
print ('$x =' . $x . "<br>");
print ('$y =' . $y . "<br>");
if ($x>$y) echo("���������� =" . $x);
elseif ($x<$y) echo ("���������� =" . $y);
else print ("����������� ���");
?>
<br><a href='.'>�����</a><br>