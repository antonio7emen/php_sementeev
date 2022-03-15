<?php
  header("Expires: Mon, 1 Apr 1974 05:00:00 GMT");
  header("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
  header("Cache-Control: no-cache, must-revalidate");
  header("Pragma: no-cache");
  header("Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
  header("Content-Disposition: attachment; filename=sementeev_8.xlsx");

  require "../../vendor/autoload.php";

  use PhpOffice\PhpSpreadsheet\Spreadsheet;
  use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

  $conn = mysqli_connect("eu-cdbr-west-01.cleardb.com","b82a476b3b9e9d","0de723ba", "heroku_3e0e4fe3001638d") or die ("Невозможно подключиться к серверу");
  mysqli_query($conn, "SET NAMES cp1251");

  $spreadsheet = new Spreadsheet();
  
  $sheet = $spreadsheet -> getActiveSheet();

  $sheet -> setTitle("Операционные системы");

  $sheet -> SetCellValue("A1", "Операционные системы");
  $sheet -> mergeCells("A1:J1");
  $sheet -> getStyle("A1:J1") -> getAlignment() -> setHorizontal("center");

  $sheet -> getColumnDimension("A") -> setWidth(5);
  $sheet -> getColumnDimension("B") -> setWidth(15);
  $sheet -> getColumnDimension("C") -> setWidth(15);
  $sheet -> getColumnDimension("D") -> setWidth(18);
  $sheet -> getColumnDimension("E") -> setWidth(30);
  $sheet -> getColumnDimension("F") -> setWidth(15);
  $sheet -> getColumnDimension("G") -> setWidth(15);
  $sheet -> getColumnDimension("H") -> setWidth(50);
  $sheet -> getColumnDimension("I") -> setWidth(18);
  $sheet -> getColumnDimension("J") -> setWidth(18);

  $sheet -> SetCellValue("A2", "№");
  $sheet -> SetCellValue("B2", "Название");
  $sheet -> SetCellValue("C2", "Тип оборудования");
  $sheet -> SetCellValue("D2", "Разрядность");
  $sheet -> SetCellValue("E2", "Разработчик");
  $sheet -> SetCellValue("F2", "Кол-во пользователей, млн.");
  $sheet -> SetCellValue("G2", "Цифровой ключ");
  $sheet -> SetCellValue("H2", "Дата приобретения");
  $sheet -> SetCellValue("I2", "Дата окончания");
  $sheet -> SetCellValue("J2", "URL магазина");

  $query = mysqli_query($conn, "SELECT * FROM dk");
  for($i = 1; $fetch_dk = mysqli_fetch_array($query); $i++) {
    $date_in = $fetch_dk["date_in"];
    $date_out = $fetch_dk["date_out"];
    $id_os = $fetch_dk["id_os"];
    $id_ds = $fetch_dk["id_ds"];
    $key = $fetch_dk["key"];

    $query_os = mysqli_query($conn, "SELECT * FROM os WHERE id = '" . $id_os . "'");
    if($fetch_os = mysqli_fetch_array($query_os)) {
      $name_os = $fetch_os["name"];
      $equipment = $fetch_os["equipment"];
      $bitness = $fetch_os["bitness"];
      $developer = $fetch_os["developer"];
      $population = $fetch_os["population"];
    }
   
    $query_ds = mysqli_query($conn, "SELECT * FROM ds WHERE id = '" . $id_ds . "'");
    if($fetch_ds = mysqli_fetch_array($query_ds)) {
      $name_ds = $fetch_ds["name"];
      $url = $fetch_ds["url"];
    }

    $sheet -> SetCellValue("A".($i+2), $i);
    $sheet -> SetCellValue("B".($i+2), $name_os);
    $sheet -> SetCellValue("C".($i+2), $equipment);
    $sheet -> SetCellValue("D".($i+2), $bitness);
    $sheet -> SetCellValue("E".($i+2), $developer);
    $sheet -> SetCellValue("F".($i+2), $population);
    $sheet -> SetCellValue("G".($i+2), $key);
    $sheet -> SetCellValue("H".($i+2), date("d.m.Y", strtotime($date_in)));
    $sheet -> SetCellValue("I".($i+2), date("d.m.Y", strtotime($date_out)));
    $sheet -> SetCellValue("J".($i+2), $url);
  }

  $writer = new Xlsx($spreadsheet);
  $writer -> save("php://output");

  exit();
  
?>