<?php
// Load file koneksi.php
include "koneksiexcel.php";
// Load plugin PHPExcel nya
require_once 'PHPExcel/PHPExcel.php';
// Panggil class PHPExcel nya
$excel = new PHPExcel();
// Settingan awal file excel
$excel->getProperties()->setCreator('My Notes Code')
             ->setLastModifiedBy('My Notes Code')
             ->setTitle("Data Karyawan")
             ->setSubject("Karyawan")
             ->setDescription("Laporan Semua Data Karyawan")
             ->setKeywords("Data Karyawan");
// Buat sebuah variabel untuk menampung pengaturan style dari header tabel
$style_col = array(
  'font' => array('bold' => true), // Set font nya jadi bold
  'alignment' => array(
    'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
    'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
  ),
  'borders' => array(
    'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
    'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
    'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
    'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
  )
);
// Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
$style_row = array(
  'alignment' => array(
    'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
  ),
  'borders' => array(
    'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
    'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
    'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
    'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
  )
);
$excel->setActiveSheetIndex(0)->setCellValue('A1', "Tabel Pertanyaan"); // Set kolom A1 dengan tulisan "DATA SISWA"
$excel->getActiveSheet()->mergeCells('A1:D1'); // Set Merge Cell pada kolom A1 sampai F1
$excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE); // Set bold kolom A1
$excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15); // Set font size 15 untuk kolom A1
$excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT); // Set text center untuk kolom A1


