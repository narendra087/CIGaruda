            <div class="page-title">
              <div class="title_left">
                <h3>Form Upload </h3>
              </div>

            </div>

            <div class="clearfix"></div>
		
            <div class="row">
				
              <div class="col-md-12 col-sm-12 col-xs-12">
			 
                <div class="x_panel">
				 <div class="table-responsive">
				 <table class="table table-bordered">
                  <div class="x_title">
                    <h2>Welcome</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

					
                 
                    <br/>

                    <form method="post" action="" enctype="multipart/form-data">
                       <center>	
					    <h4>Silahkan download form dan isi terlebih dahulu sesuai metode yang akan digunakan sebelum mengupload </h4>
						
						<br></br>

						
					
						
						<a href="<?php echo base_url();?>admin/interview_form" class="btn btn-primary">
                       <span class="glyphicon glyphicon-download"></span> 
                        Download Form Interview
						</a>
						
					
						</center>
						
						<br><br>
					    		
                      <!-- Buat sebuah input type file class pull-left berfungsi agar file input berada di sebelah kiri
                      -->
                    <div class="row">
				
                      <div class="col-sm-3 col-sm-offset-4">
				
                        <input type="file" name="file" >
							
                      </div>
				
                      <div class="col-sm-4 ">
                        <button type="submit" name="preview" class="btn btn-info btn-sm">
                          <span class="glyphicon glyphicon-eye-open"></span> Preview
                        </button> 
                      </div>
                    </div>                    
                    </form>
                                <br />
                      <!-- Buat Preview Data -->
      <?php
      // Jika user telah mengklik tombol Preview
      if(isset($_POST['preview'])){
        //$ip = ; // Ambil IP Address dari User
        $nama_file_baru = 'data.xlsx';

        // Cek apakah terdapat file data.xlsx pada folder tmp
        if(is_file('tmp/'.$nama_file_baru)) // Jika file tersebut ada
          unlink('tmp/'.$nama_file_baru); // Hapus file tersebut

        $tipe_file = $_FILES['file']['type']; // Ambil tipe file yang akan diupload
        $tmp_file = $_FILES['file']['tmp_name'];

        // Cek apakah file yang diupload adalah file Excel 2007 (.xlsx)
        if($tipe_file == "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"){
          // Upload file yang dipilih ke folder tmp
          // dan rename file tersebut menjadi data{ip_address}.xlsx
          // {ip_address} diganti jadi ip address user yang ada di variabel $ip
          // Contoh nama file setelah di rename : data127.0.0.1.xlsx
          move_uploaded_file($tmp_file, 'tmp/'.$nama_file_baru);

          // Load librari PHPExcel nya
          require_once 'PHPExcel/PHPExcel.php';

          $excelreader = new PHPExcel_Reader_Excel2007();
          $loadexcel = $excelreader->load('tmp/'.$nama_file_baru); // Load file yang tadi diupload ke folder tmp
          $sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);

          // Buat sebuah tag form untuk proses import data ke database
          echo "<form method='post' action='import_interview'>";

          // Buat sebuah div untuk alert validasi kosong
      
           // Buat sebuah tombol untuk mengimport data ke database
            echo "<center><button type='submit' name='upload' class='btn btn-success btn-lg'><span class='glyphicon glyphicon-upload '></span> Upload</button></center>";
        
          echo "<table class='table table-bordered'>
          <tr>
            <th colspan='12' class='text-center'>Preview Data</th>
          </tr>
          <tr>
						<th>ID Karyawan</th>
						<th>Leadership Action</th>
						<th>Warrior Performance</th>
						<th>Program Effectiveness </th>
						<th>Impact Evaluation</th>
				

          </tr>";

          $numrow = 2;
          $kosong = 0;
          foreach($sheet as $row){ // Lakukan perulangan dari data yang ada di excel
            // Ambil data pada excel sesuai Kolom
					$id = $row['J']; // Ambil data NIS
					$LA = $row['K']; // Ambil data nama
					$WP = $row['L']; // Ambil data jenis kelamin
					$PE = $row['M']; // Ambil data telepon
					$IE = $row['N']; // Ambil data telepon
					

            // Cek jika semua data tidak diisi
			if(empty($id) && empty($LA) && empty($WP) && empty($PE) && empty($IE) )
							continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)

            // Cek $numrow apakah lebih dari 1
            // Artinya karena baris pertama adalah nama-nama kolom
            // Jadi dilewat saja, tidak usah diimport
            if($numrow > 3){
              // Validasi apakah semua data telah diisi
                           $id_td = ( ! empty($id))? "" : " style='background: #23AA84;'"; // Jika NIS kosong, beri warna merah
							$LA_td = ( ! empty($LA))? "" : " style='background: #23AA84;'"; // Jika Nama kosong, beri warna merah
							$WP_td = ( ! empty($WP))? "" : " style='background: #23AA84;'"; // Jika Jenis Kelamin kosong, beri warna merah
							$PE_td = ( ! empty($PE))? "" : " style='background: #23AA84;'"; // Jika Telepon kosong, beri warna merah
							$IE_td = ( ! empty($IE))? "" : " style='background: #23AA84;'"; // Jika Telepon kosong, beri warna merah
							

              // Jika salah satu data ada yang kosong
				if(empty($id) or empty($LA) or empty($WP) or empty($PE) or empty($IE) )
			  {
                $kosong++; // Tambah 1 variabel $kosong
              }

              echo "<tr>";
							echo "<td".$id_td.">".$id."</td>";
							echo "<td".$LA_td.">".$LA."</td>";
							echo "<td".$WP_td.">".$WP."</td>";
							echo "<td".$PE_td.">".$PE."</td>";
							echo "<td".$IE_td.">".$IE."</td>";
							
              echo "</tr>";
            }

            $numrow++; // Tambah 1 setiap kali looping
          }

          echo "</table>";
	

          // Cek apakah variabel kosong lebih dari 1
          // Jika lebih dari 1, berarti ada data yang masih kosong
          if($kosong > 1000){
          ?>
            <script>
            $(document).ready(function(){
              // Ubah isi dari tag span dengan id jumlah_kosong dengan isi dari variabel kosong
              $("#jumlah_kosong").html('<?php echo $kosong; ?>');

              $("#kosong").show(); // Munculkan alert validasi kosong
            });
            </script>
          <?php
          }else{ // Jika semua data sudah diisi
            echo "<hr>";

           
          }

          echo "</form>";
        }else{ // Jika file yang diupload bukan File Excel 2007 (.xlsx)
          // Munculkan pesan validasi
          echo "<div class='alert alert-danger'>
          Hanya File Excel 2007 (.xlsx) yang diperbolehkan
          </div>";
        }
      }
      ?>
                          
                      </div>
                    </div>
					</div>
					</div>
                  </div>
             
              </div>
               </table>
          </div>
        </div>
</div>