<?php
include('db_conn.php');
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
 
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'No');
$sheet->setCellValue('B1', 'namaleng');
$sheet->setCellValue('C1', 'jkelamin');
$sheet->setCellValue('D1', 'nisn');
$sheet->setCellValue('E1', 'nik');
$sheet->setCellValue('F1', 'tlahir');
$sheet->setCellValue('G1', 'tglahir');
$sheet->setCellValue('H1', 'agama');
$sheet->setCellValue('I1', 'berkebkhusus');
$sheet->setCellValue('J1', 'alamat');
$sheet->setCellValue('K1', 'rt');
$sheet->setCellValue('L1', 'rw');
$sheet->setCellValue('M1', 'namadusun');
$sheet->setCellValue('N1', 'namakel');
$sheet->setCellValue('O1', 'kec');
$sheet->setCellValue('P1', 'kodepos');
$sheet->setCellValue('Q1', 'ttinggal');
$sheet->setCellValue('R1', 'transport');
$sheet->setCellValue('S1', 'nohp');
$sheet->setCellValue('T1', 'notelp');
$sheet->setCellValue('U1', 'email');
$sheet->setCellValue('V1', 'kpspkh');
$sheet->setCellValue('W1', 'nokpspkh');
$sheet->setCellValue('X1', 'kwn');
$sheet->setCellValue('Y1', 'namaneg');
 
$query = mysqli_query($conn,"select * from datapribadi");
$i = 2;
$no = 1;
while($row = mysqli_fetch_array($query))
{
	$sheet->setCellValue('A'.$i, $no++);
	$sheet->setCellValue('B'.$i, $row['namaleng']);
	$sheet->setCellValue('C'.$i, $row['jkelamin']);
	$sheet->setCellValue('D'.$i, $row['nisn']);
	$sheet->setCellValue('E'.$i, $row['nik']);
	$sheet->setCellValue('F'.$i, $row['tlahir']);
	$sheet->setCellValue('G'.$i, $row['tglahir']);
	$sheet->setCellValue('H'.$i, $row['agama']);
	$sheet->setCellValue('I'.$i, $row['berkebkhusus']);
	$sheet->setCellValue('J'.$i, $row['alamat']);
	$sheet->setCellValue('K'.$i, $row['rt']);
	$sheet->setCellValue('L'.$i, $row['rw']);
	$sheet->setCellValue('M'.$i, $row['namadusun']);
	$sheet->setCellValue('N'.$i, $row['namakel']);
	$sheet->setCellValue('O'.$i, $row['kec']);
	$sheet->setCellValue('P'.$i, $row['kodepos']);
	$sheet->setCellValue('Q'.$i, $row['ttinggal']);
	$sheet->setCellValue('R'.$i, $row['transport']);
	$sheet->setCellValue('S'.$i, $row['nohp']);
	$sheet->setCellValue('T'.$i, $row['notelp']);
	$sheet->setCellValue('U'.$i, $row['email']);
	$sheet->setCellValue('V'.$i, $row['kpspkh']);
	$sheet->setCellValue('W'.$i, $row['nokpspkh']);
	$sheet->setCellValue('X'.$i, $row['kwn']);
	$sheet->setCellValue('Y'.$i, $row['namaneg']);	
	$i++;
}
 
$styleArray = [
			'borders' => [
				'allBorders' => [
					'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
				],
			],
		];
$i = $i - 1;
$sheet->getStyle('A1:Z'.$i)->applyFromArray($styleArray);
 
 
$writer = new Xlsx($spreadsheet);
$writer->save('Report Data diri siswa.xlsx');

header("location:../login.php");
?>