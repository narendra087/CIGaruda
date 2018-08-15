<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

  class Asessment_dedy extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->model('model_users');
    $this->load->model('Model_dedy');
    $this->load->helper(array('form', 'url'));
  }

  public function index(){
      $name['name'] = "JKTCC";
      $this->load->view('asessor/header_dedy');
      $this->load->view('asessor/unit', $name);
      $this->load->view('asessor/footer_dedy');
    }


  public function fgd(){
      //$unit=$this->session->userdata('nama','nopeg');
      $data['id_kuesioner']  = $this->model_users->id_fgd();
      $data['pertanyaan']  = $this->model_users->list_fgd();
      $data['varconstruct']  = $this->model_users->type_construct();
      $this->load->view('user/view_fgd', $data);
    }

  public function observation(){
      $data['id_kuesioner']  = $this->model_users->id_observation();
      $data['pertanyaan']  = $this->model_users->list_observation();
      $data['varconstruct']  = $this->model_users->type_construct();
      $this->load->view('user/view_obs', $data);
    }

  public function presentation(){
      $data['id_kuesioner']  = $this->model_users->id_presentation();
      $data['pertanyaan']  = $this->model_users->list_presentation();
      $data['varconstruct']  = $this->model_users->type_construct();
      $this->load->view('user/view_ppt', $data);
    }

  public function interview(){
      $data['id_kuesioner']  = $this->model_users->id_interview();
      $data['pertanyaan']  = $this->model_users->list_interview();
      $data['varconstruct']  = $this->model_users->type_construct();
      $this->load->view('user/view_wwcr', $data);
    }

  }


 ?>
