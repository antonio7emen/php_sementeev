<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<h1> ��������� �. �. </h1>
<h2> ���������� 1-11 </h2>

<?php
$a=rand(1,10); $b=rand(10,20);
print ("<p> ����� �� ������� [".$a.",".$b."]: <br>");
while ($a<=$b) { echo $a . "<br>";
 $a=++$a; }
?>

<br><a href='.'>�����</a><br>