$excel->setActiveSheetIndex(0)->setCellValue('F1', "Intruksi Penilaian"); // Set kolom A1 dengan tulisan "DATA SISWA"
$excel->getActiveSheet()->mergeCells('F1:H1'); // Set Merge Cell pada kolom A1 sampai F1
$excel->getActiveSheet()->getStyle('F1')->getFont()->setBold(TRUE); // Set bold kolom A1
$excel->getActiveSheet()->getStyle('F1')->getFont()->setSize(15); // Set font size 15 untuk kolom A1
$excel->getActiveSheet()->getStyle('F1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT); // Set text center untuk kolom A1

$excel->setActiveSheetIndex(0)->setCellValue('J1', "Tabel Penilaian"); // Set kolom A1 dengan tulisan "DATA SISWA"
$excel->getActiveSheet()->mergeCells('J1:N1'); // Set Merge Cell pada kolom A1 sampai F1
$excel->getActiveSheet()->getStyle('J1')->getFont()->setBold(TRUE); // Set bold kolom A1
$excel->getActiveSheet()->getStyle('J1')->getFont()->setSize(15); // Set font size 15 untuk kolom A1
$excel->getActiveSheet()->getStyle('J1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT); // Set text center untuk kolom A1

$excel->setActiveSheetIndex(0)->setCellValue('A3', "No"); // Set kolom A3 dengan tulisan "NO"
$excel->setActiveSheetIndex(0)->setCellValue('B3', "Construct"); // Set kolom C3 dengan tulisan "NAMA"
$excel->setActiveSheetIndex(0)->setCellValue('C3', "Metode"); // Set kolom D3 dengan tulisan "JENIS KELAMIN"
$excel->setActiveSheetIndex(0)->setCellValue('D3', "Pertanyaan"); // Set kolom D3 dengan tulisan "JENIS KELAMIN"


$excel->getActiveSheet()->getStyle('A3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('B3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('C3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('D3')->applyFromArray($style_col);

$excel->setActiveSheetIndex(0)->setCellValue('F3', "Wajib Baca"); // Set kolom A3 dengan tulisan "NO"
$excel->setActiveSheetIndex(0)->setCellValue('G3', "Nilai"); // Set kolom C3 dengan tulisan "NAMA"
$excel->setActiveSheetIndex(0)->setCellValue('H3', "Keterangan"); // Set kolom D3 dengan tulisan "JENIS KELAMIN"

$excel->getActiveSheet()->getStyle('F3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('G3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('H3')->applyFromArray($style_col);

$excel->getActiveSheet()->getStyle('F4')->applyFromArray($style_row);
$excel->getActiveSheet()->getStyle('G4')->applyFromArray($style_row);
$excel->getActiveSheet()->getStyle('H4')->applyFromArray($style_row);

$excel->getActiveSheet()->getStyle('F5')->applyFromArray($style_row);
$excel->getActiveSheet()->getStyle('G5')->applyFromArray($style_row);
$excel->getActiveSheet()->getStyle('H5')->applyFromArray($style_row);

$excel->getActiveSheet()->getStyle('F6')->applyFromArray($style_row);
$excel->getActiveSheet()->getStyle('G6')->applyFromArray($style_row);
$excel->getActiveSheet()->getStyle('H6')->applyFromArray($style_row);

$excel->getActiveSheet()->getStyle('F7')->applyFromArray($style_row);
$excel->getActiveSheet()->getStyle('G7')->applyFromArray($style_row);
$excel->getActiveSheet()->getStyle('H7')->applyFromArray($style_row);

$excel->getActiveSheet()->getStyle('F8')->applyFromArray($style_row);
$excel->getActiveSheet()->getStyle('G8')->applyFromArray($style_row);
$excel->getActiveSheet()->getStyle('H8')->applyFromArray($style_row);

$excel->getActiveSheet()->getStyle('F9')->applyFromArray($style_row);
$excel->getActiveSheet()->getStyle('G9')->applyFromArray($style_row);
$excel->getActiveSheet()->getStyle('H9')->applyFromArray($style_row);

$excel->setActiveSheetIndex(0)->setCellValue('F4', "Berilah nilai 1-6 untuk setiap pertanyaan pada Tabel Pertanyaan, di mana setiap pertanyaan tsb telah dikategorikan ke beberapa dimensi seperti yang anda lihat
"); // Set kolom A3 dengan tulisan "NO"
$excel->setActiveSheetIndex(0)->setCellValue('F5', "Letakan nilai di bawah kolom-kolom dimensi pada Tabel Penilaian
"); // Set kolom A3 dengan tulisan "NO"
$excel->setActiveSheetIndex(0)->setCellValue('F6', "Untuk dimensi yang memiliki lebih dari satu pertanyaan, silahkan beri nilai tepat di bawah kolom penilaian sebelumnya tanpa harus menulis ID Karyawan lagi
"); // Set kolom A3 dengan tulisan "NO"
$excel->getActiveSheet()->getStyle('F4')->getFont()->setSize(8); // Set font size 15 untuk kolom A1
$excel->getActiveSheet()->getStyle('F5')->getFont()->setSize(9); // Set font size 15 untuk kolom A1
$excel->getActiveSheet()->getStyle('F6')->getFont()->setSize(8); // Set font size 15 untuk kolom A1
$excel->getActiveSheet()->getStyle('F4')->getAlignment()->setWrapText(TRUE); // Set bold kolom A1
$excel->getActiveSheet()->getStyle('F5')->getAlignment()->setWrapText(TRUE); // Set bold kolom A1
$excel->getActiveSheet()->getStyle('F6')->getAlignment()->setWrapText(TRUE); // Set bold kolom A1

$excel->setActiveSheetIndex(0)->setCellValue('G4', "1"); // Set kolom A3 dengan tulisan "NO"
$excel->setActiveSheetIndex(0)->setCellValue('G5', "2"); // Set kolom A3 dengan tulisan "NO"
$excel->setActiveSheetIndex(0)->setCellValue('G6', "3"); // Set kolom A3 dengan tulisan "NO"
$excel->setActiveSheetIndex(0)->setCellValue('G7', "4"); // Set kolom A3 dengan tulisan "NO"
$excel->setActiveSheetIndex(0)->setCellValue('G8', "5"); // Set kolom A3 dengan tulisan "NO"
$excel->setActiveSheetIndex(0)->setCellValue('G9', "6"); // Set kolom A3 dengan tulisan "NO"

$excel->setActiveSheetIndex(0)->setCellValue('H4', "Sangat Tidak Setuju"); // Set kolom A3 dengan tulisan "NO"
$excel->setActiveSheetIndex(0)->setCellValue('H5', "Tidak Setuju"); // Set kolom A3 dengan tulisan "NO"
$excel->setActiveSheetIndex(0)->setCellValue('H6', "Agak Tidak Setuju"); // Set kolom A3 dengan tulisan "NO"
$excel->setActiveSheetIndex(0)->setCellValue('H7', "Agak Setuju"); // Set kolom A3 dengan tulisan "NO"
$excel->setActiveSheetIndex(0)->setCellValue('H8', "Setuju"); // Set kolom A3 dengan tulisan "NO"
$excel->setActiveSheetIndex(0)->setCellValue('H9', "Sangat Setuju"); // Set kolom A3 dengan tulisan "NO"



// Buat header tabel nya pada baris ke 3
$excel->setActiveSheetIndex(0)->setCellValue('J3', "ID KARYAWAN"); // Set kolom A3 dengan tulisan "NO"
$excel->setActiveSheetIndex(0)->setCellValue('K3', "Impact Evaluation"); // Set kolom C3 dengan tulisan "NAMA"
$excel->setActiveSheetIndex(0)->setCellValue('L3', "Leadership Action"); // Set kolom D3 dengan tulisan "JENIS KELAMIN"
$excel->setActiveSheetIndex(0)->setCellValue('M3', "Program Effectiveness"); // Set kolom E3 dengan tulisan "TELEPON"
$excel->setActiveSheetIndex(0)->setCellValue('N3', "Warrior Performance"); // Set kolom F3 dengan tulisan "ALAMAT"
// Apply style header yang telah kita buat tadi ke masing-masing kolom header
$excel->getActiveSheet()->getStyle('J3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('K3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('L3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('M3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('N3')->applyFromArray($style_col);

// Set height baris ke 1, 2 dan 3
$excel->getActiveSheet()->getRowDimension('1')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('2')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('3')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('6')->setRowHeight(50);

	$excel->getActiveSheet()->getRowDimension('7')->setRowHeight(50);
	$excel->getActiveSheet()->getRowDimension('8')->setRowHeight(50);
	$excel->getActiveSheet()->getRowDimension('9')->setRowHeight(50);
	  
	  $excel->getActiveSheet()->getStyle('G5')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1
	  $excel->getActiveSheet()->getStyle('H5')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1
	  $excel->getActiveSheet()->getStyle('G6')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1
	  $excel->getActiveSheet()->getStyle('H6')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1
	  $excel->getActiveSheet()->getStyle('G7')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1
	  $excel->getActiveSheet()->getStyle('H7')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1
	  $excel->getActiveSheet()->getStyle('G8')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1
	  $excel->getActiveSheet()->getStyle('H8')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1
	  $excel->getActiveSheet()->getStyle('G9')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1
	  $excel->getActiveSheet()->getStyle('H9')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1


// Buat query untuk menampilkan semua data siswa
$sql = $pdo->prepare("SELECT * FROM tb_pertanyaan where id_metode='inter'");

$sql->execute(); // Eksekusi querynya
$numrow = 4; // Set baris pertama untuk isi tabel adalah baris ke 4
while($data = $sql->fetch()){ // Ambil semua data dari hasil eksekusi $sql
  $excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $data['id_kuesioner']);
  $excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $data['id_construct']);
  $excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data['id_metode']);
  $excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data['pertanyaan']);

  // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
  $excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('J'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('K'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('L'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('M'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('N'.$numrow)->applyFromArray($style_row);

  $excel->getActiveSheet()->getStyle('F'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('G'.$numrow)->applyFromArray($style_row);
  $excel->getActiveSheet()->getStyle('H'.$numrow)->applyFromArray($style_row);

  $excel->getActiveSheet()->getStyle('A'.$numrow)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1
  $excel->getActiveSheet()->getStyle('B'.$numrow)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1
  $excel->getActiveSheet()->getStyle('C'.$numrow)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_TOP); // Set text center untuk kolom A1
  $excel->getActiveSheet()->getStyle('D'.$numrow)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_TOP); // Set text center untuk kolom A1

  $excel->getActiveSheet()->getStyle('A'.$numrow)->getAlignment()->setWrapText(TRUE); // Set bold kolom A1
  $excel->getActiveSheet()->getStyle('B'.$numrow)->getAlignment()->setWrapText(TRUE); // Set bold kolom A1
  $excel->getActiveSheet()->getStyle('C'.$numrow)->getAlignment()->setWrapText(TRUE); // Set bold kolom A1
  $excel->getActiveSheet()->getStyle('D'.$numrow)->getAlignment()->setWrapText(TRUE); // Set bold kolom A1

  $excel->getActiveSheet()->getStyle('G'.$numrow)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1
  $excel->getActiveSheet()->getStyle('H'.$numrow)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1

  $excel->getActiveSheet()->getStyle('G'.$numrow)->getAlignment()->setWrapText(TRUE); // Set bold kolom A1
  $excel->getActiveSheet()->getStyle('H'.$numrow)->getAlignment()->setWrapText(TRUE); // Set bold kolom A1

  $excel->getActiveSheet()->getStyle('J'.$numrow)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1
  $excel->getActiveSheet()->getStyle('K'.$numrow)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1
  $excel->getActiveSheet()->getStyle('L'.$numrow)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1
  $excel->getActiveSheet()->getStyle('M'.$numrow)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1
  $excel->getActiveSheet()->getStyle('N'.$numrow)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1

  $excel->getActiveSheet()->getStyle('I'.$numrow)->getAlignment()->setWrapText(TRUE); // Set bold kolom A1
  $excel->getActiveSheet()->getStyle('J'.$numrow)->getAlignment()->setWrapText(TRUE); // Set bold kolom A1
  $excel->getActiveSheet()->getStyle('K'.$numrow)->getAlignment()->setWrapText(TRUE); // Set bold kolom A1
  $excel->getActiveSheet()->getStyle('L'.$numrow)->getAlignment()->setWrapText(TRUE); // Set bold kolom A1
  $excel->getActiveSheet()->getStyle('M'.$numrow)->getAlignment()->setWrapText(TRUE); // Set bold kolom A1
  $excel->getActiveSheet()->getStyle('N'.$numrow)->getAlignment()->setWrapText(TRUE); // Set bold kolom A1

  $excel->getActiveSheet()->getRowDimension($numrow)->setRowHeight(50); // Set width kolom A

  $numrow++; // Tambah 1 setiap kali looping
}
// Set width kolom
$excel->getActiveSheet()->getColumnDimension('A')->setWidth(5); // Set width kolom A
$excel->getActiveSheet()->getColumnDimension('B')->setWidth(20); // Set width kolom B
$excel->getActiveSheet()->getColumnDimension('C')->setWidth(20); // Set width kolom C
$excel->getActiveSheet()->getColumnDimension('D')->setWidth(40); // Set width kolom D
$excel->getActiveSheet()->getColumnDimension('E')->setWidth(5); // Set width kolom E
$excel->getActiveSheet()->getColumnDimension('F')->setWidth(35); // Set width kolom F
$excel->getActiveSheet()->getColumnDimension('G')->setWidth(35); // Set width kolom F
$excel->getActiveSheet()->getColumnDimension('H')->setWidth(35); // Set width kolom F
$excel->getActiveSheet()->getColumnDimension('I')->setWidth(5); // Set width kolom E
$excel->getActiveSheet()->getColumnDimension('J')->setWidth(35); // Set width kolom F
$excel->getActiveSheet()->getColumnDimension('K')->setWidth(35); // Set width kolom F
$excel->getActiveSheet()->getColumnDimension('L')->setWidth(35); // Set width kolom E
$excel->getActiveSheet()->getColumnDimension('M')->setWidth(35); // Set width kolom F
$excel->getActiveSheet()->getColumnDimension('N')->setWidth(35); // Set width kolom F

// Set orientasi kertas jadi LANDSCAPE
$excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
// Set judul file excel nya
$excel->getActiveSheet(0)->setTitle("Laporan Data Survey");
$excel->setActiveSheetIndex(0);
// Proses file excel
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment; filename="Form Survey.xlsx"'); // Set nama file excel nya
header('Cache-Control: max-age=0');
$write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
$write->save('php://output');
?>