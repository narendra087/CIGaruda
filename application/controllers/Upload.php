<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class upload extends CI_Controller
{
 
  	public function __construct()
  	{
		    parent::__construct();
        $this->load->model('model_users');
		  	$this->load->helper(array('form', 'url'));
  	}
 
  	public function index()
  	{
    		$unit=$this->session->userdata('unit');
    		$data['list_kuesioner']  = $this->model_users->list_kuesioner();
        $data['type_kuesioner']  = $this->model_users->type_kuesioner();
    		$this->load->view('user/view_user', $data);
  	}

  	public function nilai()
    {
        $hasil=$this->input->post();
        $q = count($hasil);
        print_r($hasil);
    }

    public function proses(){
    //sebelum mengeksekusi query
    $this->form_validation->set_rules('judul');
    

      if($_FILES['userfile']['name'] != NULL){
        //form sumbit dengan gambar diisi
        //load uploading file library
         $config['upload_path']   = './uploads/'; 
         $config['allowed_types'] = 'xls|xlsx|csv'; 
         $config['max_size']  = '2048';
         $config['overwrite'] = true;
        
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
          if ( !$this->upload->do_upload()){
            $error = array('error' => $this->upload->display_errors());
                  //var_dump($error);
                  $message = "File yang anda unggah tidak sesuai dengan format. Unggah data kembali.";
            echo "<script type='text/javascript'>alert('$message');
            window.location.href='".base_url("upload")."';</script>";
          }
          else {
            // jika berhasil upload ambil data dan masukkan ke database
            
                    $upload_data = $this->upload->data();

                  //  Include PHPExcel_IOFactory
            include 'PHPExcel/IOFactory.php';

            $inputFileName = $upload_data['full_path'];

            //  Read your Excel workbook
            try {
                $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
                $objReader = PHPExcel_IOFactory::createReader($inputFileType);
                $objPHPExcel = $objReader->load($inputFileName);
            } catch(Exception $e) {
                die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
            }

            //  Get worksheet dimensions
            $sheet = $objPHPExcel->getSheet(0); 
            $highestRow = $sheet->getHighestRow(); 
            $highestColumn = $sheet->getHighestColumn();

            //  Loop through each row of the worksheet in turn
            for ($row = 1; $row <= $highestRow; $row++){ 
                //  Read a row of data into an array
                $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,
                                                NULL,
                                                TRUE,
                                                FALSE);
                //  Insert row data array into your database of choice here
                //print_r($rowData[1]);
                $this->model_users->simpan($rowData);
            }
            
            //delete file
                  $file = $upload_data['file_name'];
                  $path = './uploads/' . $file;
                  unlink($path);

                  $message = "Data telah berhasil diperbaharui";
            echo "<script type='text/javascript'>alert('$message');
            window.location.href='".base_url("upload")."';</script>";
            // }
          }
    }
  }
}