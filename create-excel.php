<?php
//  Include PHPExcel_IOFactory
include 'PHPExcel.php';
include 'PHPExcel/IOFactory.php';
$koneksi = mysqli_connect("localhost","root","","labs");

$objPHPExcel = new PHPExcel();

$objPHPExcel->getActiveSheet()->setCellValue('A1', 'KOLOM');
    
$objPHPExcel->getActiveSheet()->setCellValue('A2', 'baris');

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007'); 
$objWriter->save("datamahasiswa.xlsx");
?>