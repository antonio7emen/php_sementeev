<?php
  header('Content-Type: text/html; charset=windows-1251');
  header("Content-Type: application/force-download");
  header("Content-Type: application/octet-stream");
  header("Content-Type: application/download");;
  header("Content-Disposition: attachment;filename=sementeev_8.xls");
  header("Content-Transfer-Encoding: binary ");

  $conn = mysqli_connect("eu-cdbr-west-01.cleardb.com","b82a476b3b9e9d","0de723ba", "heroku_3e0e4fe3001638d") or die ("���������� ������������ � �������");
  mysqli_query($conn, "SET NAMES cp1251");

  xlsBOF();
  
  xlsWriteLabel(1, 1, "�");
  xlsWriteLabel(1, 2, "��������");
  xlsWriteLabel(1, 3, "��� ������������");
  xlsWriteLabel(1, 4, "�����������");
  xlsWriteLabel(1, 5, "�����������");
  xlsWriteLabel(1, 6, "���-�� �������������, ���.");
  xlsWriteLabel(1, 7, "�������� ����");
  xlsWriteLabel(1, 8, "���� ������������");
  xlsWriteLabel(1, 9, "���� ���������");
  xlsWriteLabel(1, 10, "URL ��������");

  xlsEOF();
?>
