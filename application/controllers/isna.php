<?php
class isna extends CI_Controller{
    public function __construct()
    {
      parent::__construct();
      $this->load->library('session');
      $this->load->helper('url');
      $this->load->model('model_users');
      $this->load->model('Model_isna');
    }

    function index(){
        //$this->load->model('model_isna');
    }


    public function editMetode(){
         $data = array(
                // 'LA' => 'Leadership Age'
                // 'IE' => 'Innovation Element';
                'metode' => $this->Model_isna->metode(),
            );
        $this->load->view('header2');
        $this->load->view('bobot',$data);
        $this->load->view('footer');
      }

    function edit_kue(){
        $id_pertanyaan = $this->uri->segment(3);
        $data['product'] = $this->model_users->product($id_pertanyaan)->row_array();
        $this->load->view('editform/edit_pertanyaan_kue',$data);
    }

    function edit_simpan_kue(){
        $id_pertanyaan  = $this->input->post('id');
        $datapertanyaan = array(
            'pertanyaan'   =>  $this->input->post('pertanyaan'),
            'id_construct'   =>  $this->input->post('id_construct'));
        $this->db->where('id_kuesioner',$id_pertanyaan);
        $this->db->update('tb_pertanyaan',$datapertanyaan);
        redirect('admin/edit_kuesioner');
    }

    public function submitBobot(){
//  $unit=$this->session->userdata('nama','nopeg');
     // $data['varconstruct']  = $this->model_users->type_construct();
      $id  = $this->Model_isna->metode();
      $hasil = $this->input->post();
    //print_r($hasil);
     // echo "<br>";
    //  print_r($id);
      $q=count($hasil);
      redirect('admin');


      //
     $this->Model_isna->simpan($hasil, $id, $q);
    }

    public function nilai_fgd(){
      $unit=$this->session->userdata('admin_username');
      $data['varconstruct'] = $this->model_users->type_construct();
      $id  = $this->model_users->id_fgd();
      $hasil = $this->input->post();
      $q=count($hasil);
      $this->Model_isna->simpan_fgd($hasil, $q, $id);
      $this->load->view('user/submitted', $data);
    }

    public function nilai_observation(){
      $unit=$this->session->userdata('admin_username');
      $data['varconstruct'] = $this->model_users->type_construct();
      $id  = $this->model_users->id_observation();
      $hasil = $this->input->post();
      $q=count($hasil);
      $this->Model_isna->simpan_observation($hasil, $q, $id);
      $this->load->view('user/submitted', $data);
    }

    public function nilai_interview(){
      $unit=$this->session->userdata('admin_username');
      $data['varconstruct'] = $this->model_users->type_construct();
      $id  = $this->model_users->id_interview();
      $hasil = $this->input->post();
      $q=count($hasil);
      $this->Model_isna->simpan_interview($hasil, $q, $id);
      $this->load->view('user/submitted', $data);
    }

    public function nilai_presentation(){
      $unit=$this->session->userdata('admin_username');
      $data['varconstruct'] = $this->model_users->type_construct();
      $id  = $this->model_users->id_presentation();
      $hasil = $this->input->post();
      $q=count($hasil);
      $this->Model_isna->simpan_presentation($hasil, $q, $id);
      $this->load->view('user/submitted', $data);
    }

    public function nilai_ondesk(){
      $unit=$this->session->userdata('admin_username');
      $data['varconstruct'] = $this->model_users->type_construct();
      $id  = $this->model_users->id_interview();
      $hasil = $this->input->post();
      $q=count($hasil);
      $this->Model_isna->simpan_ondesk($hasil, $q, $id);
      $this->load->view('user/submitted', $data);
    }

}
