<?php
  /**
   *
   */
  class admin_index extends CI_Controller
  {

    public function index()
    {
      $unit=$this->session->userdata('admin_username');
      $this->load->view('header');
      $this->load->view('admin/view_admin_index');
      $this->load->view('footer');
    }
  }


 ?>
