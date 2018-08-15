<?php
/*
-- Source Code from My Notes Code (www.mynotescode.com)
-- 
-- Follow Us on Social Media
-- Facebook : http://facebook.com/mynotescode/
-- Twitter  : http://twitter.com/code_notes
-- Google+  : http://plus.google.com/118319575543333993544
--
-- Terimakasih telah mengunjungi blog kami.
-- Jangan lupa untuk Like dan Share catatan-catatan yang ada di blog kami.
*/

// Load file koneksi.php
include "koneksi.php";

if(isset($_POST['upload'])){ // Jika user mengklik tombol Import
	$nama_file_baru = 'data.xlsx';
	
	// Load librari PHPExcel nya
	require_once 'PHPExcel/PHPExcel.php';
	
	$excelreader = new PHPExcel_Reader_Excel2007();
	$loadexcel = $excelreader->load('tmp/'.$nama_file_baru); // Load file excel yang tadi diupload ke folder tmp
	$sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
	
	// Buat query Insert
	$sql = $pdo->prepare("INSERT INTO tb_interview VALUES(:id,:la,:wp,:pe,:ie)");

	$numrow = 1;

	foreach($sheet as $row){
		// Ambil data pada excel sesuai Kolom
					$id = $row['J']; // Ambil data NIS
					$la = $row['K']; // Ambil data nama
					$wp = $row['L']; // Ambil data jenis kelamin
					$pe = $row['M']; // Ambil data telepon
					$ie = $row['N']; // Ambil data telepon
		// Cek jika semua data tidak diisi
			if(empty($id) && empty($LA) && empty($WP) && empty($PE) && empty($IE) )
							continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)
		
		// Cek $numrow apakah lebih dari 1
		// Artinya karena baris pertama adalah nama-nama kolom
		// Jadi dilewat saja, tidak usah diimport
		if($numrow > 1){

			// Proses simpan ke Database
			$sql->bindParam(':id', $id);
			$sql->bindParam(':la', $la);
			$sql->bindParam(':wp', $wp);
			$sql->bindParam(':pe', $pe);
			$sql->bindParam(':ie', $ie);
		
			
			
			$sql->execute(); // Eksekusi query insert
		}
		
		$numrow++; // Tambah 1 setiap kali looping
	}
}

header('location: sukses'); // Redirect ke halaman awal
?>
