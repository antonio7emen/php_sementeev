<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<?php
  session_start();
  if(!$_SESSION["type"]) header("Location: .");

  header("Expires: Mon, 1 Apr 1974 05:00:00 GMT");
  header("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
  header("Cache-Control: no-cache, must-revalidate");
  header("Pragma: no-cache");
  header("Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
  header("Content-Disposition: attachment; filename=sementeev_8.xls");

  $conn = mysqli_connect("eu-cdbr-west-01.cleardb.com","b82a476b3b9e9d","0de723ba", "heroku_3e0e4fe3001638d") or die ("Невозможно подключиться к серверу");
  mysqli_query($conn, "SET NAMES cp1251");

  require("PHPExcel/PHPExcel.php");
  require("PHPExcel/PHPExcel/Writer/Excel2007.php");

  $xls = new PHPExcel();
  $xls->setActiveSheetIndex(0);
  $sheet = $xls -> getActiveSheet();
  $sheet->setTitle("Сементеев_8");
  
  $sheet->getColumnDimension("B")->setWidth(5);
  $sheet->getColumnDimension("C")->setWidth(15);
  $sheet->getColumnDimension("D")->setWidth(30);
  $sheet->getColumnDimension("E")->setWidth(15);
  $sheet->getColumnDimension("F")->setWidth(30);
  $sheet->getColumnDimension("G")->setWidth(20);
  $sheet->getColumnDimension("H")->setWidth(20);
  $sheet->getColumnDimension("I")->setWidth(20);
  $sheet->getColumnDimension("J")->setWidth(20);

  $sheet->setCellValue("B2", "№");
  $sheet->setCellValue("C2", "Название");
  $sheet->setCellValue("D2", "Тип оборудования");
  $sheet->setCellValue("E2", "Разрядность");
  $sheet->setCellValue("F2", "Кол-во пользователей");
  $sheet->setCellValue("G2", "Цифровой ключ");
  $sheet->setCellValue("H2", "Дата приобретения");
  $sheet->setCellValue("I2", "Дата окончания");
  $sheet->setCellValue("J2", "URL магазина");
  
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

    $query_dk = mysqli_query($conn, "SELECT * FROM ds WHERE id = '" . $id_ds . "'");
    if($fetch_ds = mysqli_fetch_array($query_dk)) {
      $name_ds = $fetch_ds["name"];
      $url = $fetch_ds["url"];
    }

    $sheet->setCellValue("B".($i + 2), $i);
    $sheet->setCellValue("C".($i + 2), $name_os);
    $sheet->setCellValue("D".($i + 2), $bitness);
    $sheet->setCellValue("E".($i + 2), $developer);
    $sheet->setCellValue("F".($i + 2), $population);
    $sheet->setCellValue("G".($i + 2), $key);
    $sheet->setCellValue("H".($i + 2), $date_in);
    $sheet->setCellValue("I".($i + 2), $date_out);
    $sheet->setCellValue("J".($i + 2), $url);
}

$objWriter = new PHPExcel_Writer_Excel5($xls);
$objWriter->save('php://output');
  
exit();
?>
