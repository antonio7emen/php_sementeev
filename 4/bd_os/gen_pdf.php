<?php
  mysql_connect("localhost", "root") or die ("���������� ������������ � �������");
  mysql_query("SET NAMES cp1251");
  mysql_select_db("os") or die("��� ����� �������!");

  define('FPDF_FONTPATH',"fpdf/font/");
  require("fpdf/fpdf.php");
  
  $pdf = new FPDF();
  $pdf -> AddPage();
 
  $pdf -> AddFont("Arial", "", "arial.php");
  $pdf -> SetFont("Arial", "", "6");

  $pdf -> Cell(5, 5, "�", 1, 0, "C");
  $pdf -> Cell(20, 5, "��������", 1, 0, "C");
  $pdf -> Cell(20, 5, "��� ������������", 1, 0, "C");
  $pdf -> Cell(15, 5, "�����������", 1, 0, "C");
  $pdf -> Cell(20, 5, "�����������", 1, 0, "C");
  $pdf -> Cell(30, 5, "���-�� �������������, ���.", 1, 0, "C");
  $pdf -> Cell(20, 5, "�������� ����", 1, 0, "C");
  $pdf -> Cell(25, 5, "���� ������������", 1, 0, "C");
  $pdf -> Cell(20, 5, "���� ���������", 1, 0, "C");
  $pdf -> Cell(20, 5, "URL ��������", 1, 1, "C");

  $pdf -> SetFont("Arial", "", "5");

  $query = mysql_query("SELECT * FROM dk");
  for($i = 1; $fetch_dk = mysql_fetch_array($query); $i++) {
    $date_in = $fetch_dk["date_in"];
    $date_out = $fetch_dk["date_out"];
    $id_os = $fetch_dk["id_os"];
    $id_ds = $fetch_dk["id_ds"];
    $key = $fetch_dk["key"];

    $query_os = mysql_query("SELECT * FROM os WHERE id = '" . $id_os . "'");
    if($fetch_os = mysql_fetch_array($query_os)) {
      $name_os = $fetch_os["name"];
      $equipment = $fetch_os["equipment"];
      $bitness = $fetch_os["bitness"];
      $developer = $fetch_os["developer"];
      $population = $fetch_os["population"];
    }
   
    $query_dk = mysql_query("SELECT * FROM ds WHERE id = '" . $id_ds . "'");
    if($fetch_ds = mysql_fetch_array($query_dk)) {
      $name_ds = $fetch_ds["name"];
      $url = $fetch_ds["url"];
    }

    $pdf -> Cell(5, 5, $i, 1, 0, "C");
    $pdf -> Cell(20, 5, $name_os, 1, 0, "C");
    $pdf -> Cell(20, 5, $equipment, 1, 0, "C");
    $pdf -> Cell(15, 5, $bitness, 1, 0, "C");
    $pdf -> Cell(20, 5, $developer, 1, 0, "C");
    $pdf -> Cell(30, 5, $population, 1, 0, "C");
    $pdf -> Cell(20, 5, $key, 1, 0, "C");
    $pdf -> Cell(25, 5, $date_in, 1, 0, "C");
    $pdf -> Cell(20, 5, $date_out, 1, 0, "C");
    $pdf -> Cell(20, 5, $url, 1, 1, "C");
}

$pdf -> Output("sementeev_8.pdf", "D");
?>