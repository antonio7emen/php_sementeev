<?php
  header('Content-Type: text/html; charset=windows-1251');
  header("Content-Type: application/force-download");
  header("Content-Type: application/octet-stream");
  header("Content-Type: application/download");;
  header("Content-Disposition: attachment;filename=sementeev_8.xls");
  header("Content-Transfer-Encoding: binary ");

  $conn = mysqli_connect("eu-cdbr-west-01.cleardb.com","b82a476b3b9e9d","0de723ba", "heroku_3e0e4fe3001638d") or die ("Невозможно подключиться к серверу");
  mysqli_query($conn, "SET NAMES cp1251");

  xlsBOF();
  
  xlsWriteLabel(1, 1, "№");
  xlsWriteLabel(1, 2, "Название");
  xlsWriteLabel(1, 3, "Тип оборудования");
  xlsWriteLabel(1, 4, "Разрядность");
  xlsWriteLabel(1, 5, "Разработчик");
  xlsWriteLabel(1, 6, "Кол-во пользователей, млн.");
  xlsWriteLabel(1, 7, "Цифровой ключ");
  xlsWriteLabel(1, 8, "Дата приобретения");
  xlsWriteLabel(1, 9, "Дата окончания");
  xlsWriteLabel(1, 10, "URL магазина");

  xlsEOF();
?>
