<?php

class kuesioner extends CI_Controller{
public function __construct()
{
    parent::__construct();
    $this->load->model('model_users');
    $this->load->helper(array('form', 'url'));

}
//tset

public function index()
{
    $unit=$this->session->userdata('nama','nopeg');
    $data['id_kuesioner']  = $this->model_users->id_kuesioner();
    $data['pertanyaan']  = $this->model_users->list_kuesioner();
    $data['varconstruct']  = $this->model_users->type_construct();
    $this->load->view('user/hanya_user', $data);


// print_r($data['id_kuesioner']);
  //  print_r($data['varconstruct']);
    //$this->load->view('header');
    
    //$this->load->view('footer');
}


public function nilai(){
      $unit=$this->session->userdata('nama','nopeg');
      $data['varconstruct']  = $this->model_users->type_construct();
      $id  = $this->model_users->id_kuesioner();
      $hasil = $this->input->post();
      $q=count($hasil);
     //print_r($id);
      //
      $this->model_users->simpan($hasil, $q, $id);
      $this->load->view('user/submitted', $data);

}

public function radbtn4()
{
    $unit=$this->session->userdata('nama','nopeg');
    $data['id_kuesioner']  = $this->model_users->id_kuesioner();
    $data['pertanyaan']  = $this->model_users->list_kuesioner();
    $data['varconstruct']  = $this->model_users->type_construct();



// print_r($data['id_kuesioner']);
  //  print_r($data['varconstruct']);
    //$this->load->view('header');
    $this->load->view('user/view_user4', $data);

    //$this->load->view('footer');
}

public function radbtn5()
{
    $unit=$this->session->userdata('nama','nopeg');
    $data['id_kuesioner']  = $this->model_users->id_kuesioner();
    $data['pertanyaan']  = $this->model_users->list_kuesioner();
    $data['varconstruct']  = $this->model_users->type_construct();



// print_r($data['id_kuesioner']);
  //  print_r($data['varconstruct']);
    //$this->load->view('header');
    $this->load->view('user/view_user5', $data);

    //$this->load->view('footer');
}
}

 ?>
